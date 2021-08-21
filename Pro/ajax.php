<?php
	$key=$_GET["key"];
	$s="localhost";
	$u="root";
	$p="";
	$d="login_register_pure_coding";
	$conn=mysqli_connect($s,$u,$p,$d);
	$query="SELECT * FROM users WHERE email LIKE '$key'";
	$rs=mysqli_query($conn,$query);
?>

<table>
	<?php
		while ($row=mysqli_fetch_assoc($rs)) {
			echo "<tr>";
			echo '<td>'.'ID: '.'</td>';
			echo '<td>'.$row["id"].'</td>';
			echo "</tr>";

			echo "<tr>";
			echo '<td>'.'Name: '.'</td>';
			echo '<td>'.$row["username"].'</td>';
			echo "</tr>";

			echo "<tr>";
			echo '<td>'.'email: '.'</td>';
			echo '<td>'.$row["email"].'</td>';
			echo "</tr>";

			echo "<tr>";
			echo '<td>'.'Phone: '.'</td>';
			echo '<td>'.$row["phone"].'</td>';
			echo "</tr>";
		}
	?>
</table>