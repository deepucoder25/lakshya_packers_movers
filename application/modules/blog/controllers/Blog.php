<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {

    function __construct(){
        parent::__construct();
    }

    private function slugify($text) {
        $text = strtolower($text);
        $text = preg_replace('~[^a-z0-9\s-]~', '', $text);
        $text = preg_replace('~[\s-]+~', '-', $text);
        return trim($text, '-');
    }

    private function loadBlogs() {
        // First try loading from database
        try {
            $this->load->database();
            if ($this->db && method_exists($this->db, 'table_exists') && @$this->db->table_exists('blog')) {
                $query = $this->db->order_by('b_id', 'DESC')->get('blog');
                if ($query && method_exists($query, 'num_rows') && $query->num_rows() > 0) {
                    $rows = $query->result_array();
                    $blogs = [];
                    foreach ($rows as $r) {
                        $date_raw = isset($r['date']) ? $r['date'] : '';
                        $created_at = isset($r['timestamp']) ? $r['timestamp'] : '';
                        if (empty($created_at) && !empty($date_raw)) {
                            // Check if dd/mm/yyyy
                            if (preg_match('/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/', $date_raw, $m)) {
                                $created_at = $m[3] . '-' . $m[2] . '-' . $m[1] . ' ' . (isset($r['time']) ? $r['time'] : '00:00:00');
                            } else {
                                $created_at = date('Y-m-d H:i:s', strtotime($date_raw));
                            }
                        }
                        if (empty($created_at)) {
                            $created_at = date('Y-m-d H:i:s');
                        }

                        $blogs[] = [
                            'id'          => $r['b_id'],
                            'b_id'        => $r['b_id'],
                            'title'       => $r['title'],
                            'main_title'  => isset($r['main_title']) ? $r['main_title'] : $r['title'],
                            'slug'        => !empty($r['slug']) ? $r['slug'] : $this->slugify($r['title']),
                            'description' => isset($r['description']) ? $r['description'] : '',
                            'content'     => isset($r['description']) ? $r['description'] : '',
                            'image'       => isset($r['image']) ? $r['image'] : '',
                            'date'        => isset($r['date']) ? $r['date'] : '',
                            'time'        => isset($r['time']) ? $r['time'] : '',
                            'author'      => isset($r['author']) ? $r['author'] : 'Admin',
                            'tags'        => isset($r['tags']) ? $r['tags'] : '',
                            'meta_title'  => isset($r['meta_title']) ? $r['meta_title'] : '',
                            'meta_desc'   => isset($r['meta_desc']) ? $r['meta_desc'] : '',
                            'created_at'  => $created_at
                        ];
                    }
                    return $blogs;
                }
            }
        } catch (\Throwable $e) {
            log_message('error', 'Error loading blogs from database: ' . $e->getMessage());
        }

        // Fallback to JSON file if database has no rows
        $path = FCPATH . 'admin_data/blogs.json';
        if (!file_exists($path)) return [];
        return json_decode(file_get_contents($path), true) ?: [];
    }

    function index() {
        redirect('blog/view');
    }

    function view(){
        $this->load->library('pagination');
        $this->load->helper('text'); 

        $all_blogs = $this->loadBlogs();
        $total_rows = count($all_blogs);
        $per_page = 6;
        $offset = (int) $this->uri->segment(3);

        $config['base_url'] = site_url('blog/view');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 3;

        $config['full_tag_open'] = '<ul class="styled-pagination clearfix text-center">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="#" class="active rc_first_hr color_dark">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_link'] = 'First';

        $this->pagination->initialize($config);

        $data['blogs'] = array_slice($all_blogs, $offset, $per_page);
        $data['total'] = $total_rows;
        $data['recent_posts'] = array_slice($all_blogs, 0, 5);

        $data['title'] = "Official Blog of ".$this->comp['company3']." India";
        $data['description'] = "Latest blog of ".$this->comp['company3'];
        $data['module'] = "blog";
        $data['view_file'] = "blog"; 

        echo Modules::run('template/layout2', $data);
    }

    public static function get_image_url($image_name) {
        if (empty($image_name)) return null;
        if (substr($image_name, 0, 4) === 'http') return $image_name;

        // Admin uploads to assets/uploads/blog/
        if (file_exists(FCPATH . 'assets/uploads/blog/' . $image_name)) {
            return base_url('assets/uploads/blog/' . $image_name);
        }
        // Fallback for older uploads/blogs/
        if (file_exists(FCPATH . 'uploads/blogs/' . $image_name)) {
            return base_url('uploads/blogs/' . $image_name);
        }
        return null;
    }

    function read($slug = '') {
        // die("DEBUG: Slug received: " . $slug);
        $this->load->helper('text');

        $all_blogs = $this->loadBlogs();
        $selected_blog = null;
        
        foreach ($all_blogs as $b) {
            $custom_slug = $b['slug'] ?? '';
            $auto_slug = $this->slugify($b['title']);
            
            // Handle CI's translate_uri_dashes by replacing _ back to - in incoming slug
            $search_slug = str_replace('_', '-', $slug);

            if (
                (!empty($custom_slug) && strtolower($custom_slug) == strtolower($search_slug)) || 
                (strtolower($auto_slug) == strtolower($search_slug)) ||
                ($b['id'] == $search_slug)
            ) {
                $selected_blog = (object) $b;
                break;
            }
        }

        if ($selected_blog) {
            $data['query'] = [$selected_blog];
            $data['recent_posts'] = array_slice($all_blogs, 0, 5);
            
            $data['title'] = !empty($selected_blog->meta_title) ? $selected_blog->meta_title : ucfirst($selected_blog->title);
            $data['description'] = !empty($selected_blog->meta_desc) ? $selected_blog->meta_desc : word_limiter(strip_tags($selected_blog->description), 200);
            
            $img_url = self::get_image_url($selected_blog->image);
            $data['img'] = $img_url ?: base_url('assets/img/packing_moving.jpg');
            
            $data['module'] = "blog";
            $data['view_file'] = "view"; 

            echo Modules::run('template/layout2', $data);
        } else {
            show_404();
        }
    }
}
