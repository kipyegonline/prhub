<?php
session_start();
require_once('./php/funcz.php');

$email='';
$username='';
$userError='';
$univ='';
$year='';
$error=[];

//sign in
if(array_key_exists('student', $_POST)){
	//$email=$_POST['email'];
	$email= extractValue('email');
	$username=extractValue('username');
	$univ=extractValue('univ');
	$year=extractValue('year');
	

	//validate values
	if(!checkAvail($email)){
		$error[] .= "Email address is required";
	}
	if(!checkAvail($username)){
		$error[] .= "Name is required";
	}
	if(!checkAvail($univ)){
		$error[] .= "University field is required";
	}
	if(!checkAvail($year)){
		$error[].= "Year of study is required";	
	}
	//AHEAD
	if(sizeOf($error) !==0 ){
		foreach($error as $erro){
			$userError .= "<li> $erro </li>";}
			//echo 'here too';
			//print_r($error);
	}else{
		include_once('./php/db.php');
		//echo $email;
		//echo $username;
		//$error=[];
		$_SESSION['user']=$username;
			// check and set cookie
	setcookie('userCookie', $email, time() + 60 *60 *24);
	setcookie('userCookieUniv', $univ, time() + 60 *60 *24);
	setcookie('userCookieYear', $year, time() + 60 *60 *24);
	setcookie('userCookieName', $username, time() + 60 *60 *24);
	//sendMail($email, $year,$username, $univ);
   
	insertToDb($email, $year,$username, $univ);
	
	
		redirect("index.php");
		return true;
	}
}

	//logging out
	if(isset($_GET['logout']) && $_GET['logout']=='true'){
		session_destroy();
		unset($_SESSION['user']);
		if(isset($_COOKIE['userCookie'])){
		setcookie('userCookie', null, time() - 60 *60 *24);
		
	
	}
		
	redirect('home.php');	
	
}
//check if empty fields




	
	


?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
<head>
	<title>Team PR -One stop PR repository</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">

	<style type="text/css">
		html{
	background: url('./src/img/Burning Orange.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}
.banner{
	max-width:100%;
	background:url(src/img/PRHUB1.jpg) no-repeat;
	background-size:contain;
	height:500px;
	overflow:hidden;
	width:1000px;
	margin:0 auto;
	padding:0;
}
	</style>
<link rel="stylesheet" type="text/css" href="./src/css/main.css">
</head>
<body>
<div class="container">
<!--Header-->
	
		<!--Nav-->	
	
	<?php include_once('./php/parts/nav.php')?><button>Log in <button>
	<div class='banner container'></div>
	<div class='jumbotron'> 
		
	<div class=row> 
		<div class='col-md-4 col-sm-12 bg-secondary '> 
			<h3 class='text-center  text-white my-3'> ABOUT PR HUB </h3>
			<p class=' text-white'>PR Hub is a repository for all public relations practitioners and PR students in Kenya. It is a one stop education platform where individuals and companies can store and share  public relations materials, campaigns and projects. The Hub  brings together PR pros from the public and private sector as well as students. </p>
			<hr/>

		</div> <!--== row 1===-->
		<div class='col-md-4 col-sm-12  card bg-primary'> <!--== row 2==-->
		<h3 class='text-center  text-white my-1'>Who Can Join? </h3>
		<p class=' text-white'>PR Hub is an open hub  to all PR practioners registered by the PRSK and university students pursuing PR course. </p>
		<hr/>
		<h3 class='text-center  text-white my-1'>Why Should I Join? </h3>
		<p class=' text-white'>PR hub is a centralized repo that gathers all PR materials,campaigns and projects in one platform. The hub also acts as a linkage connects students and graduates with companies storing and sharing their repositories on the hub.  All PR job postings and internships will be shared o the hub.</p>
		<hr/>
		</div>

		<div class='col-md-4 col-sm-12 card'> <!--==row 3==-->
		<div class='card-head'> 
		<h3 class='text-center  my-1 join'>REGISTER NOW </h3>
		  
		</div><!--card head-->
		<div class='card-body'>
		<div class="form-group">
    <label for="category" class='text-bold'>Choose your category</label>
    <select class="form-control" id="category">
      <option value='pro'>Public Relations practitioner</option>
      <option value='grad'>Graduate</option>
      <option value='student'>Student</option>
      <option value='comp'>Company</option>
      
	</select>
	<p class='error'> </p>
  </div>
  <?php include_once('./php/parts/regforms.php');?>
</div> <!--card body-->
<hr/>
		</div> <!-- col end-->
</div> <!-- jumbotron div-->

	</div>
	<footer class='bg-secondary container'>
		<h3 class='text-white'> Copyright &copy; 2018. All rights reserved. Maintained by <a href='http://www.vincekipyegon.co.ke'>VINCE </a> </h3>
		<footer>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src="src/js/main.js"></script>

</body>
</html>