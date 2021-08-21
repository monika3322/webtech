<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
   
}

?>
<?php
$con = mysqli_connect("localhost","root","","login_register_pure_coding");
if (isset($_POST['upload'])){
    $file = $_FILES['image']['name'];
    $query = "INSERT INTO upload(image) VALUES('$file')";
    $res = mysqli_query($con,$query);
    if ($res) {
        move_uploaded_file($_FILES['image']['tmp_name'],"$file");
        
    }
}

?>

<style>
    .wel{
        background:#c9c9cc; ;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <script>
		function search()
	{
			var search_word="<?php echo $_SESSION['email']; ?>";
            http = new XMLHttpRequest();

			
			http.onreadystatechange=function()
			{
				if(http.readyState == 4 && http.status == 200)
				{
					document.getElementById("div1").innerHTML=http.responseText;
				}
			}
			http.open("GET","ajax.php?key="+search_word,true);
			http.send();
			
			
			

			
			
				
			

			
			
		}
	</script>
</head>
<body> 
   <div class="wel">
    <?php echo "<h4>Welcome " . $_SESSION['username'] .".You are now logged in.</h4>";
          
         
           echo "<br><h4>Your Profile Picture: </h4><br>";
           
    ?>
    <div class="cont">
      <div class="col=md=12">
         <div class="row">
             <div class="col-md-6">
                 <h3 class="text-center">Upload Image</h3>
                  <form class="my-5" method="POST" enctype="multipart/form-data">
                   <input type="file" name="image" class="form-control">
                   <input type="submit" name="upload" value="UPLOAD" class="btn btn-success my-3">

                   <br><input type="button" name="ptofile" value="profile" onclick="search()" class="btn btn-success my-3"><br>
                   <div id="div1"></div>

                

                   
                  
                  
                  
                  </form>
    
                </div>
                <div class="col-md-6">
                  
                  <?php
                  $con = mysqli_connect("localhost","root","","login_register_pure_coding");
                    $sel = "SELECT * FROM upload";
                    $que = mysqli_query($con,$sel);
                    #$output = "";
                    if (mysqli_num_rows($que) <1){
                        echo "<h3 class='text-center'>No image uploaded</h3>";
                        
                    }
                    while ($row = mysqli_fetch_array($que)) {
                        echo "<img src='".$row['image']."' class='my-3'style='width:400px;height:400px;'>";
                    }
                
                  ?>
                
                </div>
    
            </div>
    
        </div>
    
    </div>
    <div class="logout">
    
    <a href="logout.php" class="btn">Logout</a><br><br>
    <a href="services.php" class="btn">Services</a>

    </div>
    </div>
</body>
</html>