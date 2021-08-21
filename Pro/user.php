<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">

</head>
<body>

<?php

$q = intval($_GET['q']);
$con = mysqli_connect('localhost','root','','login_register_pure_coding');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM guideinfo WHERE id = '".$q."'";
$sql_l="SELECT * FROM tour WHERE id = '".$q."'";



$result = mysqli_query($con,$sql);
$result_l = mysqli_query($con,$sql_l);
echo "<table>
<thead>
<tr>
<th>Friday Guide</th>
<th>Saturday Guide</th>
<th>Sunday Guide</th>
<th>Transport</th>
<th>Availability</th>
</tr>
</thead>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Friday Guide'] . "</td>";
  echo "<td>" . $row['Saturday Guide'] . "</td>";
  echo "<td>" . $row['Sunday Guide'] . "</td>";
  echo "<td>" . $row['Transport'] . "</td>";
  echo "<td>" . $row['Availability'] . "</td>";
  
  echo "</tr>";
}
echo "<table>
<thead>
<tr>
<th>Place</th>
<th>Price</th>
<th>Transportation</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result_l)) {
  echo "<tr>";
  echo "<td>" . $row['Place'] . "</td>";
  echo "<td>" . $row['Price'] . "</td>";
  echo "<td>" . $row['Transportation'] . "</td>";
  
  echo "</tr>";
}

echo "</table>";
mysqli_close($con);

?>


</body>
</html>