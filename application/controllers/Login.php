<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


function __construct(){
	parent::__construct();

}
function index(){
	if($this->session->userdata('logged_in')){
		redirect('home','refresh');
	}
	else{
		$this->load->view('login/login_view');

	}
}
}