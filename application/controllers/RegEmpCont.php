<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RegEmpCont extends CI_Controller{
	public function regEmp(){
		$this->form_validation->set_rules('fnm', 'First name', 'required');
		$this->form_validation->set_rules('lnm', 'Last name', 'required');
		//$this->form_validation->set_rules('pstn', 'Position', 'required');
		$this->form_validation->set_rules('addr', 'Address', 'required');
		$this->form_validation->set_rules('dob', 'date of birth', 'required');
		$this->form_validation->set_rules('cntct', 'Contact no', 'required|max_length[10]|min_length[10]');
		$this->form_validation->set_rules('eml', 'email', 'required|valid_email|is_unique[employee.email]');

		if ($this->form_validation->run()==FALSE){
			//echo 'validation failed';
			$this->load->view('Admin_Profile/MngEmpView');

		}else{
			//echo 'validated succesfully';
			$this->load->model('RegEmpModel');
			$isReg1 = $this->RegEmpModel->regEmp();
			$isReg2=FALSE;

			
			if ($isReg1==FALSE) {
				$this->session->set_flashdata('msg','Registration was unsuccesful.. Try again later..');
				redirect('AdminCont/manageEmp');
				# code...
			}
			if($isReg1==TRUE){
				$this->load->model('RegEmpModel');
				$isReg2 = $this->RegEmpModel->regDelCrew();
			}

			if ($isReg2==TRUE) {
                $this->session->set_flashdata('msg','Delivery Crew registered succesfully..');
				redirect('AdminCont/manageEmp');


            }else{
				$this->session->set_flashdata('msg','Employee registered succesfully..');
				redirect('AdminCont/manageEmp');
			}
		}
	}
}