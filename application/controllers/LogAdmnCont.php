<?php 

class LogAdmnCont extends CI_Controller{

	public function logAdmn(){

		$this->form_validation->set_rules('eml', 'email', 'required|valid_email');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		$this->form_validation->set_rules('mstrk', 'Master key', 'required');

		if ($this->form_validation->run()==FALSE){
			//echo 'validation failed';
			$this->load->view('AdmnLogView');

		}else{
			$this->load->model('AdmnModel');
			$islogged = $this->AdmnModel->loginAdmin();

			if ($islogged) {
				//start admin session

				$admn_det = array(
					

					'admin_id'=>$islogged->admin_id,
					'emp_id'=>$islogged->emp_id,
					'fname'=>$islogged->admin_fname,
					'lname'=>$islogged->admin_lname,
					'address'=>$islogged->address,
					'cntct'=>$islogged->contact_no,
					'email'=>$islogged->email,
					'masterkey'=>$islogged->masterkey,
					'loggedIn' => TRUE
					
				);

				$this->session->set_userdata($admn_det);
				redirect('AdminCont/viewProfile');
				
			}else{
				$this->session->set_flashdata('msg2','Admin login was unsuccesful.. Try again later..');
				redirect('HomeCont/loadAdminLogin');
			}

		}

	}

	function logoutUser(){
		unset($_SESSION['admin_id']);
		unset($_SESSION['emp_id']);
		unset($_SESSION['fname']);
		unset($_SESSION['lname']);
		unset($_SESSION['address']);
		unset($_SESSION['cntct']);
		unset($_SESSION['email']);
		unset($_SESSION['masterkey']);
		unset($_SESSION['loggedIn']);
		redirect('HomeCont/loadAdminLogin');

	}

}

