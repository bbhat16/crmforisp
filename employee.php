<?php
session_start();
		$conn = mysqli_connect('localhost','root','');  
        mysqli_select_db($conn , 'isp');

    
   // $username = $_GET['username'];
    //$sql="delete from complaints where username='$username'";
  //  $ans = mysqli_query($conn, $sql);
    //echo "deleted";



        
        

 
?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
    <title>Flash|Employee</title>
           <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
    
        <button class="btn btn-light"><?php echo "Hello! ";?><span class="sr-only">(current)</span></button>
      
      
        <a href='login.php' class="btn btn-outline-dark" >LogOut</a>
    </form>
  </div>
</nav>

<div id = 'complaints'>
<font color="#00000">
<table>
    <tr>
        <th>Username</th>
        <th>Complaint</th>
        <th>Solution</th>
        <th>Resolve</th>

        
    </tr>

<?php


    $query = "select * from complaints";
    $result = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_assoc($result))
    {
        $email=$row['email'];
        echo "<tr><td>".$row['username']."</td><td>".$row['complaint']."</td><td><form method='GET' action='sendemail.php'><input type=text name='solution'></td><td><input type='submit'><input type='hidden' value='$email' name='email'></form></td></tr>";
        
    }
?>


</table>
</div>


<!-- Modal -->
<!--<div class="modal fade" id="resolve" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="label">Enter the solution here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action=''>
            <label>SOLUTION</label><br>
            <textarea rows=10 cols=50 name='solution'></textarea><br>
            <input type='submit' name ='submit' value='SUBMIT'>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div> -->

</body>
</html>
