<?php include 'header.php';?>

<html>
<head><title>www.attend.com</title>

  <style>
    #form
{
  background:green;
  padding: 20px;
  margin:50px auto;
  border-radius: 5px;
  width:20%;

}




   </style>
</head>
<body style="background:pink">
  <div id="p1">
   <h1 style='text-align:center;color:green;'>Medicine Details</h1>
  </div>
  <div id="form">
    <form action="process3.php" method="post">
      <center><h2>Details</h2></center>
      <p style="color:#eee">
       <label>Name</label>
       <input style="color:#000"type="text" name="mname" placeholder="medicine name"/>
     </p>

      <p style="color:#eee"><label>Price:-
      </label>
      <input style="color:#000" type="text" name="mprice" placeholder="medicine price"/></p>

      <p style="color:#eee"><label>Product:-
      </label>
      <input style="color:#000" type="text" name="mproduct" placeholder="company name"/></p>

     
      <p style="color:#eee"><label>Manufacturing Date:-
      </label>
      <input style="color:#000" type="text" name="mdate" placeholder="manufacturing date"/></p>

      <p style="color:#eee"><label>Expiary Date:-
      </label>
      <input style="color:#000" type="text" name="mExdate" placeholder="expiary date"/></p>

        <p style="color:#eee"><label>Quanity:-
      </label>
      <input style="color:#000" type="text" name="mQuantity" placeholder="Quantity"/></p>
    

      <p style="text color:black"><center><input type="submit" name="S1" value="Submit"/></center></p>
      <p><center><input type="submit" name="S1" value="View"></center></p>
     <p>
    </form>
 
  </div>
  

</body>
</html>
