<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Booking</title>
<link rel="stylesheet" href="styless.css">
<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>
<body>


<div class="container">
<div class="container-time">
<h2 class="heading">Time Open</h2>
<h3 class="heading-days">Monday-Friday</h3>
<p>7am - 11am (breakfast)</p>
<p>11am - 10pm (lunch/dinner)</p>

<h3 class="heading-days">Saturday and sunday</h3>
<p>9am - 1am (breakfast)</p>
<p>1am - 10pm (lunch/dinner)</p>

<hr>

<h4 class="heading-phone">Call Us: (123) 45-45-456</h4>
</div>

<div class="container-form">
<form action="insert.php" method="POST">
<h2 class="heading heading-yellow">Reservation Online</h2>

<div class="form-field">
<p>Your Name</p>
<input type="text" name="first" placeholder="Your Name">
</div>
<div class="form-field">
<p>Your email</p>
<input type="email" name="mail" placeholder="Your email">
</div>
<div class="form-field">
<p>Date</p>
<input type="date">
</div>
<div class="form-field">
<p>Time</p>
<input type="time">
</div>
<div class="form-field">
<p>How many people?</p>
<select name="select" id="#">
<option value="1">1 person</option>
<option value="2">2 persons</option>
<option value="3">3 persosn</option>
<option value="4">4 persons</option>
<option value="5">5 persons</option>
<option value="5+">5+ persons</option>
</select>
</div>

<button class="btn">Submit</button>
</form>
</div>
</div>

<?php
  
?>


</body>
</html>