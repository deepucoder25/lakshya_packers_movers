<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function houseShifting()
    {
        $data['title'] = "Best House Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional house shifting services from " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "house_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "Professional Office Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure office relocation services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function car()
    {
        $data['title'] = "Safe Car Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Secure car carrier and transportation services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function bike()
    {
        $data['title'] = "Reliable Bike Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Hire trusted two-wheeler and bike transportation services from " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }

    function warehousingStorage()
    {
        $data['title'] = "Safe Warehousing & Storage Services | " . $this->comp['company3'];
        $data['description'] = "Secure warehousing and storage solutions by " . $this->comp['company3'] . ". Safe, monitored, and climate-controlled storage facilities.";
        $data['module'] = "services";
        $data['view_file'] = "warehousing_storage";
        echo Modules::run('template/layout2', $data);
    }

    function localShifting()
    {
        $data['title'] = "Fast & Reliable Local Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Get fast, affordable, and hassle-free local shifting services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "local_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function intercityMoving()
    {
        $data['title'] = "Seamless Intercity Moving Services | " . $this->comp['company3'];
        $data['description'] = "Reliable intercity moving and long-distance relocation services across India by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "intercity_moving";
        echo Modules::run('template/layout2', $data);
    }
}
