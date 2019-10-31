<?php
$q='';
    if(isset($_GET['q'])){
$q = $_GET['q'];}

$con = mysqli_connect('localhost','root','','isp');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM customer WHERE username = '".$q."'";

$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) == 0 )
{
    $message = 'No such customer exists';
    echo "<script type = 'text/javascript'>alert('$message');</script>";
}
//$result2=mysqli_query($con, $s);
else 
{
echo "<table class='table'>
<thead class='thead-light'>
<tr>
<th  scope = 'col'>Name</th>
<th  scope = 'col'>Username</th>
<th  scope = 'col'>Email</th>
<th  scope = 'col'>Plan</th>
<th  scope = 'col'>Expiry date</th>
</tr><thead><tbody>"
;
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['plan'] . "</td>";
    echo "<td>" . $row['exp'] . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";}
mysqli_close($con);
?>