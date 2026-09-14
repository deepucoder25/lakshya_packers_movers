<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Warehousing & Storage',
    'bc_desc' => 'Warehousing & Storage Services',
    'breadcrumbs' => [
        ['name' => 'Warehousing & Storage']
    ]
]);
?>
