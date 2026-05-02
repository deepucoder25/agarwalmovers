<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    

    function photo_gallery()
    {
        $data['title']="Professional Packers & Movers Gallery";
        $data['description']="Explore our professional packing and moving gallery showcasing safe handling, transport, and successful relocation services across India.";
        $data['module']="gallery";
        $data['view_file']="photo-gallery";
        echo Modules::run('template/layout2',$data);
    }
    

}