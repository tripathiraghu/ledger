<?php 
session_start();
$user=$_COOKIE['fname'];
if ($user!="") {

header("location: members.php");
  
} else {
 header("location:login.php");
}
?>
