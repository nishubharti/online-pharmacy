<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <!-- compatitbility meta -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!--  Mobile meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Simple shopping cart</title>

   <!--[if lt IE 9]>
 <script src="js/html5shiv.min.js"></script> 
<script src="js/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="js/jquery.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>


<body>
 
	<div class="container" >
    <?php if(@$msg){ ?>
		<div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only"></span>
          <?=$msg?>
        </div>
		
	<?php 	} ?>
    <div class="panel panel-default">
      <!-- Panel of the ordered items in cart -->
      <div class="panel-heading">Your cart <?php if (@$items_number < 1){ echo" is empty"; }?></div>
      
    
      <!-- Table -->
		<table class="table"> 
        	<thead>
            	 <tr> <th>#</th> <th>item name</th> <th>quantity</th> <th>price</th><th>control</th> </tr> 
            </thead>
             
            <tbody> 
            <?php if (@$items_number >= 1){ // if order have one item or more loop in it and make a list of items in cart
				$n = 1;
				$total = 0;
				while($item = mysqli_fetch_array($cart_data)){
					
				 ?>
                <tr> <th scope="row"><?=$n?></th> <td><?=$item['item_name']?></td> <td><?=$item['quantity']?></td> <td><?=$item['price']?>$</td> <td><a href="new.php?do=delete&id=<?=$item['id']?>"><span class="btn btn-danger" >remove </span></a><a href="new.php?do=add_one&id=<?=$item['id']?>"><span class="btn btn-success" >+ </span></a> <a href="new.php?do=remove_one&id=<?=$item['id']?>"><span class="btn btn-warning" >- </span></a>  </td> </tr>
                <?php
				$n++;
				$total +=$item['price'];
				 }}?>
 
            </tbody> 
            <tfoot>
            	 <tr> <th>#</th> <th>total</th> <th></th> <th><?php echo(@$total)?$total:'0'; ?>$</th> <th></th></tr>
            </tfoot>
		</table>
        <div class="panel-body btn-group btn-group-justified">
        <div class="panel-footer" >
        	<div class="btn-group col-md-4" role="group">
              <a href="new.php?do=delete_all"><span class="btn btn-default col-md-8" >empty cart</span></a>
 
          </div>
          <div class="btn-group col-md-4" role="group">
          	<a href="submit_order.php"><span class="btn btn-default col-md-8" >submit order</span></a>
          </div>

          </div>
        
      </div>
    </div>
    <!-- Items and its forms where you can add new items -->
    <div class="row">
<div class="col-md-3 simpleCart_shelfItem">   
    <div class="panel panel-default">
     <div class="panel-heading item_name">Cough Syrup</div>
      <div class="panel-body">
         <img src="img/cold1.jpeg" class="img-thumbnail img-responsive item_thumb"><br> 
         <p class='input-sm clearfix'>Natural cold and cough syrup</p><span class='row'></span>
      </div>
   <div class="panel-footer"> <p class="item_price">$ 88</p>
      <form method="post" action="?do=add" >
      <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >

       <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
        <input type="hidden" name="item_number" value="1">
        <input type="hidden" name="item_name" value="Natural cold and cough syrup">
        <input type="hidden" name="item_price" value="88">  
       </form>  
    </div>
   </div>
  </div><!-- end object -->

  
    <div class="col-md-3 simpleCart_shelfItem">   
    <div class="panel panel-default">
     <div class="panel-heading item_name">Cough Syrup</div>
      <div class="panel-body">
         <img src="img/bena1.jpeg" class="img-thumbnail img-responsive item_thumb"><br> 
         <p class='input-sm clearfix'>Benadryl</p><span class='row'></span>
      </div>
   <div class="panel-footer"> <p class="item_price">$ 89</p>
      <form method="post" action="?do=add" >
      <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
       <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
        <input type="hidden" name="item_number" value="2">
        <input type="hidden" name="item_name" value="Benadryl">
        <input type="hidden" name="item_price" value="89">  
       </form>  
    </div>
   </div>
  </div><!-- end object -->

    

 <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">Cough Syrup</div>
  <div class="panel-body">
 <img src="img/cold4.jpeg" class="img-thumbnail img-responsive item_thumb"><br>Benylin
  </div>
  <div class="panel-footer"><p class="item_price">$ 88</p>  
    <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
    <label>Qty: <input class="item_Quantity form-control" type="text" name="quantity" value="1"></label>
    <input type="hidden" name="item_number" value="3">
    <input type="hidden" name="item_name" value="Benylin">  
         <input type="hidden" name="item_price" value="88"> 
    </form>  
    </div>
