<?php
	/* for logout functionality */
    session_start();
    session_destroy();
    session_start();
 
	if (isset($_POST['submit']))
	{

		$conn = mysqli_connect('localhost','root','');
		mysqli_select_db($conn , 'isp');
		
		$uname = $_POST['username'];
		$_SESSION['username'] = $uname;
		$pass = $_POST['password'];
		$_SESSION['password'] = $pass;
        
		$s = "select * from users where username = '$uname' and password = '$pass'";
		$result = mysqli_query($conn , $s);
		
    if (mysqli_num_rows($result) > 0 )
      	{
            $sql = "select user_type from users where username = '$uname' and password = '$pass'";
            $result = mysqli_query($conn , $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  $role = $row["user_type"];
                }
            }
            

            if ($role == 'admin'){
                
                header('Location: sample.php');
            }
            elseif ($role == 'employee')
            {
                header('Location: complaint.php');
            }
            elseif($role == 'customer'){
                header('Location: service.php');
            }
            else{
                echo 'something went wrong';
            }
        }
      else {
        $message ="Please enter valid credentials";
        echo "<script type = 'text/javascript'>alert('$message');</script>";
      }

		
		
  }
	
 ?>

 <!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
        body{ font: 14px sans-serif; background-color: lightgray; }
        .wrapper{ width: 300px;padding:20px }
    </style>
    <title>LOGIN|Flash</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
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
    
    
      
  </div>
</nav> 
 <div class ="wrapper">           
    
    <h2 class='signup'> <font color="black">Log In</h2><br>
    <div class="form-group" > 
    <form method='POST' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        <div class="form-group" >
        <label>Username</label> 
        <input type="text"  name="username" class="form-control" placeholder="Username" required><br>
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="password"  name="password" class="form-control" placeholder="Password" required><br>
        </div>
        <div class="form-group">
        <button type='submit' class="btn btn-outline-secondary" name='submit'><font color="black">Log In</button>
        <button type='reset' class="btn btn-outline-secondary" name='reset'><font color="black">Reset</button>

        </div>    
    </div>
    
    </body>
</html>