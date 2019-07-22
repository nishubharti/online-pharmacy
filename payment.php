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
   <h1 style='text-align:center;color:green;'>Payment Gateway</h1>
  </div>
  <div id="form">
    <form action="process2.php" method="post">
      <center><h2>Details</h2></center>
      <p style="color:#eee">
       <label>Name</label>
       <input style="color:#000"type="text" name="mname" placeholder="card holder name"/>
     </p>

      <p style="color:#eee"><label>Account number:-
      </label>
      <input style="color:#000" type="text" name="maccount" placeholder="Account number"/></p>

      <p style="color:#eee"><label>cvv:-
      </label>
      <input style="color:#000" type="text" name="cvv" placeholder="3 digit number"/></p>

     
      
      <p style="color:#eee"><label>Expiary Date:-
      </label>
      <input style="color:#000" type="text" name="mExdate" placeholder="expiary date"/></p>

        <p style="color:#eee"><label>Amount:-
      </label>
      <input style="color:#000" type="text" name="mQuantity" placeholder="Quantity"/></p>
    

      <p style="text color:black"><center><input type="submit" name="S1" value="Submit"/></center></p>

     <p>
    </form>
  </div>
  

</body>
</html>
