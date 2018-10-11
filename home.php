<?php
session_start();
$email='';
$error='';
//sign in
if(array_key_exists('submit', $_POST)){
	$email=$_POST['email'];
	if(empty($_POST['email']) && empty($_POST['name'])){
  $error= "Name and email is required";
	}elseif(empty($_POST['email'])){
	$error= "Email is required";	
	}elseif(empty($_POST['name'])){
	$error= "Name is required";	
	}elseif (!empty($_POST['name'])) {

		$_SESSION['user']=$_POST['name'];
		// check and set cookie
		if($_POST['stay']=='1' ){
			setcookie('userCookie', $_POST['email'], time() + 60 *60 *24);
		}
		
		
		header("location: index.php");
	}else{
		echo " Try again later";
	}
}
//logging out
if(isset($_GET['logout']) && $_GET['logout']=='true'){
	session_destroy();
	unset($_SESSION['user']);
	if(isset($_COOKIE['userCookie']))
	setcookie('userCookie', null, time() - 60 *60 *24);
	
header('location: home.php');
}



?><!DOCTYPE html>
<html>
    <meta charset="utf-8">
<head>
	<title>Team PR -One stop PR repository</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style type="text/css">
		html{
	background: url('./src/img/Burning Orange.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}
	</style>
<link rel="stylesheet" type="text/css" href="./src/css/main.css">
</head>
<body>
<div class="container">
	<header> 
		<div>
			<img src='src/img/PR2.png' height='100' width='100' alt='PR icon'>
		<h1 class='float'> PR HUB: ONE PLATFORM PUBLIC RELATIONS REPOSITORY. </h1> </div>
		
	</header>
	<div class='jumbotron'> 
	<div class=row> 
		<div class='col-md-4 bg-secondary '> 
			<h3 class='text-center  text-white my-3'> ABOUT PR HUB </h3>
			<p class=' text-white'>PR Hub is a repository for all public relations practitioners and PR students in Kenya. It is a one stop education platform where individuals and companies can store and share  public relations materials, campaigns and projects. The Hub  brings together PR pros from the public and private sector as well as students. </p>
			<hr/>

		</div> <!--== row 1===-->
		<div class='col-md-4 text-center card bg-primary'> <!--== row 2==-->
		<h3 class='text-center  text-white my-1'>Who Can Join? </h3>
		<p class=' text-white'>PR Hub is an open hub  to all PR practioners registered by the PRSK and university students pursuing PR course. </p>
		<hr/>
		<h3 class='text-center  text-white my-1'>Why Should I Join? </h3>
		<p class=' text-white'>PR hub is a centralized repo that gathers all PR materials,campaigns and projects in one platform. The hub also acts as a linkage connects students and graduates with companies storing and sharing their repositories on the hub.  All PR job postings and internships will be shared o the hub.</p>
		<hr/>
		</div>

		<div class='col-md-4 card'> <!--==row 3==-->
		<div class='card-head'> 
		<h3 class='text-center  my-1'>JOIN NOW </h3>
		  
		</div><!--card head-->
		<div class='card-body'>
	<form method="post" class="form">
	<h3 class='text-center bg-danger my-2 text-white'>STUDENTS </h3>
	  <p class='error'><?php echo $error;?> </p>
	  <label>1. Name:</label>
	<input type="text"class='form-control' placeholder='Enter first name,second name' name="name">

	  <label>2. Email address:</label>
	<input type="email" class='form-control'name="email" placeholder='Enter your email address' value="<?php echo $email;?>">
	<label>3. University/College:</label>
	<input type="text" class='form-control'name="email" placeholder='Enter your university' value="<?php echo $email;?>">
	<label>4. Year of Study:</label>
	<input type="text"class='form-control' placeholde='Year 4' name="name">

	<input type="submit" class='btn btn-primary' name="submit" value="JOIN">
		
	</form>
</div> <!--card body-->
<hr/>
		</div> <!-- col end-->
</div> <!-- jumbotron div-->

	</div>
	<footer class='bg-secondary container'>
		<h3 class='text-white'> Copyright &copy; 2018. All rights reserved. Maintained by <a href='http://www.vincekipyegon.co.ke'>VINCE </a> </h3>
		<footer>
</div>

</body>
</html>