<?php
require_once 'config.php';
session_start();

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

    <style> td{ border: 1px solid black; border-collapse: collapse;}</style>
    <title>Complaint Details</title>
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
<table class="table">
<thead class="thead-light">
    <tr>
        <th scope="cols">Username</th>
        <th scope="cols">Complaint</th>
        <th scope="cols">Solution</th>
        <th scope="cols">Resolve</th>
        

        
    </tr>
</thead>
<tbody>
<?php
    
    $id=$_GET['id'];


    $query = "select * from complaints where id=$id";
    // $result=$link->query($query);
    $result = mysqli_query($link ,$query);
    $row=$result->fetch_row();
    // echo implode($row);
    $email=$row[4];
    echo "<tr><td>".$row[2]."</td><td>".$row[3]."</td><td><form method='GET' action='sendemail.php'><input type=text name='solution'></td><td><button class='btn btn-outline-dark' type='submit'>Submit</button><input type='hidden' value='$email' name='email'><input type='hidden' name='id' value ='$id'></form></td></tr>";
        
    
?>

</thead>
</table>
</div>


    
</body>
</html>