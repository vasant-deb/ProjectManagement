<?php
ini_set('session.gc_maxlifetime', 86400);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(86400);

session_start(); // ready to go!

$email=$_POST['email'];

$pwd=md5($_POST['password']);

// now this data can be used for any function.

//One can even add this to database.

//We will just echo the data.
$conn = mysqli_connect('localhost','nkbsatak_digiconsole','{7E*h*Ai#R}?','nkbsatak_digiconsole');
$sql = "SELECT * from users where email='$email' && password='$pwd'";  
$setRec = mysqli_query($conn, $sql);  
$row = mysqli_fetch_assoc($setRec);

$sql2 = "SELECT login_time from stats where email='$email' ORDER BY id DESC LIMIT 1";  
$setRec2 = mysqli_query($conn, $sql2);  
$row2 = mysqli_fetch_assoc($setRec2);



 $currentd=$row2['login_time'];
  $pdate=date("Y-m-d");
 
 
 $time = strtotime($currentd);

$currentd = date('Y-m-d',$time);
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$login_time=date("Y-m-d H:i:s");

$hours=date("H");
$minutes=date("i");

if($hours<=9){
    
    if($minutes<=0){
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





 if($currentd==$pdate){
     
     $data = array(
    "username" => $email,
    "message"  => "Already Logged in for Today",
    "error" => true 
    );
  //  $data[] = $data;
    echo json_encode($data); 
     
 }
 else{


if(!empty($row['email'])){
    
  
$email=$row['email'];
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP')){
        $ipaddress = getenv('HTTP_CLIENT_IP');}
    else if(getenv('HTTP_X_FORWARDED_FOR')){
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');}
    else if(getenv('HTTP_X_FORWARDED')){
        $ipaddress = getenv('HTTP_X_FORWARDED');}
    else if(getenv('HTTP_FORWARDED_FOR')){
        $ipaddress = getenv('HTTP_FORWARDED_FOR');}
    else if(getenv('HTTP_FORWARDED')){
       $ipaddress = getenv('HTTP_FORWARDED');}
    else if(getenv('REMOTE_ADDR')){
        $ipaddress = getenv('REMOTE_ADDR');}
    else{
        $ipaddress = 'UNKNOWN';
    }




$sql= mysqli_query($conn,"INSERT INTO stats(email,ip_address,login_time)VALUES ('$email','$ipaddress','$login_time')");
	
    
    
$_SESSION["ltime"] = $login_time;    
$_SESSION["sname"] = $email;

    $user=$row['email'];
      $role=$row['role'];
    $data = array(
    "username" => $user,
    "role"=> $role,
    "message"  => "Login Success",
    "error" => false 
    );
  //  $data[] = $data;
    echo json_encode($data);
}
else{
    $data = array(
    "username" => "none",
    "message"  => "Invalid Credentials",
    "error" => true 
    );
  //  $data[] = $data;
    echo json_encode($data);
}
}
?>