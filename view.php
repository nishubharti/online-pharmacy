<?php
function view($name1,$email1)
{



// Create connection
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"hospital");




// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 






$sql = "SELECT * FROM medicine";

$result = $con->query($sql);


if ($result->num_rows > 0) {
    // output
    // output data of each row
	$data="<style>
	#customers {
    font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
   background:red;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color:red;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:black;
    color: white;
}</style>";
	$data.="<table id='customers'>";
	$data.="<tr>";
	while ($fieldinfo=mysqli_fetch_field($result))
    $data.="<th>".$fieldinfo->name."</th>";
    $data.="<tr>";
    while($row = $result->fetch_array()) 
	{$data.="<tr>";
	 for($i=0;$i<count($row)/2;$i++)
	 $data.="<td>".$row[$i].'</td>';
      $data.='</tr>';
    }
	$data.="</table>";
	echo $data;
} else {
    echo "<h1 style='text-align:center;color:green;'>0 results Found</h1>";
}
$con->close();

}
?>
<html>
<body>
     <form action="update.php" method="post">
    <center><h2>Update details</h2><br>
     Id-<input type="text" name="id" placeholder="enter medicine id">
      
     <input type="submit" value="Update" name="update">
     <input type="submit" value="Delete" name="delete">
     <input type="submit" value="Search" name="search"><br></center><br><br><br>
    </form>
</body>
</html>
