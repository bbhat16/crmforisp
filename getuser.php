<?php
$q='';
    if(isset($_GET['q'])){
$q = $_GET['q'];}

$con = mysqli_connect('localhost','root','','isp');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM rate WHERE username = '".$q."'";
$s="select total_rating/count_rating as 'avg' from rate where username ='".$q."'";

$result = mysqli_query($con,$sql);
$result2=mysqli_query($con, $s);
if(mysqli_num_rows($result) == 0 )
{
    $message = 'No such employee exists';
    echo "<script type = 'text/javascript'>alert('$message');</script>";
}
else
{echo "<table class='table'>
<thead class='thead-light'>
<tr>
<th  scope = 'col'>Name</th>
<th  scope = 'col'>Username</th>
<th  scope = 'col'>Rating</th>
</tr><thead><tbody>"
;
while(($row = mysqli_fetch_array($result)) && ($row2 = mysqli_fetch_array($result2))) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row2['avg'] . "</td>";

    echo "</tr>";
}
echo "</tbody></table>";}
mysqli_close($con);
?>