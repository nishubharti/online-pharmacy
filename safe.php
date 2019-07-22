 <head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  .input-group{
        padding:5px;
        width:80%;
        margin:auto;
        
        
    }
 .button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        cursor: pointer;
    }

    
</style>
</head>


 <div class="row" style="margin:50px 0px 30px 0px">

<div class="col-sm-1 col-md-1 col-lg-1 col-xs-12">
</div>
    

<div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
  <fieldset class="well" style="border:4px solid teal; background-color:white;">
   <legend style="border:4px solid teal"><center><b>Subject Details</b></center></legend>
 
    <div style="background-color:white ;border: 1px solid #b9b0b0;border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-bottom:5px;margin-bottom:5px;overflow-y:hidden">
   

   
<?php
if(isset($_POST['go']))
{

     echo'   <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
 <div style="margin:10px">';
 
  


$number=$_POST['col'];
echo '
<form class="form-inline" action="action.php" method="post">
<input type="hidden" class="form-control" name="num" value='.$number.'>';
  

for($i=0;$i<$number;$i++)
{
     

    include 'body.php';
   echo '<br><br><br>'; 
 

}
echo '<center><input type="submit" style=" background-color: #4CAF50;
        color: #ffffff;
        border: none;

        padding: 10px 20px;
        font-size: 17px;
        cursor: pointer;" value="Submit" name="submit"></center>
 </form>

</div>
</div>
</div>
</div>
</div>
<div class="col-sm-2 col-md-2 col-lg-2 col-xs-12">
</div>
    
';}else
{
echo '<div class="row" style="margin:80px 0px 30px 0px">
          <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12"></div>
     <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
        <div style="margin:10px">
          <form class="form-horizontal" action="" method="post" class="text-center ">
           <div class="input-group ">
            <span class="input-group-addon">no of columns:-</span>
                <input type="text" class="form-control" name="col" id="col" oninput="this.className =\'form-control\'" placeholder="Enter number of form" required>
             </div>
 <center><input type="submit" style=" background-color: #4CAF50;
        color: #ffffff;
        border: none;
     margin-top:10px;
        padding: 10px 20px;
        font-size: 10px;
        cursor: pointer;" value="GO" name="go"></center>
         </form>
     </div>
  </div>

   <div class="col-sm-1 col-md-1 col-lg-1 col-xs-12">
     
  </div>
</div>';
}

?>
  
</div>
</div>

