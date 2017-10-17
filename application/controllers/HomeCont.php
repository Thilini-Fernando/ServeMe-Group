<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCont extends CI_Controller{
	public function index(){
		$this->load->view('HomeView');
	}

	public function loadLogin(){
		$this->load->view('LoginView');
	}
	public function loadReg(){
		$this->load->view('RegView');
	}

	public function loadAdminLogin(){
		$this->load->view('AdmnLogView');
	}


}

