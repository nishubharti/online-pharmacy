<?php





$username=$_POST['nm'];
$password=$_POST['pwd'];



$con=mysqli_connect("localhost","root","","hospital");

$username=stripcslashes($username);
$password=stripcslashes($password);
$_m="admin";
$_mp="pass";

//mysqli_select_db($con,"attendancre");



if($username && $password)
  {
       $quer = mysqli_query($con,"SELECT * FROM users WHERE name='$username' And password='$password' ");

      $match1=mysqli_num_rows($quer);

       if($match1>0)
      {
           echo "It worked";
            header('location:new.php');
         
       }
    else if($username==$_m && $password==$_mp)
      {
          header('location:medicine.php');
      }
}

else


{
   echo "invalid entrance";
}



?>
