<?php

/**
* 
*/
class RegAdminCont extends CI_Controller
{
	
	function regAdmin()
	{
		$this->form_validation->set_rules('fnm', 'First name', 'required');
		$this->form_validation->set_rules('lnm', 'Last name', 'required');
		$this->form_validation->set_rules('addr', 'Address', 'required');
		$this->form_validation->set_rules('dob', 'date of birth', 'required');
		$this->form_validation->set_rules('cntct', 'Contact no', 'required|max_length[10]|min_length[10]');
		$this->form_validation->set_rules('eml', 'email', 'required|valid_email|is_unique[employee.email]');
		$this->form_validation->set_rules('pwd', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('pwd_a', 'Password again', 'required|matches[pwd]');

		if ($this->form_validation->run()==FALSE){
			//echo 'validation failed';
			$this->load->view('Admin_Profile/AdmnRegView');

		}else{
			//echo 'validated succesfully';
			$this->load->model('AdmnModel');
			$isReg1 = $this->AdmnModel->regAdmin1();
			$isReg=FALSE;

			if($isReg1){
				$this->load->model('AdmnModel');
				$isReg = $this->AdmnModel->regAdmin2();
			}

			if ($isReg) {
				$this->session->set_flashdata('msg','Admin registered succesfully..');
				redirect('AdminCont/addNewAdmin');
			}else{
				$this->session->set_flashdata('msg','Registration was unsuccesful.. Try again later..');
				redirect('AdminCont/addNewAdmin');
			}
		}
	}
}