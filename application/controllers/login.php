<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    function index(){
	$this->load->helper(array('form'));
        $this->load->helper('url');
        $this->load->view('bootstrap/header');
        $this->load->view('login_view');
        $this->load->view('bootstrap/footer');
    }
}
?>