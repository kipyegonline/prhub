<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Team PR -One stop PR repository</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./src/css/main.css" />
    <style> 
    html{
        background:#ddd;
    }
    
    .card{
	width:23%;
    float:left;
    margin:0.25rem .25rem;
}
.card:last-child{
    margin-left: 0;
}
.cf::after{
    content:"";
    clear:both;
    display:block;
}  
#random-user{
    margin:auto;
    background:beige;
    padding:.5rem;
}  

form{
    width:100%;
}
    @media (max-width:480px){
        .card{
            width:100%;
            float:none;
            display:block;
        }
        .card img{
            width:100%;
        }
    }
    @media (max-width:720px){
        .card{
            width:100%;
            
            display:block;
        }
        .card img{
            width:100%;
        }
    }

    </style>
    
</head>
<body>
<?php include_once('./php/parts/nav.php')?>
<div class='container '> 
<form class=' form-inline'>
<input type='search' class=' form-control' placeholder='search PR'>
<input type='submit' class=' form-control bg-danger' value='Search'>
</form>
<div id='random-user' class='cf container'>
</div>




<footer class='bg-secondary container'>
		<h3 class='text-white'> Copyright &copy; 2018. All rights reserved. Maintained by <a href='http://www.vincekipyegon.co.ke'>VINCE </a> </h3>

<footer>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
 <script src="./src/js/main.js"></script>   
</body>
</html>