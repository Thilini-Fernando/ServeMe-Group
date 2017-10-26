<?php include 'HnF/admn_header.php' ?>


	<div class="container">

		<center>
			<h1><b>Food Items</b></h1>

		</center>

		<?php if($this->session->flashdata('msg')){
			echo "<h2>"."<SMALL>".$this->session->flashdata('msg')."</SMALL>"."</h2>";
		} ?>

		<hr>
		<?php echo validation_errors(); ?>

		<?php echo form_open('FoodCont/addFood'); ?>

			<div class="col-sm-6 col-sm-offset-3" style="background-color: orange">

				<div class="form-group">
				    <label for="exampleInputEmail1">Food Item</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ex: Fruit Cake 1kg" name="itm">
				</div>

				<div class="form-group">
				    <label for="exampleInputPassword1">Unit Price</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Unit price" name="u_price">
				</div>

				<div class="form-group">
				    <label for="exampleInputPassword1">Quantity</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Quantity" name="qty">
				</div>
				  
				<div>
					<button type="submit" class="btn btn-default">Submit</button>
				</div>

				<br>

			</div>

			<br>
		<?php echo form_close(); ?>
	</div>

<?php include 'HnF/admn_footer.php' ?>