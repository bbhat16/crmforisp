

<?php
if (isset($_POST['submit']))
{
  require_once "config.php";

  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $plan=$_POST['plan'];
  $exp=$_POST['exp'];
  $email = $_POST['email'];
  
  $s = "select * from users where username = '$username' ";
  $result = mysqli_query($link,$s);
  $n = mysqli_affected_rows($link);
  if ($n == 1)
  {
    $message2 ="username already taken";
    echo "<script type = 'text/javascript'>alert('$message2');</script>";
  }
  else
  {
          $x="insert into users (username,password,user_type) values ('$username','$password','customer')";
          $t = "insert into customer (name,username,email,plan,exp) values ('$name','$username','$email','$plan','$exp')";
          mysqli_query($link , $x);
          mysqli_query($link , $t);
  
          $message1 ="Customer registered successfully";
          echo "<script type = 'text/javascript'>alert('$message1');</script>";
  }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>  
    <title>Create Customer</title>
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
                <a class="dropdown-item" href="view_employee.php"><font color="black">View Employee</a>
                <a class="dropdown-item" href="edit_emp.php"><font color="black">Edit Employee</a>
                <a class="dropdown-item" href="delete_emp.php"><font color="black">Delete Employee</a>
                <a class="dropdown-item" href="view_cust.php"><font color="black">View Customer</a>
                <a class="dropdown-item" href="edit_cust.php"><font color="black">Edit Customer</a>
                <a class="dropdown-item" href="delete_cust.php"><font color="black">Delete Customer</a>
              </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      
    <a href='login.php' class="btn btn-outline-dark" >LogOut</a>
    </form>
  </div>
</nav>
<div class ="wrapper">           
    
    <h2 class='signup'> <font color="black"> Enter Customer Details</h2>
    <div class="form-group">
    <form method='POST' action="">
        <div class="form-group">
           <label>Name</label> 
        <input type="text"  name="name" class="form-control" placeholder="Name" required><br>
        </div>
        <div class="form-group">
        <label>Username</label> 
        <input type="text"  name="username" class="form-control" placeholder="Username" required><br>
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="password"  name="password" class="form-control" placeholder="Password" required><br>
        </div>
        <div class="form-group">
        <label>Confirm Password</label>
        <input type="password"  name="confirm_password" class="form-control"  placeholder="Confirm Password" required><br>
        </div>
    
        <div class="form-group">
        <label>Plan</label>
        <input type="text"  name="plan" class="form-control"  placeholder="Plan" required><br>
        </div>
        <div class="form-group">
        <label>Email</label>
        <input type="email"  name="email" class="form-control" placeholder="Email" required><br>
        </div>
       
        <div class="form-group">
        <label>Expiry Date</label>
        <input type="date"  name="exp" class="form-control"  placeholder="Expiry" required><br>
        </div>
        <div class="form-group">
        <input type="submit" value="Register" name='submit' class='submit'>
        </div>    
      </form>
    </div>
  </div>

    </body>



</html>