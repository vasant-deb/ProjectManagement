<?php
require_once "db.php";
session_start();
$title = isset($_POST['title']) ? $_POST['title'] : "";
$start = isset($_POST['start']) ? $_POST['start'] : "";
$end = isset($_POST['end']) ? $_POST['end'] : "";
$email=$_SESSION["sname"];
$sqlInsert = "INSERT INTO tbl_events (title,start,end,email) VALUES ('".$title."','".$start."','".$end ."','".$email ."')";

$result = mysqli_query($conn, $sqlInsert);

if (! $result) {
    $result = mysqli_error($conn);
}
?>