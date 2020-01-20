<?php
session_start();
include 'connection.php';

$email=$_POST['email'];
$password=$_POST['password'];



$sql_tab="SELECT * FROM userdetail WHERE email='$email' AND password='$password'";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);
echo $a;
if ($a>0)
{
  	while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{


$id = $row['id'];
$userName=$row['userName'];
$email=$row['email'];
$mobile=$row['Mobile'];

}
header ("location: membersList.php");
$_SESSION['id']=$id;
setcookie("id", $_SESSION['id'], time() +60*60*365 );

$_SESSION['userName']=$userName;
setcookie("userName", $_SESSION['userName'], time() +60*60*365 );

$_SESSION['email']=$email;
setcookie("email", $_SESSION['email'], time() +60*60*365 );

$_SESSION['mobile']=$mobile;
setcookie("mobile", $_SESSION['mobile'], time() +60*60*365 );

echo $userName;
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;echo "<br>";
echo $id;
echo "<br>";
echo $_COOKIE['mobile'];

}


else
{
	$message = "sorry the E-mail and password does not exist";
echo "<script type='text/javascript'>
alert('$message');

</script>";
echo "<script type='text/javascript'>
window.location= 'index.php';

</script>
";

}


?>