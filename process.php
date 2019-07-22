<?php
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $pass1=$_POST	['pwd'];

  $con=mysqli_connect("localhost","root","");

 $email=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['email']))));
$name=stripslashes(strip_tags(htmlspecialchars(mysqli_real_escape_string($con,$_POST['name']))));
    $pass=stripcslashes($pass);
      $pass=mysqli_real_escape_string($con,$pass);
        $pass1=stripcslashes($pass1);
     $pass1=mysqli_real_escape_string($con,$pass1);

  mysqli_select_db($con,"hospital");



 if($pass == $pass1)
  {

      $query = mysqli_query($con,"INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')");
           echo "you have been registered";
           


  }
  else
   {
     echo "make sure your password is correct";

   }

?>
