
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
   
}

?>


<html>
<head>
<link rel="stylesheet" href="style1.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","tran.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>
<input type="checkbox" id="check"></input>
      <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
      </label>
      <div class="sidebar">
            <header>Travel Buddy</header>
            
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                  <li><a href="tourinfo.php"><i class="fas fa-address-card"></i>Tour Guide</a></li>
                  
                  <li><a href="transportinfo.php"><i class="fas fa-address-card"></i>Transport Info</a></li>
                  <li><a href="bookhotel.php"><i class="fas fa-car-side"></i>Reservation</a></li>
                  
                  <li><a href="insert.php"><i class="fas fa-stream"></i>Search bar</a></li>
                  
                  <li><a href="logout.php"><i class="fas fa-stream"></i>Logout</a></li>
            
            
      </div>


<section class="drop">
  <div class="category">
     <h2>Category information</h2>
  
<form class="dp-content">

<div class="dropdown">
  <button class="dropbtn">Transport Information</button>
  <div class="dropdown-content">
  <select name="users" onchange="showUser(this.value)">
  <option value="">Select Schedule : </option>
  <option value="1">Saturday</option>
  <option value="2">Sunday</option>
  <option value="3">Monday</option>
  <option value="4">Tuesday</option>
  <option value="5">Wednesday</option>
  <option value="6">Thursday</option>
  <option value="7">Friday</option>
  </select>
  </div>
</div> 




</div>
<br>
<div id="txtHint"><b>Transport info will be listed here...</b></div>
</section>
</body>
</html>