<?php include 'HnF/header.php' ?>

	<div class="container">
		
		<h1><b>
			<center>Customer Registration Form</center>
		</b></h1>

		<?php if($this->session->flashdata('msg')){
			echo "<h2>"."<SMALL>".$this->session->flashdata('msg')."</SMALL>"."</h2>";
		} ?>

		<hr>				

		<?php echo validation_errors(); ?>
		<?php echo form_open('RegCustCont/regCust'); ?>
			
			<div class="col-sm-6 col-sm-offset-3">
				<div class="form-group">
				    <label for="exampleInputEmail1">First name</label>
			    	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="eg: Nimal" name ="fnm">
				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1">Last name</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="eg: Perera" name="lnm">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Address</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="address" name="addr">
				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1">Contact no</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="07X-XXXXXXX" name="cntct">
				</div>
				<div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="__@email.com" name="eml">
				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd">
				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1">Confirm Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password again" name="pwd_a">
				</div>			 

				<br> 
				  
				<button type="submit" class="btn btn-default">Submit Form</button>

				<br>

			</div>
			
		<?php echo form_close(); ?>	
		
	</div>

<?php include 'HnF/footer.php' ?>