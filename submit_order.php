<?php
session_start();
include('config.php');
if(isset($_POST['save_order'])){
	if(empty($_POST['ship_name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['ship_state']) || empty($_POST['ship_city']) ||  empty($_POST['ship_street'])){
		$msg = "Please ,complete order data ";
	}else{
		$ship_name = mysqli_real_escape_string($connection,$_POST['ship_name']);
		$email = mysqli_real_escape_string($connection,$_POST['email']);
		$phone = mysqli_real_escape_string($connection,$_POST['phone']);
		$ship_state = mysqli_real_escape_string($connection,$_POST['ship_state']);
		$ship_city = mysqli_real_escape_string($connection,$_POST['ship_city']);
		$ship_street = mysqli_real_escape_string($connection,$_POST['ship_street']);
												
			
		$order_id = mysqli_real_escape_string($connection,$_SESSION['order_id']) ;
		$sql_get_save_order = "UPDATE orders set ship_name='$ship_name',email='$email',phone='$phone',ship_state='$ship_state',ship_city='$ship_city',ship_street='$ship_street' where id = $order_id ";
		$save_order = mysqli_query($connection,$sql_get_save_order)or die(mysqli_error($connection));
		if($save_order){
			
                          	header("Location:payment.php");

		}else{
			$msg = "Cannot save your order, please try again !"	;
		}
		
		
	}
}

if(isset($_SESSION['order_id'])){
	// getting the saved items in the existing order
	$order_id = mysqli_real_escape_string($connection,$_SESSION['order_id']) ;
	$sql_get_order_items = "select * from order_items where order_id =$order_id ";
	$cart_data = mysqli_query($connection,$sql_get_order_items)or die(mysqli_error($connection));
	$items_number = mysqli_num_rows($cart_data);
	
}else{
	header("Location:cart_template.php");
	} 
if($items_number < 1){
	die( "You didn't add any utems to your order ! <br />
	Go to  <a href='cart_template.php'>items page </a>");
	}
	include("submit_order_template.php");
?>

    
