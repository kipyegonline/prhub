<?php
session_start();


if(array_key_exists('user',$_SESSION)){
$user=$_SESSION['user'];
 if(isset($_COOKIE['userCookie'])){
 	$_SESSION['user']=$_COOKIE['userCookie'];

 }
}else{
	header("location: home.php");
}
?>
<!DOCTYPE html>
<html lang='en'>
    <meta charset="utf-8">
<head>
	<title>Team PR</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./src/css/main.css">
	<style type="text/css">
		html{
	background: url('./src/img/IMG_7024.JPG');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	height: 100vh;
}
	</style>
	
	
</head>
<body>
<h1 id='header'><?php echo "welcome  {$user}"?></h1>
<div class="row">
	<div class="comm col-md-4">
	<p>Please note, I will keep your email address for future communications.</p>
</div>
</div>




<a  class='out btn btn-link' href="home.php?logout=true">Log Out</a>
<script src='./src/js.main.js'> </script>

</body>
</html>