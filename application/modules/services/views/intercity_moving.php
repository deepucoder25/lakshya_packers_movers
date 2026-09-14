<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Intercity Moving',
    'bc_desc' => 'Intercity Moving Services',
    'breadcrumbs' => [
        ['name' => 'Intercity Moving']
    ]
]);
?>
