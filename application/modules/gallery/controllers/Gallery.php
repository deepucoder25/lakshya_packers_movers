<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function photo_gallery()
    {
        $data['title'] = "Photo Gallery | " . $this->comp['company3'];
        $data['description'] = "Explore visual highlights of our cargo handling, warehouse storage, specialized container fleets, and global logistics operations at " . $this->comp['company3'] . ".";
        
        $data['photos'] = [];
        try {
            if ($this->db && method_exists($this->db, 'table_exists') && @$this->db->table_exists('gallery')) {
                $this->db->where('status', 1);
                $this->db->order_by('auto_id', 'DESC');
                $query = $this->db->get('gallery');
                if ($query && method_exists($query, 'result')) {
                    $data['photos'] = $query->result();
                }
            }
        } catch (\Throwable $e) {
            log_message('error', 'Failed loading photos: ' . $e->getMessage());
        }
        
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

    function video_gallery()
    {
        $data['title'] = "Video Gallery | " . $this->comp['company3'];
        $data['description'] = "Watch our step-by-step cargo handling processes, transport safety standards, and global freight forwarding operations in action at " . $this->comp['company3'] . ".";
        
        $data['videos'] = [];
        try {
            if ($this->db && method_exists($this->db, 'table_exists') && @$this->db->table_exists('video_gallery')) {
                $this->db->where('status', 1);
                $this->db->order_by('auto_id', 'DESC');
                $query = $this->db->get('video_gallery');
                if ($query && method_exists($query, 'result')) {
                    $data['videos'] = $query->result();
                }
            }
        } catch (\Throwable $e) {
            log_message('error', 'Failed loading videos: ' . $e->getMessage());
        }
        
        $data['module'] = "gallery";
        $data['view_file'] = "video-gallery";
        echo Modules::run('template/layout2', $data);
    }
}