<?php

$con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,"hospital");
$id=$_POST['id'];

if(isset($_POST['delete']))
{
  mysqli_query($con,"delete from medicine WHERE medicine_id='$id'");
  echo '<span style="color:green;text-align:center;padding-left:30%;"><b><h1>	&#10004; </h1><h3>medicine got deleted succesfully</h3></b></span> <a href="medicine.php">medicine page</a>';
  	 

}
if(isset($_POST['update']))
{
mysqli_query($con,"update medicine WHERE id='$id'");


}
if(isset($_POST['search']))
{
   $res=mysqli_query($con,"select * from medicine WHERE medicine_id='$id'");
   echo "<center><h2>Item details</h2></center><br>
             <center><table border=1px>";
               echo "<th>"; echo "Name";  echo "</th>";
               echo "<th>"; echo "Price";  echo "</th>";
               echo "<th>"; echo "Company";  echo "</th>";
               echo "<th>"; echo "Expiary Date";  echo "</th>";
               echo "<th>"; echo "Manufacturing_Date";  echo "</th>";
               echo "<th>"; echo "total_Quantity";  echo "</th>";

   while($row=mysqli_fetch_array($res))
   {
     echo "<tr>";
               echo "<td>"; echo $row["name"];  echo "</td>";
               echo "<td>"; echo $row["price"];  echo "</td>";
               echo "<td>"; echo $row["company"];  echo "</td>";
               echo "<td>"; echo $row["exdate"];  echo "</td>";
               echo "<td>"; echo $row["mandate"];  echo "</td>";
               echo "<td>"; echo $row["quantity"];  echo "</td>";


   }
   echo "</table></center>";

}



?>
