<?php
require_once "../calendar/db.php";
session_start();
 $message = isset($_POST['message']) ? mysqli_real_escape_string($conn,$_POST['message']) : "";
 $email=$_SESSION["sname"];
  $date=date("Y-m-d");
$sqlInsert = "INSERT INTO workreport (email,date,message) VALUES ('$email','$date','$message')";

$result = mysqli_query($conn, $sqlInsert);

if (!$result) {
     $result = mysqli_error($conn);
}
?>