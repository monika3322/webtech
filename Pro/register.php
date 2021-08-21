<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone=$_POST['phone'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email,phone, password)
					VALUES ('$username', '$email','$phone', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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

	<title>Register Form - Travel Buddy</title>
	<script type="text/javascript">
            function validate() {

                            var error="";
                            var chc="";
                            var name = document.getElementById( "f1" );
                            var email = document.getElementById( "f2" );
                            var phone = document.getElementById( "f3" );
                            var pass = document.getElementById( "f4" );
                            var confirmpass = document.getElementById( "f5" );
                            
                            
                            if( name.value == "" )
                            {
                            error = " You Have To Write user Name. ";
                            
                            document.getElementById( "na" ).innerHTML = error;

                            chc="ok";
                           
                            }

                            if( name.value != "" )
                            {
                                if(!name.value.replace(/\s/g, '').length)
                                {
                                    error = " name cannot be only space. ";
                            
                                    document.getElementById( "na" ).innerHTML = error;
                                    chc="ok";
                                }

                                else if(name.value.match(/^[a-zA-Z\s]+$/))
                                {
                                    error = "";
                            
                                   document.getElementById( "na" ).innerHTML = error;
                                    
                                }
                                else{
                                   
                                  error = " name can  only be latter and space. ";
                            
                                    document.getElementById( "na" ).innerHTML = error;
                                    chc="ok";
                                }
                            
                           
                            }


							if( email.value == "" )
                            {
                            error = " You Have To give a email address. ";
                            
                            document.getElementById( "na1" ).innerHTML = error;

                            chc="ok";
                           
                            }

                            if( email.value != "" )
                            {
                                if(!email.value.replace(/\s/g, '').length)
                                {
                                    error = " email cannot be only space. ";
                            
                                    document.getElementById( "na1" ).innerHTML = error;
                                    chc="ok";
                                }

                                else if(email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
                                {
                                    error = "";
                            
                                   document.getElementById( "na1" ).innerHTML = error;
                                    
                                }
                                else{
                                   
                                  error = " invald email adress. ";
                            
                                    document.getElementById( "na1" ).innerHTML = error;
                                    chc="ok";
                                }
                            
                           
                            }




							



                           

                            if( phone.value == "" )
                            {
                            error = " You Have To give phone number. ";
                            
                            document.getElementById( "na2" ).innerHTML = error;
                            chc="ok";

                           
                            }

                            if( phone.value != "" )
                            {
                            
                                if(phone.value.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/))
                                {
                                    error = "";
                            
                                    document.getElementById( "na2" ).innerHTML = error;
                                }

                                else
                                {
                                    error = "invalid phone no";
                            
                                    document.getElementById( "na2" ).innerHTML = error;
                                    chc="ok";
                                }

                           
                            }

                            

                            if( pass.value == "" )
                            {
                            error = " You Have To give a password. ";
                            
                            document.getElementById( "na3" ).innerHTML = error;
                            chc="ok";

                           
                            }

                            if( pass.value != "" )
                            {
                                if(!pass.value.replace(/\s/g, '').length)
                                {
                                    error = " password cannot be only space. ";
                            
                                    document.getElementById( "na3" ).innerHTML = error;
                                    chc="ok";
                                }

                                else if(pass.value.match( /^[a-zA-Z\s].{8,}$/))
                                {
                                    error = "";
                            
                                   document.getElementById( "na3" ).innerHTML = error;
                                    
                                }
                                else{
                                   
                                  error = "Must have at least one letter and 8 characters.";
                            
                                    document.getElementById( "na3" ).innerHTML = error;
                                    chc="ok";
                                }
                            
                            

                           
                            }



							if( confirmpass.value == "" )
                            {
                            error = " You Have To confirm your password. ";
                            
                            document.getElementById( "na4" ).innerHTML = error;
                            chc="ok";

                           
                            }

							if( confirmpass.value != "" )
                            {
                                console.log(confirmpass.value);
                                 if(confirmpass.value==pass.value)
                                {
                                    error = "";
                            
                                   document.getElementById( "na4" ).innerHTML = error;
                                    
                                }
                                else{
                                   
                                  error = "password not matched.";
								  
                            
                                    document.getElementById( "na4" ).innerHTML = error;
                                    chc="ok";
                                }
                            
                            

                           
                            }


                           

                            
            

                           

                            
                            if(chc!="")
                            {
                              
                                return false;

                            }
                        
                            else
                            {
                               
                            return true;
                            
                            }
                    }


           

        </script>
</head>
<body>
	<div class="container">
		<form action="" method="POST" onsubmit="return validate();"  class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" id="f1" value="<?php echo $username; ?>" >
				<span id="na" style="color:red">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Email" name="email"  id="f2" value="<?php echo $email; ?>">
				<span id="na1" style="color:red">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Phone no" name="phone"  id="f3" value="<?php echo $phone; ?>">
				<span id="na2" style="color:red">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  id="f4" value="<?php echo $_POST['password']; ?>">
				<span id="na3" style="color:red">
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" id="f5" value="<?php echo $_POST['cpassword']; ?>">
				<span id="na4" style="color:red"><br>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>