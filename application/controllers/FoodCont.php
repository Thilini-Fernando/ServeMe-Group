<?php

class FoodCont extends CI_Controller{
	public function addFood(){
		$this->form_validation->set_rules('itm', 'Item name', 'required|is_unique[food_items.food_name]');
		$this->form_validation->set_rules('u_price', 'Unit price', 'required');
		$this->form_validation->set_rules('qty', 'Quantity', 'required');

		if ($this->form_validation->run()==FALSE){
			//echo 'validation failed';
			$this->load->view('Admin_Profile/ManageFoodView');

		}else{
			$this->load->model('FoodItemModel');
			$isReg = $this->FoodItemModel->newFoodItem();
		}
		
		if ($isReg) {
			$this->session->set_flashdata('msg','Food Item added succesfully..');
			redirect('AdminCont/manageFood');
		}else{
			$this->session->set_flashdata('msg','Unsuccessful task.. Try again later..');
			redirect('AdminCont/manageFood');
			}
		}
}
