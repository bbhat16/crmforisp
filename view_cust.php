
<?php 
require_once "config.php";
$username='';
if(isset($_GET['username']))
{
  $username=$_GET['username'];
}
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style> td{ border: 1px solid black; border-collapse: collapse;} th{ align : center;}</style>

<style type="text/css">
    body{ font: 14px sans-serif;}
    .wrapper{ width: 350px; padding: 20px; }
</style>
    <title>View Customer</title>
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
                <a class="dropdown-item" href="create_cust.php"><font color="black">Create Customer</a>
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
<div class="wrapper">
    <h2 class='signup'> <font color="black"> Enter Customer Credentials</h2>
    <div class="form-group">
    
    <div class="form-group">
           <label>Username</label>  
        <input type="text" id="q" name="q" class="form-control" placeholder="username" required><br>
        </div>
        <div class="form-group">
        <button id="showqw"  type="submit" value="Submit" name='submit' class="btn btn-outline-dark">Submit</button>
        </div>  

    </div>
    </div>
    <div id = 'txtHint'  role="alert">
  <h2 class="alert-heading"><font color="black">Customer information will be here</h2>
    
  </div>    

    <script>
$("#showqw").click(function(){
  console.log('hello');
  var name=$('#q').val();
  $.ajax({
    url: "getcust.php",
    data:{ q: name }, 
    success: function(result){
    $("#txtHint").html(result);
    console.log(result);
      
  }});
});
// function showUser(str) {
//     if (str == "") {
//         document.getElementById("txtHint").innerHTML = "";
//         return;
//     } else {
//         if (window.XMLHttpRequest) {
//             // code for IE7+, Firefox, Chrome, Opera, Safari
//             xmlhttp = new XMLHttpRequest();
//         } else {
//             // code for IE6, IE5
//             xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//         }
//         xmlhttp.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//                 document.getElementById("txtHint").innerHTML = this.responseText;
//             }
//         };
//         xmlhttp.open('GET','getuser.php?q='+str,true);
//         xmlhttp.send();
//     }
// }
</script>
    </body>
</html>