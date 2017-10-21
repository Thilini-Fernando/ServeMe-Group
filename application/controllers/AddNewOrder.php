<?php


class AddNewOrder extends  CI_Controller{
    public function NewOrder()
    {
        {
           // $this->form_validation->set_rules('tdate', 'Taken Date', 'required');
            $this->form_validation->set_rules('ddate', 'Due Date', 'required');
            //$this->form_validation->set_rules('price', 'Price', 'required');
    }
        if ($this->form_validation->run()==FALSE){
            //echo 'validation failed';
            $this->load->view('Customer_Profile/AddNewOrder');

        }else{
            //echo 'validated succesfully';
            $this->load->model('CustModel');
            $isNewOrd = $this->CustModel->AddNewOrderCustomer();

            if ($isNewOrd) {

                redirect('CustomerCont/loadNewOrder');
            }else{
                $this->session->set_flashdata('msg','Unsuccessful ordering.. Try again..');
                redirect('CustomerCont/loadNewOrder');
            }
        }
    }
}
