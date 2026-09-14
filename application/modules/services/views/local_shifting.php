<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Local Shifting',
    'bc_desc' => 'Local Shifting Services',
    'breadcrumbs' => [
        ['name' => 'Local Shifting']
    ]
]);
?>
