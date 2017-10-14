<?php


class CustomerCont extends CI_Controller
{
	
	public function viewProfile(){
		$this->load->view('Customer_Profile/CustProfile');
	}
}