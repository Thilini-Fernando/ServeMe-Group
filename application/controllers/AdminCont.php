<?php


class AdminCont extends CI_Controller
{
	
	public function viewProfile(){
		$this->load->view('Admin_Profile/AdmnDashboard');
	}
	public function addNewAdmin(){
		$this->load->view('Admin_Profile/AdmnRegView');
	}
    
}