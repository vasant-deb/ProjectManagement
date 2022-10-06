<?php
session_start();

date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)

// now this data can be used for any function.

//One can even add this to database.

//We will just echo the data.
$conn = mysqli_connect('localhost','nkbsatak_digiconsole','{7E*h*Ai#R}?','nkbsatak_digiconsole');

  $email=$_SESSION["sname"] ;
  $ltime=$_SESSION["ltime"] ;

$sql1 = "SELECT * from users where email='$email'";  
$setRec1 = mysqli_query($conn, $sql1);  
$row = mysqli_fetch_assoc($setRec1);

$logout_time=date("Y-m-d H:i:s");

$sql= mysqli_query($conn,"UPDATE stats set logout_time='$logout_time' where email='$email' and login_time='$ltime'");
	
	
$hours=date("H");
$minutes=date("i");

if($hours<=17){
    
    if($minutes>=30){
        $rp=$row['rp']+1.00;
        $sql= mysqli_query($conn,"UPDATE users set rp='$rp' where email='$email'");
        
    }
    else{
        $rp=$row['rp']-1.00;
        $sql= mysqli_query($conn,"UPDATE users set rp='$rp' where email='$email'");
        
    }
    
} else{
        $rp=$row['rp']-1.00;
        $sql= mysqli_query($conn,"UPDATE users set rp='$rp' where email='$email'");
        
    }
	
 
 session_destroy();


    header('Location: https://cloud.digidiya.com/logout.html');


?>