<?php

class EditCustCont extends CI_Controller
{

    function editCust()
    {

        $this->form_validation->set_rules('eml', 'email', 'valid_email|is_unique[customer.email]');
        $this->form_validation->set_rules('pwd', 'Password', 'min_length[4]');
        $this->form_validation->set_rules('pwd_a', 'Password again', 'matches[pwd]');

        if ($this->form_validation->run()==FALSE){

            $this->load->view('Customer_Profile/EditProf');

        }else{
            $this->load->model('CustModel');
            $isReg=$this->CustModel->EditCustomer();
            //echo 'validated succesfully111';

            if ($isReg!=false) {
                $this->session->set_flashdata('msg','Edit was succesful');
                redirect('CustomerCont/editCust');


            }else{
                $this->session->set_flashdata('msg','Edit was unsuccesful.. Try again later..');
                redirect('CustomerCont/editCust');
            }
        }
    }
}