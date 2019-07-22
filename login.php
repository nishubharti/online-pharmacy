
<?php include 'header.php';?>

<style>
   .input-group{
        padding:5px;
        width:80%;
        margin:auto;
        
        
    }

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0;
        background:pink}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
   color:darkblue;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
</style>
<div class="row" style="margin:50px 0px 20px 0px">
  <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
    <!-- <div style="background-color:white ;border: 1px solid #b9b0b0;border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-bottom:5px;margin-bottom:5px;">
          
     // </div>-->
  </div>
<div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
    <div style="background-color:white ;border: 1px solid #b9b0b0;border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-bottom:5px;margin-bottom:5px;">

<!--<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><strong></strong></a></li>
</ul>-->
 <center><h1>Login</h1></center>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
 <div style="margin:10px">
  
  
   <form action="process1.php" method="post">
    <div class="input-group ">
        <span class="input-group-addon">Name</span>
        <input type="text" class="form-control" name="nm" id="nm" oninput="this.className = 'form-control'" placeholder="Enter name" required>
    </div> 
     
     <div class="input-group ">
        <span class="input-group-addon">Password</span>
        <input type="password" class="form-control" name="pwd" id="pwd" oninput="this.className = 'form-control'" placeholder="Enter email-id">
        
    </div> 
     
    <center><input type="submit" value="Login"></center>
   </form>
</div>

            </div>
            
  
       
            </div>
           
        </div>
   
</div>
  <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
     <!-- <div style="overflow:hidden;background-color:white ;height:100%;border: 1px solid #b9b0b0;border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-bottom:10px;margin-bottom:5px;">


            
     
      </div>-->
     
      </div>
  </div>
</div>

<div class="slideshow-container">
  <center><h1 style="color:green;font-style:Arial">Our happy customer says</h1></center>

<div class="mySlides">
  <b><h2>Its very gud to get medicines online , it helped me getting medicines without any delay.I am really happy for this service</h2></b>
  <p class="author">- Albaz Ali</p>
</div>

<div class="mySlides">
  <h2>got my medicine on time and within right mrp.This is really nice website</h2>
  <p class="author">- Ernest Hemingway</p>
</div>

<div class="mySlides">
  <h2>I got my right medicine within time.</h2>
  <p class="author">- Thomas Jen</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
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
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


<?php include 'footer.php';?>
