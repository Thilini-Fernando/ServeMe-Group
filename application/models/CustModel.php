<?php

/**
* 
*/
class CustModel extends CI_Model{
	
	function regCustomer(){

		$data = array(

			'cust_fname' => $this->input->post('fnm',TRUE),
			'cust_lname' => $this->input->post('lnm', TRUE),
			'address' => $this->input->post('addr', TRUE),
			'contact_no' => $this->input->post('cntct', TRUE),
			'email' => $this->input->post('eml', TRUE),
			'password' => $this->input->post('pwd', TRUE)
		);
		
		return $this->db->insert('customer',$data);

	}

	function logCustomer(){

		$email = $this->input->post('eml');
		$password = $this->input->post('pwd');

		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$respnd = $this->db->get('customer');

		if ($respnd->num_rows()==1) {
			return $respnd->row(0);
			
		}else{
			return FALSE;
		}

	}

    function AddNewOrderCustomer(){

        $data = array(
            'taken_date' => $this->input->post('tdate',TRUE),
            'due_date' => $this->input->post('ddate', TRUE),
            'price' => $this->input->post('price', TRUE),

        );
        $this->db->get('customer');
        //$customer_id=$this->session->set_userdata('user_id');



        return $this->db->insert('orders',$data);

    }
}