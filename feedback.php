<?php
require_once 'config.php';
session_start();
$uname = $_SESSION['username'];

$rate = '';

if (isset($_POST['1star'])){
  $rate = 1;
}
if (isset($_POST['2star'])){
  $rate = 2;
}
if (isset($_POST['3star'])){
  $rate = 3;
}
if (isset($_POST['4star'])){
  $rate = 4;
}
if (isset($_POST['5star'])){
  $rate = 5;
}
$val='';
$val=1;

$sql = "update rate set total_rating=total_rating+$rate  username='$uname'";
$sql1 = "update rate set count_rating=count_rating + 1 where username ='$uname'";
mysqli_query($link, $sql);
mysqli_query($link, $sql1);
$message2 ="Thank You!";
      echo "<script type = 'text/javascript'>alert('$message2');</script>";

     // echo "<script>window.close();</script>";
    //  echo "<script>$('abc').submit(function()
    //  {  
    //      var formId = this.id;
    //      if (formId != ''){
    //       $('#btnSubmit').attr('disabled',true);
    //       this.submit();
    //   }
    //  });</script>";

//mysqli_close($link); 




    
    
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel='stylesheet' href='feedback.css'>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

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
<title>FEEDBACK FORM</title>
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
</div>
</nav>

<!-- <div class="wrapper">
<select placeholder='selct'>


<option value="5star">5</option>
<option value="5star">4</option>
<option value="5star">3</option>
<option value="5star">2</option>
<option value="5star">1</option>
</select>
</div> -->

<div class ='wrapper'>
<form method='POST' id= 'abc'>
<input type='submit' id ="btnSubmit" class="btn btn-outline-dark" value='1' name='1star'>
<input type='submit' id ="btnSubmit" class="btn btn-outline-dark" value='2'name='2star'>
<input type='submit' id ="btnSubmit" class="btn btn-outline-dark" value='3' name='3star'>
<input type='submit' id ="btnSubmit" class="btn btn-outline-dark" value='4'name='4star'>
<input type='submit' id ="btnSubmit" class="btn btn-outline-dark" value='5' name='5star'>
</form>
</div>
 
</body>
    </html>
