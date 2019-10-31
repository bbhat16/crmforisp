<?php

 
 
// Check if the user is logged in, otherwise redirect to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }
 
// Include config file
require_once "config.php";
$sr=$_GET['sr'];
$newpass = '';
$s = "select username from rate where sr='$sr'";
$result = mysqli_query($link, $s);
$row = mysqli_fetch_assoc($result);
$uname = $row['username'];
//echo $uname;

if((isset($_POST['new_password'])) &&(isset($_POST['confirm_password'])))
{
    $newpass = $_POST['new_password'];
    $conpass = $_POST['confirm_password'];
    if($newpass != $conpass)
    {
        $message1 ="Passwords do not match";
 echo "<script type = 'text/javascript'>alert('$message1');</script>";
    }
    else
{
    $newpass = $_POST['new_password'];
   //echo $newpass;
   
 $sql = "update users set password = '$newpass' where username = '$uname' and user_type='employee'";
 mysqli_query($link, $sql);
 
 $message2 ="Password was reset successfully";
 echo "<script type = 'text/javascript'>alert('$message2');</script>";
}

}
 
 
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <style type="text/css">
        body{ font: 14px sans-serif; background-color: lightgray; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html#about">About Us<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Options
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color :dimgray">
                <a class="dropdown-item" href="create_employee.php"><font color="black">Create Employee</a>
                <a class="dropdown-item" href="view_emp.php"><font color="black">View Employee</a>
                <a class="dropdown-item" href="edit_emp.php"><font color="black">Edit Employee</a>

                <a class="dropdown-item" href="delete_emp.php"><font color="black">Delete Employee</a>
                <a class="dropdown-item" href="create_cust.php"><font color="black">Create Customer</a>
                <a class="dropdown-item" href="view_cust.php"><font color="black">View Customer</a>
                <a class="dropdown-item" href="edit_cust.php"><font color="black">Edit Customer</a>
                <a class="dropdown-item" href="delete_cust.php"><font color="black">Delete Customer</a>
              </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
   <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search employee" aria-label="Search"> -->
    <a href='logout.php' class="btn btn-outline-dark" >LogOut</a>
    </form>
  </div>
</nav>
    <div class="wrapper">
        <h2>Reset Password</h2>
        <form method="POST"> 
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" placeholder='New password' required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" placeholder='Confirm password' required>
            </div>
            <button class='btn btn-outline-dark' type='submit'>Submit</button>
        </form>
    </div>    
</body>
</html>