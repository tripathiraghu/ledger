<?php 
ob_start();
session_start();
$email=$_COOKIE['email'];
if ($email=="") {

header("location:login.php");
  
} else {
header("location: membersList.php");
 
}
?>
