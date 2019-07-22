<?php
session_start();//starting session 



$mname=$_POST['mname'];
$maccount=$_POST['maccount'];
$cvv=$_POST['cvv'];

$mexpairydate=$_POST['mExdate'];
$mamount=$_POST['mQuantity'];


$con=mysqli_connect("localhost","root","");

$mname=stripcslashes($mname);
$maccount=stripcslashes($maccount);
$cvv=stripcslashes($cvv);

$mexpairydate=stripcslashes($mexpairydate);
$mamount=stripcslashes($mamount);

  mysqli_select_db($con,"hospital");

if($mname&&$maccount&&$cvv&&$mexpairydate&&$mamount)
{
                  echo '<span style="color:green;text-align:center;padding-left:30%;"><b><h1>	&#10004; </h1><h3>your order id is:-</h3></b></span>';
  	 
                   print_r($_SESSION);
			unset($_SESSION['order_id']);
			
     echo '<span style="color:green;text-align:center;padding-left:30%;"><b><h1>	&#10004; </h1><h3>your order is succesfully registered.it will be delivered soon!!!</h3></b></span> <a href="new.php">item page</a>';
  	 

}
else
{
  echo  "please insert all the feilds";
}

 





?>
