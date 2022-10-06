<?php
require_once "../calendar/db.php";
session_start();


$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'uploads/'; // upload directory
if(!empty($_POST['name']) || !empty($_POST['email']) || $_FILES['image'])
{
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) 
{
echo "<img src='$path' />";
$email = $_POST['email'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$state = $_POST['stt'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$ephone = $_POST['ephone'];
$joindate = $_POST['joindate'];
$slack = $_POST['slack'];
$account = $_POST['account'];
$ifsc = $_POST['ifsc'];
$bloodgroup = $_POST['bloodgroup'];
//include database configuration file
//insert form data in the database
$sqlInsert = "UPDATE users SET dob='$dob',address='$address',state='$state',city='$city',pincode='$pincode',emergency_phone='$ephone',started_at='$joindate',slack='$slack',account='$account',ifsc='$ifsc',blood_group='$bloodgroup',profile='$path',status='1' where email='$email'";

$result = mysqli_query($conn, $sqlInsert);

if (!$result) {
    echo $result = mysqli_error($conn);
}
//echo $insert?'ok':'err';
}
} 
else 
{
echo 'invalid';
}
}






?>