<?php include 'HnF/admn_header.php' ?>

	<div id="container">
		<center>
			<h1><b>Admin Profile</b></h1>

    		<?php echo 'Employee id: '.$this->session->userdata('emp_id');?>
    		<br>
    		<?php echo 'Admin id: '.$this->session->userdata('admin_id'); ?>
    		<br>    

    		<?php		

    		$cur_date = date('Y-m-d');
    		echo 'Current date: '.$cur_date;

    		?>


			
		</center>
	</div>

<?php include 'HnF/admn_footer.php' ?>