<?php

class RegCustCont extends CI_Controller
{
	
	function regCust()
	{
		$this->form_validation->set_rules('fnm', 'First name', 'required');
		$this->form_validation->set_rules('lnm', 'Last name', 'required');
		$this->form_validation->set_rules('addr', 'Address', 'required');
		$this->form_validation->set_rules('cntct', 'Contact no', 'required');
		$this->form_validation->set_rules('eml', 'email', 'required|valid_email|is_unique[customer.email]');
		$this->form_validation->set_rules('pwd', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('pwd_a', 'Password again', 'required|matches[pwd]');

		if ($this->form_validation->run()==FALSE){
			//echo 'validation failed';
			$this->load->view('RegView');

		}else{
			//echo 'validated succesfully';
			$this->load->model('CustModel');
			$isReg = $this->CustModel->regCustomer();

			if ($isReg) {
                $this->session->set_flashdata('msg','Registration was succesful`    `                                                                                                                               `   ');
				redirect('HomeCont/loadReg');


            }else{
				$this->session->set_flashdata('msg','Registration was unsuccesful.. Try again later..');
				redirect('HomeCont/loadReg');
			}
		}
	}
}