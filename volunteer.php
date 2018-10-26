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
	</style></head>
<body>
<div class='container'> 

    <?php include_once('./php/parts/nav.php')?>
    <div class="row">
        <div class="jumbotron">
    <h3 class='text-center text-bold'> Welcome</h3>
            <p>PR Hub is a platform committed to transforming the Public Relations industry by bringing together PR professionals and PR students  where they can share PR ideas and projects using the emerging technology.The hub is  a <b>voluntary </b>  project led by a group of vibrant PR pros and IT enthusiasts with a sense of humour. 😂😂😂😂😂😂😂</p>

            <hr/>
            

        <div class="col-md-6">
            <p> We welcome you to join our team of vibrant volunteers in the following areas.</p>
            <ul class='list-group'> 
                      <li class='list-group-item'>PR pros/mentors/consultants </li>
                      <li class='list-group-item'>Web developers (front-end and back-end) </li>
                      <li class='list-group-item'> Android developers </li>
                      <li class='list-group-item'>Graphic designers </li>
                     <li class='list-group-item'>Partners </li>
                    
                     <li class='list-group-item'>Critical thinkers </li>
                    
                    
                    <li class='list-group-item'>Data analysts (relational and non-relational databases ) </li>
                    <li class='list-group-item'>Student mobilisers </li>
            </ul>
            
        </div>
        <div class="col-md-6">
            <h3 class='text-center text-bold'>Join PR Hub volunteers.</h3>
            <form name='volunteer'>
                <label>Name:</label>
                <input type='text' class='form-control' placeholder='Enter your name'/>
                <label>Email address:</label>
                <input type='email' class='form-control' placeholder='Enter your email address'/>
                <select class='form-control mb-1'> Category to contribute to
                <option selected>Choose category </option>
                <option>PR pro </option>
                <option>Web developer </option>
                <option>Android dveveloper </option>
                <option>Graphic designer </option>
                <option>Data analyst </option>
                <option>Student mobiliser </option>                
                <option> Partner</option>
                
                </select>
                <textarea name='choice' cols='40' rows='3' class='form-control' placeholder='How woul you like to contribute to PR Hub' maxlength='280'></textarea>
                
                <input type='text' class='btn btn-primary btn-block' placeholder='Enter your name' value='Join'/>


            </form>
       </div>

    
    <footer class='bg-secondary container'>
		<h3 class='text-white'> Copyright &copy; 2018. All rights reserved. Maintained by <a href='http://www.vincekipyegon.co.ke'>VINCE </a> </h3>
		<footer>
        </div>
        </div> <!--row-->


</div><!--container-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src='./src/js/main.js'> </script>

</body>
</html>