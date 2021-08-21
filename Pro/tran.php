
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
$sql_ll="SELECT * FROM trans WHERE id = '".$q."'";



$result_ll = mysqli_query($con,$sql_ll);



echo "<table>
<thead>
<tr>
<th>Place and Transport</th>
<th>Date and Time</th>
<th>Price</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result_ll)) {
  echo "<tr>";
  echo "<td>" . $row['Place and Transport'] . "</td>";
  echo "<td>" . $row['Date and Time'] . "</td>";
  echo "<td>" . $row['Price'] . "</td>";
  
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);

?>


</body>
</html>













