<?php
include_once('./php/db.php');
session_start();


if(array_key_exists('user',$_SESSION)){
$user=$_SESSION['user'];
 
}else{
	
	header("location: home.php");
}
?>
<!DOCTYPE html>
<html lang='en'>
    <meta charset="utf-8">
<head>
<title>Team PR -One stop PR repository</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./src/css/main.css">
	<style type="text/css">
		html{
	background: url('./src/img/lunada.JPG');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	height: 100vh;
}
	</style>
	
	
</head>
<body>
<div class='container'> 

	<?php include_once('./php/parts/nav.php')?>
	<div class='banner'></div>
<div class="row jumbotron ">
	<div class="comm col-md-6 col-sm-6 bg-primary ">
	<h1 class='bg-danger text-center'> www.prhub.co.ke</h1>
	<h1 id='header'> Hello <?php echo $user;?>, welcome to PR Hub</h1>
	<p>We will set up the remaining part of your account and get back to you soon...</p>
	<a  class=' btn btn-warning' target-"_blank" href="https://www.prsk.co.ke"> PRSK website</a>
	<a  class='out btn btn-link' href="home.php?logout=true">Log Out</a>
	
	
	
</div>
<div class="comm col-md-6 col-sm-6 bg-danger table-responsive">
<h3 class='text-center'> DASHBOARD </h3>
<table class='table table-striped table-bordered'>

<tr><thead><th scope='col'>Info </th> <th>Your data</th> </thead> </tr>
<tr><td>Name: </td> <td><?php echo $_COOKIE['userCookieName']; ?> </td></tr>
<tr><td>Email: </td> <td> <?php echo $_COOKIE['userCookie']; ?></td></tr>
<tr> <td>University: </td><td> <?php echo $_COOKIE['userCookieUniv']; ?></td></tr>
<tr> <td>Year of Study: </td><td> <?php echo $_COOKIE['userCookieYear']; ?></td></tr>
</table>
</div>
</div>






<script src='./src/js/main.js'> </script>

</body>
</html>