</div>

</div><!-- end object -->
     <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">Cough Syrup</div>
  <div class="panel-body">
  <img src="img/cough2.jpeg" class="img-thumbnail img-responsive item_thumb"><br>Demazin
  </div>
  <div class="panel-footer"><p class="item_price">Rs. 127</p> 
    <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
  <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
      <input type="hidden" name="item_number" value="4">
    <input type="hidden" name="item_name" value="Demazin">  
         <input type="hidden" name="item_price" value="127">    
    </form>  
  </div>
</div>
</div>
</div>


    	<div class="row">
  <div class="col-md-3 simpleCart_shelfItem">   
    <div class="panel panel-default">
     <div class="panel-heading item_name">Headache tablets</div>
      <div class="panel-body">
         <img src="img/tab1.jpeg" class="img-thumbnail img-responsive item_thumb"><br> 
         <p class='input-sm clearfix'>Actron</p><span class='row'></span>
      </div>
   <div class="panel-footer"> <p class="item_price">Rs. 102</p>
      <form method="post" action="?do=add" >
      <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
       <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
        <input type="hidden" name="item_number" value="5">
        <input type="hidden" name="item_name" value="Actron">
        <input type="hidden" name="item_price" value="102">  
       </form>  
    </div>
   </div>
  </div><!-- end object -->

  
    <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">Heache tablets</div>
  <div class="panel-body">
 <img src="img/tab4.jpeg" class="img-thumbnail img-responsive item_thumb"><br> 
     <p class='input-sm clearfix'>Crocin</p><span class='row'></span>
  </div>
  <div class="panel-footer"> <p class="item_price">Rs. 60</p>
  <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
 
  
      <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
    <input type="hidden" name="item_number" value="6">
    <input type="hidden" name="item_name" value="Crocin">
     <input type="hidden" name="item_price" value="60">  
    </form>  
     </div>
</div>
</div><!-- end object -->

 <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">Headache tablets</div>
  <div class="panel-body">
 <img src="img/tab2.jpeg" class="img-thumbnail img-responsive item_thumb"><br>Saridon
  </div>
  <div class="panel-footer"><p class="item_price">Rs. 38</p>  
    <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
    <label>Qty: <input class="item_Quantity form-control" type="text" name="quantity" value="1"></label>
    <input type="hidden" name="item_number" value="7">
    <input type="hidden" name="item_name" value="Saridon">  
         <input type="hidden" name="item_price" value="38"> 
    </form>  
    </div>
</div>

</div><!-- end object -->
     <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">Headache tablets</div>
  <div class="panel-body">
  <img src="img/tab6.jpeg" class="img-thumbnail img-responsive item_thumb"><br>vicks inhaler
  </div>
  <div class="panel-footer"><p class="item_price">Rs.100</p> 
    <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
  <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
      <input type="hidden" name="item_number" value="8">
    <input type="hidden" name="item_name" value="vicks inhaler">  
         <input type="hidden" name="item_price" value="100">    
    </form>  
  </div>
</div>
</div>
</div>
    	
	

	<div class="row">

<div class="col-md-3 simpleCart_shelfItem">   
    <div class="panel panel-default">
     <div class="panel-heading item_name">Handwash</div>
      <div class="panel-body">
         <img src="img/hand1.jpeg" class="img-thumbnail img-responsive item_thumb"><br> 
         <p class='input-sm clearfix'>Dettol</p><span class='row'></span>
      </div>
   <div class="panel-footer"> <p class="item_price">Rs.159</p>
      <form method="post" action="?do=add" >
      <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
       <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
        <input type="hidden" name="item_number" value="9">
        <input type="hidden" name="item_name" value="Dettol">
        <input type="hidden" name="item_price" value="159">  
       </form>  
    </div>
   </div>
  </div><!-- end object -->

  
    <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">Handwash </div>
  <div class="panel-body">
 <img src="img/hand2.jpeg" class="img-thumbnail img-responsive item_thumb"><br> 
     <p class='input-sm clearfix'>Lifeboy</p><span class='row'></span>
  </div>
  <div class="panel-footer"> <p class="item_price">Rs. 215</p>
  <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
 
  
      <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
    <input type="hidden" name="item_number" value="10">
    <input type="hidden" name="item_name" value="Lifeboy">
     <input type="hidden" name="item_price" value="215">  
    </form>  
     </div>
