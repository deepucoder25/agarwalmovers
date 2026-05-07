<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_mdl extends CI_Model{
	
	
	  
	public function message()
	{
	    
	        $this->load->library('email');
	        $this->email->set_mailtype("html");
	
	        $client_email=$_POST['requestemail'];
	        $client_phone=$_POST['requestphone'];
	        $client_message=$_POST['requestmessage'];
	
	        $message="Urgent Quotation Required !!! <br><font color='red'>Email : $client_email </font><br><br><h3>Phone Number: $client_phone</h3>Message: <b> $client_message</b>";
	
	        $admin_email = $this->comp['adminmail'];
	        $company_name = $this->comp['company3'];
	        $support_email = $this->comp['mail'];
	        $this->email->to($client_email);
	        $this->email->from($support_email, $company_name);
	        $this->email->subject('Thanks for requesting a Quotation');
	        $this->email->message("Hi $client_email,<br> Thanks for requesting a quotation from $company_name. We will get back to you soon.<br><br><br>Regards,<br>$company_name ($support_email)<br>
	            <img src='".base_url()."assets/images/logo/logo.png' height='120px' alt='$company_name logo'>");
	        $this->email->send();
	
	        //admin mail
	        $this->email->to($admin_email);
	        $this->email->from($support_email, $company_name);
	        $this->email->reply_to($client_email);
	        $this->email->subject("New Quotation Required");
	        $this->email->message($message);
	        $this->email->send();
	
	        return true;
	    }
	
}
