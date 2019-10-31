

<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Admin</title>
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
    
        <button class="btn btn-light" type ="button">Hello Admin!</button>
      
      
      <a href='logout.php' class="btn btn-outline-dark" >LogOut</a>
    </form>
  </div>
</nav>

        <div class="jumbotron" style = "background-color : dimgray">
                <h1 class="display-4"><font color="black">Welcome, Admin!</h1>
                <hr class="my-4">
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="employee">
  <!-- create employee -->
<button type="button" onclick="window.location= 'create_employee.php';" class="btn btn-outline-secondary"  ><font color="black"> Create Employee</button> 
<!-- view Employee -->
<button type="button" onclick="window.location= 'view_employee.php';" class="btn btn-outline-secondary" ><font color="black">View Employee</button> 
<!-- edit employee-->   
<button type="button" onclick="window.location= 'edit_emp.php';" class="btn btn-outline-secondary" ><font color="black">Edit Employee</button>
<!-- delete employee-->
<button type="button" onclick="window.location= 'delete_emp.php';"  class="btn btn-outline-secondary" ><font color="black">Delete Employee</button>  
        <hr class="my-4">
        <div class ="customer">
            <!-- create customer-->
          <button type="button" onclick="window.location= 'create_cust.php';"  class="btn btn-outline-secondary" ><font color="black">Create Customer</button>
          <!-- view customer-->
          <button type="button" onclick="window.location= 'view_cust.php';"   class="btn btn-outline-secondary" ><font color="black">View Customer</button>
          <!-- edit customer-->
          <button type="button" onclick="window.location= 'edit_cust.php';"   class="btn btn-outline-secondary" ><font color="black">Edit Customer</button>
          <!-- delete customer-->
          <button type="button" onclick="window.location= 'delete_cust.php';"   class="btn btn-outline-secondary" ><font color="black">Delete Customer</button>
        </div>
            

  </body>
</html>