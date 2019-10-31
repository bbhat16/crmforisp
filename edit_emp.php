<!DOCTYPE html>
<html>
    <head>


    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>




    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Edit Employee</title>

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
<input type="text" class="form-control mr-sm-2" id="myInput" onkeyup="myFunction()" placeholder="Search for employees...">
<table class='table' id='myTable'>
<thead class='thead-light'>
<tr>
<th  scope = 'col'>Name</th>
<th  scope = 'col'>Username</th>
<th  scope = 'col'>Edit</th>
</tr><thead><tbody>




<?php 
require_once "config.php";
$sql = 'select *from rate';
$result = mysqli_query($link, $sql);
// echo "<table class='table' id='myTable'>
// <thead class='thead-light'>
// <tr>
// <th  scope = 'col'>Name</th>
// <th  scope = 'col'>Username</th>
// <th  scope = 'col'>Edit</th>
// </tr><thead><tbody>";
while($row = mysqli_fetch_array($result)) {
  $sr = $row['sr'];
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td><form method = 'GET' action = 'reset-password-emp.php'><input type='hidden' name='sr' value='$sr'><button class='btn btn-outline-dark' type='submit'>Change password</button></form></td>";
echo "</tr>";
}
echo "</tbody></table>";

?>   

</tbody></table> 
</body>
</html>