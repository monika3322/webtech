<?php 

include 'config.php';
session_start();


error_reporting(0);

$email="";
$err_email="";

$password ="";
$err_pass="";

$has_error=false;

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {

	if(empty($_POST['email']))
	    {
            $err_email="*email Requires";
            $has_error=true;
	
			
		}
		else
		{
            $email=$_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $err_email = "Invalid email format";
                $has_error=true;
              }
        }

		if(empty($_POST['password']))
		{
            $err_pass="*password Requires";
            $has_error=true;
			
			
		}

		if(!$has_error)
        {
          
            
            $email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		
		$_SESSION['username'] = $row['username'];
		$_SESSION['email'] = $row['email'];
		header("Location: welcome.php");
	} 
	else {
		
			echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	 }
        
            
            
            
        }
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form - Travel Buddy</title>
</head>
<body>
    <h1>Welcome to Travel Buddy</h1>

	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" >
				<span style="color:red" id="na"><?php echo $err_email;?>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" >
				<span style="color:red" id="na"><?php echo $err_pass;?>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>