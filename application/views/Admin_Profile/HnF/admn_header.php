<?php
	if(!($this->session->userdata('loggedIn'))){
		redirect('HomeCont/loadAdminLogin');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


</head>
<body>

	<!-- Latest compiled and minified JavaScript -->
	
	<nav class="navbar navbar-default">
	  	<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">ServeMe</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <!--li><a href="<?php echo base_url('index.php/AdminCont/viewProfile'); ?>">My Profile<span class="sr-only">(current)</span></a></li-->
	        <li><a href="<?php echo base_url('index.php/AdminCont/addNewAdmin') ?>">Admin Registration</a></li>
	        <li><a href="#">Manage food items</a></li>
	        <li><a href="#">Manage employees</a></li>
	        <li><a href="#">Manage orders</a></li>

	        
	      </ul>
	      
	      <ul class="nav navbar-nav navbar-right">        

	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('fname')." ".$this->session->userdata('lname') ?><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url('index.php/AdminCont/viewProfile'); ?>">View Profile</a></li>
	            <li><a href="#">Edit Profile</a></li>
	            <li><a href="<?php echo base_url('index.php/LogAdmnCont/logoutUser') ?>">logout</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>