<?php
session_start();
include 'connection.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Members | Ledger</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="icon" href="image/icon.png">
<style type="text/css">
  <!-- styling of the list -->
  body{


  }

  .container .list{
    background-color: white;
    border:0.5px solid lightgrey;
    margin-top: 12px;
    padding: 10px;
    border-radius: 20px;
    display: flex;
  }
  .container .list .listSub {
    display: block;

  }
  .container .list .listSub .mobile_number{
    font-size: 14px;
    padding-left: 8px;
    /*padding-top: 10px;*/
    margin:0px;
    display: block;
  }
  .container .list .listSub .userName{
    font-size: 20px;
    padding-left: 10px;
    /*padding-top: 5px;*/
    margin:0px;
    display: block;
  }
  .container .list .profileImage{
    border-radius: 20px;
  }

</style>
</head>
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

<!-- navebar Ends -->

<!-- members List -->

<div class="container" style="margin-top: 100px;">

		
<?php
// fetching the user list
$sql_tab="SELECT * FROM members";
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

// printing the user list



// main styling start


echo "<div class="." list".">";
echo "<img src=".$profileImage." width="."50"." height="."50"." class="."profileImage".">";
echo "<div class="." listSub".">";
echo "<p class="."userName".">". $userName."</p>";
echo "<p class="."mobile_number".">(<a href="."tel:". $mobile.">". $mobile."</a>)</p>";
echo "</div>";

echo "<br>";
echo "</div>";


}//closing while

}//closiung if

?>

</div>







</body>


</html>