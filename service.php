<?php
  if (isset($_POST['submit']))
  
{ require_once  "config.php";
  $name=$_POST['name'];
    $username=$_POST['username'];
    $complaint = $_POST['complaint'];
    $email = $_POST['email'];
    $sql = "select  * from users where username = '$username' and user_type='customer'";
    $result = mysqli_query($link,$sql);
    if(mysqli_num_rows($result) == 0 ){
      $message1 ="NO SUCH CUSTOMER FOUND";
      echo "<script type = 'text/javascript'>alert('$message1');</script>";

    }
    else{
       $x="insert into complaints (name,username,complaint,email) values ('$name','$username','$complaint','$email')";
               mysqli_query($link , $x);
               $message ="Complaint registered successfully !";
               echo "<script type = 'text/javascript'>alert('$message');</script>";}
}
?>
<!DOCTYPE html>
<html lang ="en">
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <title>Customer service</title>
        <style type="text/css">
        body{ font: 14px sans-serif; }
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

    </ul>
    <form class="form-inline my-2 my-lg-0">
    
      
      
    <a href='login.php' class="btn btn-outline-dark" >LogOut</a>
    </form>
  </div>
</nav>
<div class ="wrapper">           
     <h2 class='signup'> <font color="black"> Register Your complaint</h2>
    <div class="form-group">
    <form method='POST' action="">
    <div class="form-group">
           <label>Name</label> 
        <input type="text"  name="name" class="form-control" placeholder="name" required><br>
        </div>
        <div class="form-group">
           <label>Username</label> 
        <input type="text"  name="username" class="form-control" placeholder="Username" required><br>
        </div>
  
        <div class="form-group">
        <label>Email</label>
        <input type="email"  name="email" class="form-control" placeholder="Email" required><br>
        </div>
        <div class="form-group">
        <label>Complain</label>
        <input type="text" size=100  name="complaint" class="form-control" placeholder="Complaint" required><br>
        </div>
        <div class="form-group">
        <button  type="submit" value="Submit" name='submit' class="btn btn-outline-dark" >Submit</button>

        
        </div>    
      </form>
    </div>
  </div>

</body>
</html>