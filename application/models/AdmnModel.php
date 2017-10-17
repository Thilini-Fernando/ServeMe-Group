<?php

/**
* 
*/
class AdmnModel extends CI_Model
{
	
	function loginAdmin()
	{
		$email = $this->input->post('eml');
		$password = $this->input->post('pwd');
		$mstrkey = $this->input->post('mstrk');

		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->where('masterkey', $mstrkey);
		$respnd = $this->db->get('system_admin');

		if ($respnd->num_rows()==1) {
			return $respnd->row(0);
			
		}else{
			return FALSE;
		}
	}

	public function regAdmin1(){
		

		$data1 = array(
			

			'emp_fname' => $this->input->post('fnm',TRUE),
			'emp_lname' => $this->input->post('lnm', TRUE),
			'address' => $this->input->post('addr', TRUE),
			'dob' => nice_date($this->input->post('dob', TRUE), 'Y-m-d'),
			'position'=> 'System Admin',
			'email' => $this->input->post('eml', TRUE),
			'contact_no' => $this->input->post('cntct', TRUE)
			
			//'password' => $this->input->post('pwd', TRUE)
		);

		return $this->db->insert('employee',$data1);
	}


	public function regAdmin2(){

		$email = $this->input->post('eml', TRUE);
		$fname = $this->input->post('fnm', TRUE);
		$lname = $this->input->post('lnm', TRUE);

		$this->db->where('email', $email);
		$this->db->where('emp_fname', $fname);
		$this->db->where('emp_lname', $lname);
		
		//$this->db->where('masterkey', $mstrkey);
		$respnd = $this->db->get('employee');

		if ($respnd->num_rows()==1) {
			$emp_det = $respnd->row(0);
			
		}		

		$data2 = array(

			'emp_id' => $emp_det->emp_id,
			'admin_fname' => $fname,
			'admin_lname' => $lname,
			'address' => $this->input->post('addr', TRUE),
			'contact_no' => $this->input->post('cntct', TRUE),
			'email' => $this->input->post('eml', TRUE),		
			'password' => $this->input->post('pwd', TRUE),
			'masterkey' => '19941114'
		);
		return $this->db->insert('system_admin',$data2);
	}
}