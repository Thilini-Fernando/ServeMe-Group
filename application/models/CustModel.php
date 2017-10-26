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
			'password' => sha1($this->input->post('pwd', TRUE))
		);
		
		return $this->db->insert('customer',$data);

	}

	function logCustomer(){

		$email = $this->input->post('eml');
		$password = sha1($this->input->post('pwd'));

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

            $customer_id =1;
    		$cur_date = date('Y-m-d');
    		//echo 'Current date: '.$cur_date;
            $customer_id = $this->session->userdata('user_id');
           // echo $customer_id;

            $data = array(
            'taken_date' => $cur_date,
            'cust_id'=> $customer_id,
            'due_date' => $this->input->post('ddate', TRUE),

           // 'taken_date' => $cur_date,
            

            //'price' => $this->input->post('price', TRUE),

        );
        //$this->db->get('customer');




        return $this->db->insert('orders',$data);

    }
}

function EditCustomer(){

}