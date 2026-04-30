<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{

    function index()
    {
        $data['title'] = "About Our Packers Movers | Trusted Relocation Experts";
        $data['description'] = "Learn about our packers and movers company offering reliable relocation services, safe packing, and affordable solutions across India.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us | Reliable Packers and Movers Service";
        $data['description'] = "Discover why customers trust our packers and movers services for safe, affordable, and timely relocation with expert handling and support.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }
    
    function testimonials()
    {
        $data['title'] = "Customer Reviews | Packers Movers Testimonials";
        $data['description'] = "Read genuine customer reviews and testimonials about our packers and movers services, trusted for safe, reliable, and hassle-free relocation.";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }
}
