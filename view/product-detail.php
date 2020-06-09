<?php
	//start session
	session_start();
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
								
								<li><a href="cart.php"><i class="icon-shopping-cart"></i> Cart </a></li>
								<?php 
							if(!empty($_SESSION['user_id'])){ 
								echo"<a href='../Login/login.php'>Welcome  " .$_SESSION['user_name']."</a>";
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
				   					<h1>Product Detail</h1>
				   					<h2 class="bread"><span><a href="index.html">Home</a></span> <span><a href="shop.php">Product</a></span> <span>Product Detail</span></h2>
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
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-detail-wrap">
							<div class="row">


							<?php
					        //run the function to return all product and assign to variable
					        if (isset($_GET['productname'])){
					          $pid = $_GET['productname'];
					          
					          $product_list = view_one_product($pid);
					        
					        //check a product was found
					          if ($product_list) {

					          //loop through returned list of product
					          foreach ($product_list as $product){ 
					           echo 
					           "
								<div class='col-md-5'>
									<div class='product-entry'>
										<div class='product-img' style='background-image: url(".$product['img1'].");'>
											<p class='tag'><span class='sale'>Sale</span></p>
										</div>
										<div class='thumb-nail'>
											<a href='#' class='thumb-img' style='background-image: url(".$product['img2'].");'></a>
											<a href='#' class='thumb-img' style='background-image: url(".$product['img3'].");'></a>
										</div>
									</div>
								</div>
								<div class='col-md-7'>
									<div class='desc'>
										<h3>".$product['product_title']."</h3>
										<p class='price'>
											<span>Price:GH ".$product['product_price']."</span> 
											<span class='rate text-right'>
												<i class='icon-star-full'></i>
												<i class='icon-star-full'></i>
												<i class='icon-star-full'></i>
												<i class='icon-star-full'></i>
												<i class='icon-star-half'></i>
												(74 Rating)
											</span>
										</p>
										<p>Description: ".$product['product_desc']."</p>
										<B><a href='tel:+2330572972288'><p 'class='call-button'id='call-button'> Tel:+2330572972288' </p></a></B>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='row'>
					<div class='col-md-10 col-md-offset-1'>
						<div class='row'>
							<div class='col-md-12 tabulation'>
								<ul class='nav nav-tabs'>
									<li class='active'><a data-toggle='tab' href='#description'>Description</a></li>
									<li><a data-toggle='tab' href='#manufacturer'>Manufacturer</a></li>
									<li><a data-toggle='tab' href='#review'>Reviews</a></li>
								</ul>
								<div class='tab-content'>
									<div id='description' class='tab-pane fade in active'>
										<p>".$product['product_desc']."</p>
						         </div>
						         <div id='manufacturer' class='tab-pane fade'>
						         	<p>Nemy Clothing <a href='tel:+2330572972288'><p 'class='call-button'id='call-button'> CALL US NEMY CLOTHING</p></a></p>
								      
								   </div>
								   <div id='review' class='tab-pane fade'>
								   	<div class='row'>
								   		<div class='col-md-7'>
								   			<h3>23 Reviews</h3>
								   			<div class='review'>
										   		<div class='user-img' style='background-image: url(../images/person1.jpg)''></div>
										   		<div class='desc'>
										   			<h4>
										   				<span class='text-left'>Jacob Webb</span>
										   				<span class='text-right'>14 March 2018</span>
										   			</h4>
										   			<p class='star'>
										   				<span>
										   					<i class='icon-star-full'></i>
										   					<i class='icon-star-full'></i>
										   					<i class='icon-star-full'></i>
										   					<i class='icon-star-half'></i>
										   					<i class='icon-star-empty'></i>
									   					</span>
									   					<span class='text-right'><a href='#' class='reply'><i class='icon-reply'></i></a></span>
										   			</p>
										   			<p>Amazing Product </p>
										   		</div>
										   	</div>
										   	<div class='review'>
										   		<div class='user-img' style='background-image: url(../images/person2.jpg)'></div>
										   		<div class='desc'>
										   			<h4>
										   				<span class='text-left'>Jacob Webb</span>
										   				<span class='text-right'>14 March 2018</span>
										   			</h4>
										   			<p class='star'>
										   				<span>
										   					<i class='icon-star-full'></i>
										   					<i class='icon-star-full'></i>
										   					<i class='icon-star-full'></i>
										   					<i class='icon-star-half'></i>
										   					<i class='icon-star-empty'></i>
									   					</span>
									   					<span class='text-right'><a href='#' class='reply'><i class='icon-reply'></i></a></span>
										   			</p>
										   			<p>I recommend this</p>
										   		</div>
										   	</div>
										   	<div class='review'>
										   		<div class='user-img' style='background-image: url(../images/person3.jpg)''></div>
										   		<div class='desc'>
										   			<h4>
										   				<span class='text-left'>Jacob Webb</span>
										   				<span class='text-right'>14 March 2018</span>
										   			</h4>
										   			<p class='star'>
										   				<span>
										   				<i class='icon-star-full'></i>
										   					<i class='icon-star-full'></i>
										   					<i class='icon-star-full'></i>
										   					<i class='icon-star-half'></i>
										   					<i class='icon-star-empty'></i>
									   					</span>
									   					<span class='text-right'><a href='#'' class='reply'><i class='icon-reply'></i></a></span>
										   			</p>
										   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
										   		</div>
										   	</div>
								   		</div>
								   		<div class='col-md-4 col-md-push-1'>
								   			<div class='rating-wrap'>
									   			<h3>Give a Review</h3>
									   			<p class='star'>
									   				<span>
									   					<i class='icon-star-full'></i>
									   					<i class='icon-star-full'></i>
									   					<i class='icon-star-full'></i>
									   					<i class='icon-star-full'></i>
									   					<<i class='icon-star-full'></i>
									   					(98%)
								   					</span>
								   					<span>20 Reviews</span>
									   			</p>
									   			<p class='star'>
									   				<span>
									   				<i class='icon-star-full'></i>
									   				<i class='icon-star-full'></i>
									   				<i class='icon-star-full'></i>
									   				<i class='icon-star-full'></i>
									   				<i class='icon-star-empty'></i>
									   					(85%)
								   					</span>
								   					<span>10 Reviews</span>
									   			</p>
									   			<p class='star'>
									   				<span>
									   					<i class='icon-star-full'></i>
									   					<i class='icon-star-full'></i>
									   					<i class='icon-star-full'></i>
									   					<i class='icon-star-empty'></i>
									   					<i class='icon-star-empty'></i>
									   					(98%)
								   					</span>
								   					<span>5 Reviews</span>
									   			</p>
									   			<p class='star'>
									   				<span>
									   					<i class='icon-star-full'></i>
									   					<i class='icon-star-full'></i>
									   					<i class='icon-star-empty'></i>
									   					<i class='icon-star-empty'></i>
									   					<i class='icon-star-empty'></i>
									   					(98%)
								   					</span>
								   					<span>0 Reviews</span>
									   			</p>
									   			<p class='star'>
									   				<span>
									   					<i class='icon-star-full'></i>
									   					<i class='icon-star-empty'></i>
									   					<i class='icon-star-empty'></i>
									   					<i class='icon-star-empty'></i>
									   					<i class='icon-star-empty'></i>
									   					(98%)
								   					</span>
								   					<span>0 Reviews</span>
									   			</p>
									   		</div>
								   		</div>
								   	</div>
								   </div>

								    ";
            
						          }
						          }
						        }
						          ?>
						          </div>
						          <div class="row form-group">
											<div class="col-md-15 text-center">
												
												
												<?php 

												if(!empty($_SESSION['user_id'])){ 
													echo"<a href='cart.php?productname=$pid' class='btn btn-primary btn-addtocart'><i class='icon-shopping-cart'></i> Add to Cart</a>'";

													echo "<a href='cart.php?productname=$pid' class='btn btn-primary btn-addtocart'><i class='icon-shopping-cart'></i> BUY</a></p>";
												}else {
													echo "<a href='../Login/login.php' class='btn btn-primary btn-addtocart'><i class='icon-shopping-cart'></i> Add to Cart</a>'";
													echo "<a href='../Login/login.php' class='btn btn-primary btn-addtocart'><i class='icon-shopping-cart'></i> BUY</a>'";
											        } 
											    ?>
												
												
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

	<script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>

	</body>
</html>

