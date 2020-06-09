<?php
//connect to the core file for general configuration
require("../settings/core.php");
//include the cart controller
require('../controllers/productcontroller.php');
$cid=$_SESSION['user_id'];

if (isset($_GET['pid'])){
$pid = $_GET['pid'];
$del_cart = delete_cart($pid, $cid);

//check if delete cart worked
if ($del_cart) {
	header('Location: cart.php');
}else{
	return false;
}

}

?>