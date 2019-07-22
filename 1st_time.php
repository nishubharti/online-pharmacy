
<?php include 'header.php';?>
<style>
   .input-group{
        padding:5px;
        width:80%;
        margin:auto;
        
        
    }
</style>
<div class="row" style="margin:50px 0px 20px 0px">
  <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
      <div style="background-color:white ;border: 1px solid #b9b0b0;border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-bottom:5px;margin-bottom:5px;">
           <div class="skdslider" style="height:400px;">
             <div class="w3-content w3-section" style="height:400px">
              <img class="mySlides" src="img/horli.jpeg" style="height:400px;width:100%">
              <img class="mySlides" src="img/det2.jpeg" style="height:400px;width:100%"></div>
        </div>
      </div>
  </div>
<div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
    <div style="background-color:white ;border: 1px solid #b9b0b0;border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-bottom:5px;margin-bottom:5px;">

<!--<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><strong></strong></a></li>
</ul>-->
 <center><h1>Create Account</h1></center>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
 <div style="margin:10px">
  
  
   <form action="process.php" method="post">
    <div class="input-group ">
        <span class="input-group-addon">Name</span>
        <input type="text" class="form-control" name="name" id="name" oninput="this.className = 'form-control'" placeholder="Enter name" required>
    </div> 
     <div class="input-group ">
        <span class="input-group-addon">Email</span>
        <input type="email" class="form-control" name="email" id="email" oninput="this.className = 'form-control'" placeholder="Enter email-id">
        
    </div> 
     <div class="input-group ">
        <span class="input-group-addon">Password</span>
        <input type="password" class="form-control" name="password" id="password" oninput="this.className = 'form-control'" placeholder="Enter email-id">
        
    </div> 
     <div class="input-group ">
        <span class="input-group-addon">Re-insert your password</span>
        <input type="password" class="form-control" name="pwd" oninput="this.className = 'form-control'" placeholder="enter your password" >
    </div> 
    <center><input type="submit" value="Login"></center>
   </form>
</div>

            </div>
            
  
       
            </div>
           
        </div>
   
</div>
  <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
      <div style="overflow:hidden;background-color:white ;height:100%;border: 1px solid #b9b0b0;border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-bottom:10px;margin-bottom:5px;">

     <div class="skdslider" style="height:400px;">
             <div class="w3-content w3-section" style="height:400px">
              <img class="mySlides1" src="img/hugg.jpeg" style="height:400px;width:100%">
              <img class="mySlides1" src="img/him1.jpeg" style="height:400px;width:100%">
                            <img class="mySlides1" src="img/vick.jpeg" style="height:400px;width:100%"></div>
        </div>
     
      </div>
     
      </div>
  </div>
</div>

<script>


  var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<script>


  var myIndex1 = 0;
carousel1();

function carousel1() {
    var i;
    var x = document.getElementsByClassName("mySlides1");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex1++;
    if (myIndex1 > x.length) {myIndex1 = 1}    
    x[myIndex1-1].style.display = "block";  
    setTimeout(carousel1, 2000); // Change image every 2 seconds
}
</script>




<?php include 'footer.php';?>

