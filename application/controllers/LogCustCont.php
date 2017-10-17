<?php

class LogCustCont extends CI_Controller
{
	
	public function logCust()
	{		
		$this->form_validation->set_rules('eml', 'email', 'required|valid_email');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		

		if ($this->form_validation->run()==FALSE){
			//echo 'validation failed';
			$this->load->view('LoginView');

		}else{
			
			$this->load->model('CustModel');
			$isLog = $this->CustModel->logCustomer();

			if ($isLog) {
				//start of session

				$user_det = array(
					

					'user_id'=>$isLog->cust_id,
					'fname'=>$isLog->cust_fname,
					'lname'=>$isLog->cust_lname,
					'address'=>$isLog->address,
					'contact'=>$isLog->contact_no,
					'email'=>$isLog->email,
					'loggedIn' => TRUE
					
				);

				$this->session->set_userdata($user_det);
				redirect('CustomerCont/viewProfile');

			}else{
				$this->session->set_flashdata('msg2','User login was unsuccesful.. Try again later..');
				redirect('HomeCont/loadLogin');
			}

		}
	}
	function logoutUser(){
		unset($_SESSION['user_id']);
		unset($_SESSION['fname']);
		unset($_SESSION['lname']);
		unset($_SESSION['address']);
		unset($_SESSION['contact']);
		unset($_SESSION['email']);
		unset($_SESSION['loggedIn']);
		redirect('HomeCont/loadLogin');

	}
}