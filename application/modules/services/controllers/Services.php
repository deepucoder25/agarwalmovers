<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Services extends MX_Controller
{

    function homeshifting()
{
    $data['title'] = "Home Shifting Services | Safe & Affordable Moving";
    $data['description'] = "Professional home shifting services with secure packing, careful handling, and timely delivery. Affordable relocation solutions for stress-free moving.";
    $data['module'] = "services";
    $data['view_file'] = "homeshifting";
    echo Modules::run('template/layout2', $data);
}

 function carshifting()
{
    $data['title'] = "Car Transport Services | Safe Vehicle Shifting";
    $data['description'] = "Reliable car transport services with secure carriers, door-to-door delivery, and complete safety. Affordable and damage-free vehicle relocation.";
    $data['module'] = "services";
    $data['view_file'] = "carshifting";
    echo Modules::run('template/layout2', $data);
}

 function courier()
{
    $data['title'] = "Courier Services | Fast & Secure Delivery";
    $data['description'] = "Reliable courier services for fast and safe parcel delivery. Door-to-door service with timely shipping and affordable pricing across India.";
    $data['module'] = "services";
    $data['view_file'] = "courier";
    echo Modules::run('template/layout2', $data);
}

 function ibaapproved()
{
    $data['title'] = "IBA Approved Packers Movers | Trusted Service";
    $data['description'] = "IBA approved packers and movers offering secure and reliable relocation services. Ideal for bank employees and safe official shifting needs.";
    $data['module'] = "services";
    $data['view_file'] = "ibaapproved";
    echo Modules::run('template/layout2', $data);
}

 function insurances()
{
    $data['title'] = "Moving Insurance Services | Secure Relocation";
    $data['description'] = "Protect your goods with moving insurance services. Get complete coverage against damage, loss, and risk during packing and relocation.";
    $data['module'] = "services";
    $data['view_file'] = "insurances";
    echo Modules::run('template/layout2', $data);
}
 function loading()
{
    $data['title'] = "Loading Unloading Services | Safe Handling Help";
    $data['description'] = "Professional loading and unloading services with trained staff. Ensure safe lifting, careful handling, and damage-free goods movement.";
    $data['module'] = "services";
    $data['view_file'] = "loading_unloading";
    echo Modules::run('template/layout2', $data);
}

 function luggage()
{
    $data['title'] = "Luggage Delievery Services | Safe Parcel Moving";
    $data['description'] = "Affordable luggage transport services for safe and quick delivery. Ideal for personal goods, bags, and small shipments across cities.";
    $data['module'] = "services";
    $data['view_file'] = "luggage";
    echo Modules::run('template/layout2', $data);
}

 function office()
{
    $data['title'] = "Office Relocation Services | Fast Business Moving";
    $data['description'] = "Efficient office shifting services with minimal downtime. Safe packing, secure transport, and smooth relocation for businesses.";
    $data['module'] = "services";
    $data['view_file'] = "office";
    echo Modules::run('template/layout2', $data);
}

 function packing()
{
    $data['title'] = "Packing and Unpacking Services | Secure Goods Protection";
    $data['description'] = "Professional packing services using quality materials. Ensure maximum safety, damage protection, and organized relocation for all items.";
    $data['module'] = "services";
    $data['view_file'] = "packing_unpacking";
    echo Modules::run('template/layout2', $data);
}
}