<?php

class Dashboard extends CI_Controller {
    
   function __construct() {
        parent::__construct();
        if (isset($_SESSION['userid']) && ($_SESSION['userid'] < 1)){
    	redirect('welcome/verify','refresh');
    }
  }
  
 
  function index(){	
	$data['title'] = "Dashboard Home";
	$data['main'] = 'admin_home';
	$this->load->vars($data);
    $this->load->view('dashboard');
  }
 
 function logout(){
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	$this->session->set_flashdata('error',"You've been logged out!");
	redirect('welcome/verify','refresh'); 	
 }
 
}
?>