<?php

/**
* 
*/
class RegEmpModel extends CI_Model
{
	
	public function regEmp()
	{
			$position='Employee';
			$isSelect=FALSE;
			$isSelect = $this->input->post('dlvry');
			if($isSelect){
				$position = 'Delivery Crew';
			}
		$data1 = array(

			'emp_fname' => $this->input->post('fnm',TRUE),
			'emp_lname' => $this->input->post('lnm',TRUE),
			'address' => $this->input->post('addr',TRUE),
			'dob' =>nice_date($this->input->post('dob', TRUE), 'Y-m-d'),
			'position' => $position,
			'email' => $this->input->post('eml',TRUE),
			'contact_no' => $this->input->post('cntct',TRUE)
		);

		//echo "mypos: ".$position;
		return $this->db->insert('employee',$data1);
	}

	public function regDelCrew(){

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
			'dc_fname' => $fname,
			'dc_lname' => $lname,
			'email' => $this->input->post('eml', TRUE),		
			
		);
		if(($emp_det->position)=='Delivery Crew'){
			return $this->db->insert('delivery_crew',$data2);
		}else{
			return FALSE;
		}
			

	}
		
}