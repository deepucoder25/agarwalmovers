<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts_mdl extends CI_Model
{
    private $config;
    function __construct()
    {
        parent::__construct();
        // $this->load->database();
        $this->config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.hostinger.com',
            'smtp_port' => 587,
            'smtp_user' => 'info@agarwalpackersindia.org',
            'smtp_pass' => '5W+kHNk/XaI8',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
    }
  


public function bookings()
{
    $this->load->library('email', $this->config);
    $this->email->set_newline("\r\n");
    $this->email->set_crlf("\r\n");

    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $phone = $this->input->post('phone');
    $mfrom = $this->input->post('mfrom');
    $mto = $this->input->post('mto');
    $msg = $this->input->post('message');

    // Insert booking data into the database
    // $this->db->insert('bookings', array(
    //     "name" => $name,
    //     "email" => $email,
    //     "phone" => $phone,
    //     "mfrom" => $mfrom,
    //     "mto" => $mto,
    //     "msg" => $msg
    // ));

    // Admin notification email
    $msgd = "Services Needed";
    $adminMessage = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$msgd</q></b><br><br>Client's Name:  <b>$name</b><br><br>From: <b>$mfrom</b><br><br>To: <b>$mto</b><br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br>Email: <b> $email</b><br><br>Client Msg: <b>$msg</b></div>";

    $this->email->to("arshadktr9@gmail.com");
    $this->email->from("info@agarwalpackersindia.org");
 
    $this->email->subject('New Booking Enquiry Received');
    $this->email->message($adminMessage);
    $this->email->send();


    return true;
}

    public function newsletter()
    {
        $email = $this->input->post('email');
        $this->db->insert('newsletter', array("email" => $email));
        return true;
    }
    public function faq()
    {
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $question = $this->input->post('question');
        $this->db->insert('faq', array("phone" => $phone,"name" => $name,"question"=> $question));
        return true;
    }
    public function contact(){
        $this->load->library('email', $this->config);
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $qry = $this->input->post('message');
        // $this->db->insert('contacts', array("name"=>$name,"phone"=>$phone,"message"=>$qry,"email" => $email));
        $message = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$qry</q></b><br><br>Client's Name:  <b>$name</b><br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br>Email: <b> $email</b></div>";
       $this->email->to("arshadktr9@gmail.com");
    $this->email->from("info@agarwalpackersindia.org");
        if (@$email)
            $this->email->reply_to(@$email);
        $this->email->subject('New Contacts Enquiry Received '.$this->comp['companydomain']);
        $this->email->message($message);
        $this->email->send();
        return true;
    }
}
