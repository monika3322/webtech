<?php
      include_once 'dbh.inc.php';

      $first=$_POST['first'];
      $mail=$_POST['mail']

      $sql="INSERT INTO users(user_first,user_mail)VALUES('$first','$mail');";

      mysqli_query($conn);

      header("location:bookhotel.php?insert=successfull");


?>