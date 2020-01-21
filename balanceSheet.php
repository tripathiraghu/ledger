<?php
ob_start();
include 'connection.php';
session_start();
$id=$_GET['nm'];

// fetching the user detail current user details
$sql_tab="SELECT * FROM members where id='$id'";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);

if ($a>0)
{
  	while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{


$id = $row['id'];

$userName=$row['name'];

$email=$row['email'];
$mobile=$row['mobile_number'];
$profileImage=$row['profileImage'];

}//closing while

}//closiung if

?>







<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Balance Sheet | Ledger</title>
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="icon" href="image/icon.png">
<body style="background-color: ghostwhite;">
<!-- navbar -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php"><img src="image/icon.png" height="50" width="50" style="margin-right: 2%"> Ledger</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addMember.php">Add Member</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
        
      </div>
    </nav>
<!-- user name -->
<div class="container " style="margin-top: 80px;">

<div class="row">
	<!-- profile picture -->
	<div class="col-3">
		<img src="<?php  echo $profileImage; ?>" width="50" height="50" style="border-radius: 20px;">
	</div>


	<!-- profile Name -->
	<div class="col-6">
		<p style="padding-top: 10px;" align="center"><?php  echo $userName; ?></p>
</div>
	<!-- call button -->
	<div class="col-3" align="center">
		<a href="tel:<?php  echo $mobile; ?>" class="text-success"> 
			<i class="fa fa-phone-square" aria-hidden="true" style="font-size: 50px"></i>
		</a>
</div>
</div>
</div>

<div class="container">
	
</div>
<div class="baseButton fixed-bottom container" style="margin-bottom: 20px;">
  <div class="row">
  <!-- credit -->
  <div class="col-6">
    <button type="button" class="btn btn-success btn-block"><i class="fa fa-arrow-down" aria-hidden="true"></i></i> Credit</button>
  </div>
<!-- debit -->
<div class="col-6">
    <button type="button" class="btn btn-danger btn-block"><i class="fa fa-arrow-up" aria-hidden="true"></i> Debit</button>
  </div>

  </div>
</div>

</body>
</html>