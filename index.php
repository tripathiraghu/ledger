<?php 
session_start();
$email=$_COOKIE['email'];
if ($email!="") {

header("location: membersList.php");
  
} else {
 header("location:login.php");
}
?>
