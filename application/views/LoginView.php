<?php include 'HnF/header.php' ?>

	<div class="container">
		<center>
			<h1><b>Login Forum</b></h1>
		</center>

		<?php if($this->session->flashdata('msg2')){
			echo "<h2>"."<SMALL>".$this->session->flashdata('msg2')."</SMALL>"."</h2>";
		} ?>

		<hr>
		<?php echo validation_errors(); ?>

		<?php echo form_open('LogCustCont/logCust'); ?>

			<div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="__@xmail.com" name="eml">
			</div>
			<div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd">
			</div>

			<br> 
			  
			<button type="submit" class="btn btn-default">Login</button>

		<?php echo form_close(); ?>
	</div>

<?php include 'HnF/footer.php' ?>