<?php
require("../settings/core.php");
require('../controllers/productcontroller.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Store Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style type="text/css">
	.header img {
  float: left;
  width: 120px;
  height: 130px;
  background: #555;
}

.header  {
  position: relative;
  top: -40px;
  left: 20px;}
 .flexslider{top:-80px;

 } 
}</style>
</head>
	
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					
						<div class="row">
						<div class="col-xs-2 ">
							<div id="colorlib-logo" class="header"><img src="../images/logo.jpg" alt="logo" /></div>
						</div>
						<div class="col-xs-15 text-right menu-1">
								<ul>
								<li><a href="../index.php">Home</a></li>
								<li><a href="shop.php">Shop</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li class="active"><a href="cart.php"><i class="icon-shopping-cart"></i> Cart </a></li>
								<?php 
							if(!empty($_SESSION['user_id'])){ 
								echo"<a href='../Login/index.php''>Welcome  " .$_SESSION['user_name']."</a>";
							}else {
								echo "<li class='btn-cta'><a href='../Login/login.php'><span>Login</span></a></li>"; 
						        } 
						    ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(../images/cover-img-1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Shopping Cart</h1>
				   					<h2 class="bread"><span><a href="index.html">Home</a></span> <span><a href="shop.html">Product</a></span> <span>Shopping Cart</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md">
				<div class='col-md-10 col-md-offset-1'>
						<div class='process-wrap'>
							<div class='process text-center active'>
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class='process text-center'>
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class='process text-center'>
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class='row row-pb-md'>
					<div class='col-md-10 col-md-offset-1'>
						<div class="product-name">
							<div class="one-forth text-center">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
							<div class="one-eight text-center">
								<span>Total</span>
							</div>
							<div class="one-eight text-center">
								<span>Remove</span>
							</div>
						</div>
						<form method='post'>
						<?php
					    $total = 0;    //run the function to return all product and assign to variable
					    if (isset($_GET['productname'])) {
					        $pid = $_GET['productname'];
					        $cid=$_SESSION['user_id'];
					        $dupcart = check_duplicate($pid, $cid);

							//check if there is a duplicate
							if ($dupcart) 
							{
								//echo duplicate
								echo "<div class='alert alert-danger'>
				  						<strong>Danger!</strong> Item already in cart.
									 </div>";
							}else
							{
							add_to_cart($pid, $cid);
							echo "<div class='alert alert-success'>
	  						<strong>Success!</strong> Added to cart.
						 </div>";
							}
					    	$catlist = view_all_cart($cid);
					    	//echo $catlist;
							
						//check if function worked
							if ($catlist) 
							{
								//loop through the cart result
							foreach ($catlist as $item) {

								//grab product id & quantity and assign to variable
								$productid = $item['product_id'];
								$prodqty = $item['qty'];
								
								//set product id as an hidden field
								echo "
								<input type='hidden' name='prod[]' value='$productid'></td>";

								//use the product id to get product details
								//run view one product fuction
								$prodetails = view_one_product($productid);

								//check if function worked
								if ($prodetails) 
								{
									//get product details and echo
									$ptitle = $prodetails[0]['product_title'];
									$pprice = $prodetails[0]['product_price'];
									$pimage = $prodetails[0]['img1'];
									$protatal = $pprice * $prodqty;
									
									echo "<div class=;row row-pb-md'>";
									echo "<div class='product-cart'>";
									echo "<div class='one-forth'>";
									echo "	<div class='product-img' style='background-image: url(".$pimage.");''>";
									echo "	</div>";
									echo "	<div class='display-tc'>";
									echo "		<h3>".$ptitle."</h3>";
									echo "	</div>";
									echo " </div>";
									echo "<div class='one-eight text-center'>";
									echo "	<div class='display-tc'>";
									echo "		<span class='price'>".$pprice."</span>";
									echo "	</div>";
									echo "</div>";
									echo "<div class='one-eight text-center'>";
									echo "	<div class='display-tc'>";
									echo "		<input type='text' id='quantity' name='quaty[]' class='form-control input-number text-center' value=".$prodqty." min='1'max='100'>";
									echo "	</div>";
									echo "</div>";
									echo "<div class='one-eight text-center'>";
									echo "	<div class='display-tc'>";
									echo "		<span class='price'>".$protatal."</span>";
									echo "	</div>";
									echo "</div>";
									echo "<div class='one-eight text-center'>";
									echo "	<div class='display-tc'>";
									echo "<a  href='delcart.php?pid=$productid'>remove</a>";
									echo "	</div>";
								 	
									echo "</div>";
									echo "</div>";
								 	$total += $protatal;
						}
					            
					 	}
					}
				}elseif (!isset($_GET['productname'])){ 
						$cid=$_SESSION['user_id'];
					    $catlist = view_all_cart($cid);
					    if ($catlist) 
							{
								//loop through the cart result
							foreach ($catlist as $item) {

								//grab product id & quantity and assign to variable
								$productid = $item['product_id'];
								$prodqty = $item['qty'];
								
								//set product id as an hidden field
								echo "
								<input type='hidden' name='prod[]' value='$productid'></td>";

								//use the product id to get product details
								//run view one product fuction
								$prodetails = view_one_product($productid);

								//check if function worked
								if ($prodetails) 
								{
									//get product details and echo
									$ptitle = $prodetails[0]['product_title'];
									$pprice = $prodetails[0]['product_price'];
									$pimage = $prodetails[0]['img1'];
									$protatal = $pprice * $prodqty;
									
									echo "<div class=;row row-pb-md'>";
									echo "<div class='product-cart'>";
									echo "<div class='one-forth'>";
									echo "	<div class='product-img' style='background-image: url(".$pimage.");''>";
									echo "	</div>";
									echo "	<div class='display-tc'>";
									echo "		<h3>".$ptitle."</h3>";
									echo "	</div>";
									echo " </div>";
									echo "<div class='one-eight text-center'>";
									echo "	<div class='display-tc'>";
									echo "		<span class='price'>".$pprice."</span>";
									echo "	</div>";
									echo "</div>";
									echo "<div class='one-eight text-center'>";
									echo "	<div class='display-tc'>";
									echo "		<input type='text' id='quantity' name='quaty[]' class='form-control input-number text-center' value=".$prodqty."  min='1'max='100'>";
									echo "	</div>";
									echo "</div>";
									echo "<div class='one-eight text-center'>";
									echo "	<div class='display-tc'>";
									echo "		<span class='price'>".$protatal."</span>";
									echo "	</div>";
									echo "</div>";
									echo "<div class='one-eight text-center'>";
									echo "	<div class='display-tc'>";
									echo "<a  href='delcart.php?pid=$productid'>remove</a>";
									echo "	</div>";
								 	
									echo "</div>";
									echo "</div>";
								 	$total += $protatal;
						}
					}
				}
			}

		 ?>


				<div class="row">
					<div class="col-md-15 col-md-offset-1">
						<div class="total-wrap">
							<div class="row">
								<div class="col-md-8">
									
										<div class="row form-group">
											<div class="col-md-9">
												<input type="submit" value="UPDATE CART" name="update" class="btn btn-primary">
												
												
												<?php 
												if(!empty($_SESSION['user_id'])){ 
													echo"<button type='submit'  class='btn btn-primary' ><a href='checkout1.php?' style='text-decoration: none; color: white;''>PROCEED TO CHECKOUT</a></button>'";
												}else {
													echo "<button type='submit'  class='btn btn-primary' ><a href='../Login/login.php' style='text-decoration: none; color: white;''>PROCEED TO CHECKOUT</a></button>'";
											        } 
											    ?>
												
												
											</div>
										</div>
									</form>
								</div>
								<div class="col-md-3 col-md-push-1 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span><?php 
                                			echo $total ;?></span></p>
											<p><span>Delivery:</span> <span>$0.00</span></p>
											<p><span>Discount:</span> <span>$0.00</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span> <span><?php 
                                			echo $total ;?></span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		

		

		
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	</script>
<?php
	//check if it's and update  
	$cid=$_SESSION['user_id'];
	
	if (isset($_POST['update'])) 
	{
		//set an index to help with the loop
		$qtyindex = 0;


		//loop through product id
		foreach($_POST['prod'] as $p_id)
		{
			//get next quantity
			$qty = $_POST['quaty'][$qtyindex];

			update_cart($p_id, $cid, $qty);
			

			//update quantity index
			$qtyindex++;
			
		}
		 //reload 
		echo "<script>window.open('cart.php','_self')</script>";
	}
?>
	
	</body>
</html>

