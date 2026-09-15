<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Services widget
$this->load->view('service_widget');

// Load the Process widget
$this->load->view('process_widget');

// Load the About Us widget
$this->load->view('about_widget');

// Load the Badges / Trust widget
$this->load->view('badge_widget');

// Load the Reviews / Testimonials widget
$this->load->view('review_widget');

// Load the FAQs widget
$this->load->view('faqs_widget');
?>
