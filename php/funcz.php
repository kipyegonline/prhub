<?php
//include_once('./php/db.php');
function extractValue($value){
    return strip_tags(htmlspecialchars($_POST[$value]));
    
    
}
function checkAvail($value){
    if(isset($value) && $value !==""){
        return true;
    }
}
function sendMail($mail,$joinDate,$member,$school){
$to='vinnykipx@gmail.com';
$subject='New member';
$body=" <p>The following member:\n\n $member ($mail) is a \n\n $joinDate year  from \n\n $school University </p>";
$headers="From: noreply@prhub.co.ke";
$headers .= "Reply-To: $mail";
if(mail($to,$subject,$body,$headers)){
    echo 'Sent';
}else{
    echo 'Server error';
}

}
function redirect($url){
    header("location: $url");
}

function insertToDb($mail,$joinDate,$member,$school){
    global $connection;
    
    $Query="INSERT INTO `students` (`email`,`year`, `name`,`university`) VALUES (
        '".mysqli_real_escape_string($connection, $mail)."',
        '".mysqli_real_escape_string($connection, $joinDate)."',
        '".mysqli_real_escape_string($connection, $member)."',
        '".mysqli_real_escape_string($connection, $school)."'
        )";
    
    $result= mysqli_query($connection,$Query);
    
   if($result){
       echo "done";
   }else{
       echo "Database is busy" .mysqli_connect_error($connection);
   }
}

//insertToDb($email, $year,$username, $univ);