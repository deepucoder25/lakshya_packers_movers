<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reviews extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    function index()
    {
        $this->load->library('pagination');
        
        $star_filter = $this->input->get('star');
        $total_rows = 0;
        $reviews_result = null;

        try {
            $this->load->database();
            if ($this->db && method_exists($this->db, 'table_exists') && @$this->db->table_exists('reviews')) {
                // Count total active reviews for pagination
                $this->db->where('status', 1);
                if ($star_filter) {
                    $this->db->where('stars', $star_filter);
                }
                $total_rows = (int) $this->db->count_all_results('reviews');
            }
        } catch (\Throwable $e) {
            log_message('error', 'Failed counting reviews: ' . $e->getMessage());
        }
        
        // Pagination Config
        $config['base_url'] = site_url('reviews');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 9;
        $config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        
        $config['full_tag_open'] = '<ul class="pagination justify-content-center" style="margin-top: 30px;">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="javascript:void(0)" class="page-link" style="background:#002446; border-color:#002446; color:#fff;">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');
        
        $this->pagination->initialize($config);
        
        $offset = $this->input->get('per_page') ? (int) $this->input->get('per_page') : 0;

        // Fetch data
        try {
            if ($this->db && method_exists($this->db, 'table_exists') && @$this->db->table_exists('reviews')) {
                $this->db->order_by('r_id', 'desc');
                $this->db->where('status', 1);
                if ($star_filter) {
                    $this->db->where('stars', $star_filter);
                }
                $reviews_result = $this->db->get('reviews', $config['per_page'], $offset);
            }
        } catch (\Throwable $e) {
            log_message('error', 'Failed loading reviews: ' . $e->getMessage());
        }
        
        $data['reviews'] = $reviews_result;
        $data['pagination'] = $this->pagination->create_links();
        $data['title'] = "Customer Reviews & Ratings | " . $this->comp['company3'];
        $data['description'] = "Detailed feedback and ratings from our satisfied clients. Read real reviews about our freight forwarding services at " . $this->comp['company3'] . ".";
        $data['module'] = "reviews";
        $data['view_file'] = "reviews";
        echo Modules::run('template/layout2', $data);
    }

    function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->load->database();
            
            $email = $this->input->post('email');
            
            // Check if email already exists
            $this->db->where('email', $email);
            $existing = $this->db->get('reviews');
            
            if ($existing->num_rows() > 0) {
                $this->session->set_flashdata('error', 'You have already submitted a review with this email address.');
                redirect('reviews');
                return;
            }
            
            $uploaded_images = [];
            if (isset($_FILES['review_images']) && !empty($_FILES['review_images']['name'][0])) {
                $upload_path = FCPATH . 'assets/images/reviews/';
                if (!is_dir($upload_path)) mkdir($upload_path, 0777, true);
                
                $files = $_FILES['review_images'];
                $count = count($files['name']);
                
                for($i=0; $i<$count; $i++) {
                    $tmp_name = $files['tmp_name'][$i];
                    $name = $files['name'][$i];
                    $error = $files['error'][$i];
                    $size = $files['size'][$i];
                    
                    if ($error === UPLOAD_ERR_OK) {
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        $mime = finfo_file($finfo, $tmp_name);
                        finfo_close($finfo);
                        
                        $allowed_mimes = ['image/jpeg', 'image/png', 'image/webp', 'image/jpg'];
                        if (in_array($mime, $allowed_mimes)) {
                            // Convert everything to jpg for simplicity and compression
                            $new_name = uniqid('rev_') . '.jpg';
                            $dest = $upload_path . $new_name;
                            
                            if ($size > 150000) {
                                // Compress and resize if over 150KB
                                $info = getimagesize($tmp_name);
                                if ($info) {
                                    $image = null;
                                    if ($mime == 'image/jpeg' || $mime == 'image/jpg') $image = @imagecreatefromjpeg($tmp_name);
                                    elseif ($mime == 'image/png') $image = @imagecreatefrompng($tmp_name);
                                    elseif ($mime == 'image/webp') $image = @imagecreatefromwebp($tmp_name);
                                    
                                    if ($image) {
                                        // Handle PNG transparency to white background
                                        if ($mime == 'image/png' || $mime == 'image/webp') {
                                            $bg = imagecreatetruecolor(imagesx($image), imagesy($image));
                                            imagefill($bg, 0, 0, imagecolorallocate($bg, 255, 255, 255));
                                            imagealphablending($bg, TRUE);
                                            imagecopy($bg, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
                                            imagedestroy($image);
                                            $image = $bg;
                                        }
                                        
                                        $width = imagesx($image);
                                        $height = imagesy($image);
                                        if ($width > 800) {
                                            $new_width = 800;
                                            $new_height = floor($height * (800 / $width));
                                            $tmp_img = imagecreatetruecolor($new_width, $new_height);
                                            imagecopyresampled($tmp_img, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                                            $image = $tmp_img;
                                        }
                                        imagejpeg($image, $dest, 60);
                                        imagedestroy($image);
                                        $uploaded_images[] = 'assets/images/reviews/' . $new_name;
                                    }
                                }
                            } else {
                                // If it's small enough but not a jpeg, we still rename it to jpg but we should convert it
                                // Or we just keep the original extension if it's small. Let's keep original extension.
                                $ext = pathinfo($name, PATHINFO_EXTENSION);
                                $new_name = uniqid('rev_') . '.' . $ext;
                                $dest = $upload_path . $new_name;
                                move_uploaded_file($tmp_name, $dest);
                                $uploaded_images[] = 'assets/images/reviews/' . $new_name;
                            }
                        }
                    }
                }
            }
            
            $r_img_val = implode(',', $uploaded_images);
            
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'r_title' => $this->input->post('city'), // We use r_title to store city
                'r_desc' => $this->input->post('review'),
                'stars' => (int) $this->input->post('rating'),
                'status' => 1, // Auto approve (direct show)
                'b_id' => 0,
                'r_img' => $r_img_val,
                'views' => 0,
                'posted_date' => date('Y-m-d H:i:s')
            );
            
            $this->db->insert('reviews', $data);
            
            $this->session->set_flashdata('success', 'Thank you! Your review has been submitted successfully.');
            redirect('reviews');
        }
    }

    public function review()
    {
        if ($this->input->method() !== 'post') {
            return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['err' => 1, 'msg' => 'Invalid request method.']));
        }

        $this->load->database();

        $name = trim($this->input->post('name', TRUE));
        $email = trim($this->input->post('email', TRUE));
        $title = trim($this->input->post('title', TRUE));
        $stars = (int) $this->input->post('stars');
        $desc = trim($this->input->post('desc', TRUE));

        if (empty($name)) {
            return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['err' => 1, 'msg' => 'Please enter your full name.']));
        }

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['err' => 1, 'msg' => 'Please enter a valid email address.']));
        }

        if (empty($desc)) {
            return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['err' => 1, 'msg' => 'Please enter your review or feedback description.']));
        }

        if ($stars < 1 || $stars > 5) {
            $stars = 5;
        }

        $uploaded_image = '';
        if (isset($_FILES['img']) && !empty($_FILES['img']['name']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
            $upload_path = FCPATH . 'assets/uploads/reviewimg/';
            $thumb_path = FCPATH . 'assets/uploads/reviewimg/thumb/';
            if (!is_dir($upload_path)) @mkdir($upload_path, 0777, true);
            if (!is_dir($thumb_path)) @mkdir($thumb_path, 0777, true);

            $tmp_name = $_FILES['img']['tmp_name'];
            $orig_name = $_FILES['img']['name'];
            $ext = strtolower(pathinfo($orig_name, PATHINFO_EXTENSION));
            $allowed_exts = ['jpg', 'jpeg', 'png', 'webp'];

            if (in_array($ext, $allowed_exts)) {
                $clean_ext = ($ext === 'jpeg') ? 'jpg' : $ext;
                $new_name = 'rev_' . time() . '_' . mt_rand(1000, 9999) . '.' . $clean_ext;
                $dest = $upload_path . $new_name;
                $dest_thumb = $thumb_path . $new_name;

                if (move_uploaded_file($tmp_name, $dest)) {
                    @copy($dest, $dest_thumb);
                    $uploaded_image = $new_name;
                }
            }
        }

        $data = array(
            'b_id'        => 0,
            'name'        => $name,
            'email'       => $email,
            'r_title'     => !empty($title) ? $title : 'Verified Customer Review',
            'r_desc'      => $desc,
            'r_img'       => $uploaded_image,
            'stars'       => $stars,
            'views'       => 0,
            'status'      => 1, // 1 = Approved/Active so it is immediately visible on testimonials page and in admin
            'posted_date' => date('Y-m-d H:i:s'),
            'timestamp'   => date('Y-m-d H:i:s'),
            'r_type'      => 'Customer',
            'admin_reply' => null,
            'city'        => !empty($title) ? $title : null
        );

        $inserted = $this->db->insert('reviews', $data);

        if ($inserted) {
            return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'err' => 0,
                    'msg' => 'Thank you! Your review has been submitted successfully and is now live on our website.'
                ]));
        } else {
            return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'err' => 1,
                    'msg' => 'Unable to save your review at this time. Please try again.'
                ]));
        }
    }
}