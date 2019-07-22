<?php
session_start();//starting session 

require "view.php";
function attend()
{
$mname=$_POST['mname'];
$mprice=$_POST['mprice'];
$mproduct=$_POST['mproduct'];
$manufactdate=$_POST['mdate'];
$mexpairydate=$_POST['mExdate'];
$quantity=$_POST['mQuantity'];


$con=mysqli_connect("localhost","root","");

$mname=stripcslashes($mname);
$mprice=stripcslashes($mprice);
$mproduct=stripcslashes($mproduct);
$manufactdate=stripcslashes($manufactdate);
$mexpairydate=stripcslashes($mexpairydate);
$quantity=stripcslashes($quantity);

  mysqli_select_db($con,"hospital");

if($mname&&$mprice&&$mproduct&&$manufactdate&&$mexpairydate&&$quantity)
{
      $query = mysqli_query($con,"INSERT INTO medicine (name, company, price, exdate, mandate, quantity) VALUES ('$mname','$mproduct','$mprice','$mexpairydate','$manufactdate','$quantity')");
echo '<span style="color:green;text-align:center;padding-left:30%;"><b><h1>	&#10004; </h1><h3>medicine got inserted</h3></b></span> <a href="medicine.php">medicine page</a>';
  	 
           
          // header('location:welcome.php');
}
else
{
  echo  "please insert all the feilds";
}

 }

$but=$_POST['S1'];
if($but=="Submit")
attend();
else if($but=="View")
view($_POST['mname'],$_POST['mprice']);









?>
