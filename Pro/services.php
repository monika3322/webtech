<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
      
      <title>services</title>
      <link rel="stylesheet" href="style1.css">
      <script src="ta.js"></script>
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     
</head>
<body>
         
      <input type="checkbox" id="check"></input>
      <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
      </label>
      <div class="sidebar">
            <header>Travel Buddy</header>
            <ul>
                  <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                  <li><a href="tourinfo.php"><i class="fas fa-address-card"></i>Tour Guide</a></li>
                  
                  <li><a href="transportinfo.php"><i class="fas fa-address-card"></i>Transport Info</a></li>
                  <li><a href="bookhotel.php"><i class="fas fa-car-side"></i>Reservation</a></li>
                  
                  <li><a href="insert.php"><i class="fas fa-stream"></i>Search bar</a></li>
                  
                  <li><a href="logout.php"><i class="fas fa-stream"></i>Logout</a></li>
            </ul>
      </div>
      <section><h1>Our Services</h1><br><br>
      <div class="container">
      <div class="box">
     
		<button name="submit"class="btn"><a href="tourinfo.php"><i class="fas fa-shuttle-van"></i>TourGuide</button></a><br><br><br>
	
                  
      </div>         
       <div class="box">
                 
       <button name="submit" class="btn"><a href="transport.php"><i class="fas fa-car-side"></i>Transportation</button></a>

       </div>
       <div class="box">
                 
       <button name="submit" class="btn"><a href="transportinfo.php"><i class="fas fa-address-card"></i>Information</button></a>

       </div>
       </div>
       
       <div class="headabout">
        <h1> About</h1>
        
       </div>
       <!-- Tab links -->
       
      <div class="tab">
       <button class="tablinks" onclick="openCity(event, 'TourGuide')">Tour Guide</button>
        <button class="tablinks" onclick="openCity(event, 'Transportation')">Transportation</button>
        
      </div>

      <!-- Tab content -->
      <div id="TourGuide" class="tabcontent">
       <h3>Tour Guide</h3>
      <p>Our Tour Guide service provide a guide under trip or tour packages where the user want to go on a trip or tour packages.This tour guide service only available for the trip or tour packages.You can see your desire destination information on the information section which we provided.</p>
      </div>

     <div id="Transportation" class="tabcontent">
       <h3>Transportation</h3>
      <p>Our Transportation service provide Transportation for trip or tour packages or Transportation.You can see your desire destination information on the information section which we provided.</p>
      </div>
     
   
      </section>
      
     
</body>
</html>