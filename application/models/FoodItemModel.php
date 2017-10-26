<?php

/**
* 
*/
class FoodItemModel extends CI_Model
{
	
	public function newFoodItem(){
		$data1 = array(
			

			'food_name' => $this->input->post('itm',TRUE),
			'remaining_qty' => $this->input->post('qty', TRUE),
			'unit_price' => $this->input->post('u_price', TRUE),
			
		);

		return $this->db->insert('food_items',$data1);
	}
}