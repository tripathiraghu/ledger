<?php
ob_start();
session_start();
include 'connection.php';
$userId=$_GET['nm'];
$id=$userId;
$amount = $_GET['amount'];
$reason = $_GET['reason'];
$type = "Debit";
echo $userId;
echo "<br>";
echo $amount;
echo "<br>";
echo $reason;

$sql_tab="INSERT INTO transaction( id, type, amount, reason, date) VALUES ('$userId','$type','$amount','$reason',CURRENT_DATE)";

mysqli_query($con,$sql_tab);
// $message = "Memebr Added ";
// echo $sql_tab;
// echo "<script type='text/javascript'>
// alert('$message');

// </script>";
// echo "<script type='text/javascript'>
// // window.location= 'balanceSheet.php?nm=$id;

// </script>";
header("Location: balanceSheet.php?nm=".$id."");





?>