</div>
</div><!-- end object -->

 <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">Handwash</div>
  <div class="panel-body">
 <img src="img/hand5.jpeg" class="img-thumbnail img-responsive item_thumb"><br>Patanjali
  </div>
  <div class="panel-footer"><p class="item_price">Rs. 60</p>  
    <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
    <label>Qty: <input class="item_Quantity form-control" type="text" name="quantity" value="1"></label>
    <input type="hidden" name="item_number" value="11">
    <input type="hidden" name="item_name" value="Patanjali">  
         <input type="hidden" name="item_price" value="60"> 
    </form>  
    </div>
</div>

</div><!-- end object -->
     <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">HandWash</div>
  <div class="panel-body">
  <img src="img/hand4.jpeg" class="img-thumbnail img-responsive item_thumb"><br>Nivea
  </div>
  <div class="panel-footer"><p class="item_price">Rs. 348</p> 
    <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
  <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
      <input type="hidden" name="item_number" value="12">
    <input type="hidden" name="item_name" value="Nivea">  
         <input type="hidden" name="item_price" value="348">    
    </form>  
  </div>
</div>
</div>
</div>
<div class="row">
   <div class="col-md-3 simpleCart_shelfItem">   
    <div class="panel panel-default">
     <div class="panel-heading item_name">Drinks</div>
      <div class="panel-body">
         <img src="img/Hor1.jpeg" class="img-thumbnail img-responsive item_thumb"><br> 
         <p class='input-sm clearfix'>Horlicks </p><span class='row'></span>
      </div>
   <div class="panel-footer"> <p class="item_price">Rs.323</p>
      <form method="post" action="?do=add" >
      <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
       <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
        <input type="hidden" name="item_number" value="13">
        <input type="hidden" name="item_name" value="Horlicks">
        <input type="hidden" name="item_price" value="323">  
       </form>  
    </div>
   </div>
  </div><!-- end object -->

  
    <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">Drinks </div>
  <div class="panel-body">
 <img src="img/hor2.jpeg" class="img-thumbnail img-responsive item_thumb"><br> 
     <p class='input-sm clearfix'>Boost</p><span class='row'></span>
  </div>
  <div class="panel-footer"> <p class="item_price">Rs.312</p>
  <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
 
  
      <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
    <input type="hidden" name="item_number" value="14">
    <input type="hidden" name="item_name" value="Boost">
     <input type="hidden" name="item_price" value="312">  
    </form>  
     </div>
</div>
</div><!-- end object -->

 <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">Drinks</div>
  <div class="panel-body">
 <img src="img/hor4.jpeg" class="img-thumbnail img-responsive item_thumb"><br>Complan
  </div>
  <div class="panel-footer"><p class="item_price">Rs. 222</p>  
    <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
    <label>Qty: <input class="item_Quantity form-control" type="text" name="quantity" value="1"></label>
    <input type="hidden" name="item_number" value="15">
    <input type="hidden" name="item_name" value="Complan">  
         <input type="hidden" name="item_price" value="222"> 
    </form>  
    </div>
</div>

</div><!-- end object -->
     <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">Drinks</div>
  <div class="panel-body">
  <img src="img/hor6.jpeg" class="img-thumbnail img-responsive item_thumb"><br>Women's Horlicks
  </div>
  <div class="panel-footer"><p class="item_price">Rs.348</p> 
    <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
  <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
      <input type="hidden" name="item_number" value="16">
    <input type="hidden" name="item_name" value="Women's Horlicks">  
         <input type="hidden" name="item_price" value="348">    
    </form>  
  </div>
</div>
</div>
</div>
    	
	</div>

    	
	</div>




<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>
