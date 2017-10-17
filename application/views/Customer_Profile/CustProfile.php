<?php include 'HnF/cus_header.php' ?>

	<div id="container">
		<center>
			<h1><b>Customer Profile</b></h1>

    		<?php echo 'Customer id: '.$this->session->userdata('user_id');?>
    		<br>
    		<?php

    		$cur_date = date('Y-m-d');
    		echo 'Current date: '.$cur_date;

    		?>


			
		</center>
	</div>

<?php include 'HnF/cus_footer.php' ?>