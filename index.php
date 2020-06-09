<?php
	//start session
	session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Name of business</title>
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
}
</style>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page" class="up">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2 ">
							<div id="colorlib-logo" class="header"><img src="./images/logo.jpg" alt="logo" /></div>
						</div>
						<div class="col-xs-15 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="./view/shop.php">Shop</a></li>
								
								<li><a href="./view/about.php">About</a></li>
								
								<li><a href="./view/cart.php"><i class="icon-shopping-cart"></i> Cart</a></li>
								<?php 
							if(!empty($_SESSION['user_id'])){ 
								echo"<a href='./Login/login.php'>Welcome  " .$_SESSION['user_name']."</a>";
							}else {
								echo "<li class='btn-cta'><a href='./Login/login.php'><span>Login</span></a></li>"; 
						        } 
						    ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(./images/back2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Men &</h1>
					   					<h2 class="head-2">Women's</h2>
					   					<h2 class="head-3">Wear</h2>
					   					<p class="category"><span>New stylish shirts</span></p>
					   					<p><a href="gallery/photos.php" class="btn btn-primary">View Gallery</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/back4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">LOW</h1>
					   					<h2 class="head-2">PRICES</h2>
					   					<h2 class="head-3">10% off</h2>
					   					<p class="category"><span>Stylish shirts</span></p>
					   					<p><a href="gallery/photos.php" class="btn btn-primary">View Gallery</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/back3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">New</h1>
					   					<h2 class="head-2">Arrival</h2>
					   					<h2 class="head-3"> 10% off</h2>
					   					<p class="category"><span>Wear Africa!</span></p>
					   					<p><a href="gallery/photos.php" class="btn btn-primary">View Gallery</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>


		<div class="col-md-12">
				<svg class="editorial"
			     xmlns="http://www.w3.org/2000/svg"
			     xmlns:xlink="http://www.w3.org/1999/xlink"
			     viewBox="0 24 150 28 "
			     preserveAspectRatio="none">
			 <defs>
			 <path id="gentle-wave"
			 d="M-160 44c30 0 
			    58-18 88-18s
			    58 18 88 18 
			    58-18 88-18 
			    58 18 88 18
			    v44h-352z" />
			  </defs>
			  <g class="parallax1">
			   <use xlink:href="#gentle-wave" x="50" y="3" fill="#f461c1"/>
			  </g>
			    <g class="parallax2">
			   <use xlink:href="#gentle-wave" x="50" y="0" fill="#4579e2"/>
			    </g>
			      <g class="parallax3">
			   <use xlink:href="#gentle-wave" x="50" y="9" fill="#3461c1"/>
			   </g>
			    <g class="parallax4">
			   <use xlink:href="#gentle-wave" x="50" y="6" fill="#fff"/>  
			  </g>
			</svg>
		</div>

		<div class="colorlib-shop">

			<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>New Arrival</span></h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img">
							<a class="product-img"  href="./view/product-detail.php?productname=38" style="background-image: url(images/JeansJacket.jpeg);"></a>
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="./view/cart.php?productname=38"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="./view/product-detail.php?productname=38"><i class="icon-eye"></i></a></span> 
										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="./view/product-detail.php?productname=38">White Jeans Kente Jacket</a></h3>
								<p class="price"><span>GH 100.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img">
							<a class="product-img"  href="./view/product-detail.php?productname=37" style="background-image: url(images/Kentehoodie1.jpeg);"></a>
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="./view/cart.php?productname=37"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="./view/product-detail.php?productname=37"><i class="icon-eye"></i></a></span> 
										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="./view/product-detail.php?productname=37" >Kente Hoodie</a></h3>
								<p class="price"><span>GH 100.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img">
							<a class="product-img"  href="./view/product-detail.php?productname=39" style="background-image: url(images/Kentehoodie2.jpeg);"></a>
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="./view/cart.php?productname=39"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="./view/product-detail.php?productname=39"><i class="icon-eye"></i></a></span> 
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="./view/product-detail.php?productname=39">African Print Black Hoodie</a></h3>
								<p class="price"><span>GH 100.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img">
							<a class="product-img"  href="./view/product-detail.php?productname=40" style="background-image: url(images/Jacket1.jpeg);"></a>
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="./view/cart.php?productname=40"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="./view/product-detail.php?productname=40"><i class="icon-eye"></i></a></span> 
										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="./view/product-detail.php?productname=40" >Jacket</a></h3>
								<p class="price"><span>GH 100.00</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>




		<div id="colorlib-intro" class="colorlib-intro" style="background-image: url(images/banner.jpeg);" data-stellar-background-ratio="0.2">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-lefts">
									<div class="sale-box">
										<div class="sale-box-top">
											<h2 class="number">45</h2>
											<span class="sup-1">%</span>
											<span class="sup-2">Off</span>
										</div>
										<h2 class="text-sale">Sale</h2>
									</div>
								</div>
								<div class="text-rights">
									<h3 class="title">Just hurry up limited offer!</h3>
									<p>We offer the best of clothing with a touch of Africanness! Our clothes are highly patronized by Celebrities..</p>
									<p><a href="../view/shop.php" class="btn btn-primary">Shop Now</a> <a href="../view/shop.php" class="btn btn-primary btn-outline">Read more</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="col-md-12">
				<svg class="editorial"
     xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink"
     viewBox="0 24 150 28 "
     preserveAspectRatio="none">
 <defs>
 <path id="gentle-wave"
 d="M-160 44c30 0 
    58-18 88-18s
    58 18 88 18 
    58-18 88-18 
    58 18 88 18
    v44h-352z" />
  </defs>
  <g class="parallax1">
   <use xlink:href="#gentle-wave" x="50" y="3" fill="#f461c1"/>
  </g>
    <g class="parallax2">
   <use xlink:href="#gentle-wave" x="50" y="0" fill="#4579e2"/>
    </g>
      <g class="parallax3">
   <use xlink:href="#gentle-wave" x="50" y="9" fill="#3461c1"/>
   </g>
    <g class="parallax4">
   <use xlink:href="#gentle-wave" x="50" y="6" fill="#fff"/>  
  </g>
</svg>
</div>
			<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Our Products</span></h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img">
							<a class="product-img"  href="./view/product-detail.php?productname=47" style="background-image: url(images/t11.jpeg);"></a>
								<p class="tag"><span class="sale">Sale</span></p>
								<div class="cart">
									<p>
										<span ><a href="./view/cart.php?productname=47"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="./view/product-detail.php?productname=47" ><i class="icon-eye"></i></a></span> 
										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="./view/product-detail.php?productname=47">African Print T-shirt</a></h3>
								<p class="price"><span>GH 80.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img">
							<a class="product-img"  href="./view/product-detail.php?productname=45" style="background-image: url(images/hoodie3.jpeg);"></a>
								<p class="tag"><span class="new">Sale</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="./view/cart.php?productname=45"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="./view/product-detail.php?productname=45" ><i class="icon-eye"></i></a></span> 
										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="./view/product-detail.php?productname=45">Hoodie African Print Sleeves</a></h3>
								<p class="price"><span>GH 120.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img">
							<a class="product-img"  href="./view/product-detail.php?productname=46" style="background-image: url(images/hoodie4.jpeg);"></a>
								<p class="tag"><span class="new">Sale</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="./view/cart.php?productname=46"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="./view/product-detail.php?productname=46" "><i class="icon-eye"></i></a></span> 
										
										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="./view/product-detail.php?productname=46" >African Print Hoodie</a></h3>
								<p class="price"><span>GH 120.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img">
							<a class="product-img"  href="./view/product-detail.php?productname=41" style="background-image: url(images/t5.jpeg);"></a>
								<p class="tag"><span class="sale">Sale</span></p>
								<div class="cart">
									<p>
										<span ><a href="./view/cart.php?productname=41"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="./view/product-detail.php?productname=41" ><i class="icon-eye"></i></a></span> 
										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="./view/product-detail.php?productname=41">African Print T-shirt</a></h3>
								<p class="price"><span>GH 80.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img">
							<a class="product-img"  href="./view/product-detail.php?productname=48" style="background-image: url(images/jeansjacket3.jpeg);"></a>
								<p class="tag"><span class="sale">Sale</span></p>
								<div class="cart">
									<p>
										<span ><a href="./view/cart.php?productname=48"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="./view/product-detail.php?productname=48" ><i class="icon-eye"></i></a></span> 
										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="./view/product-detail.php?productname=48">Jeans Jacket</a></h3>
								<p class="price"><span>GH 100.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img">
							<a class="product-img"  href="./view/product-detail.php?productname=43" style="background-image: url(images/t2.jpeg);"></a>
								<p class="tag"><span class="sale">Sale</span></p>
								<div class="cart">
									<p>
										<span ><a href="./view/cart.php?productname=43"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="./view/product-detail.php?productname=43" ><i class="icon-eye"></i></a></span> 
										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="./view/product-detail.php?productname=43">African Print T-Shirt</a></h3>
								<p class="price"><span>GH 80.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img">
							<a class="product-img"  href="./view/product-detail.php?productname=44" style="background-image: url(images/t1.jpeg);"></a>
								<p class="tag"><span class="sale">Sale</span></p>
								<div class="cart">
									<p>
										<span ><a href="./view/cart.php?productname=44"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="./view/product-detail.php?productname=44" ><i class="icon-eye"></i></a></span> 
										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="./view/product-detail.php?productname=44">African Print T-Shirt</a></h3>
								<p class="price"><span>GH 80.00</span></p>
							</div>
						</div>
					</div>
					

					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img">
							<a class="product-img"  href="./view/product-detail.php?productname=49" style="background-image: url(images/t4.jpeg);"></a>
								<p class="tag"><span class="sale">Sale</span></p>
								<div class="cart">
									<p>
										<span ><a href="./view/cart.php?productname=49"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="./view/product-detail.php?productname=49" ><i class="icon-eye"></i></a></span> 
										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="./view/product-detail.php?productname=49">African Print T-Shirt</a></h3>
								<p class="price"><span>GH 80.00</span></p>
							</div>
						</div>
					</div>

					<div class="col-md-15 text-center">
		<p align="text-center"><a href="./view/shop.php" class="btn btn-primary">View More Products</a></p></div>
				</div>
			</div>
		</div>
		

		<div id="colorlib-testimony" class="colorlib-light-grey">

			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Our Satisfied Customer says</span></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">						
						<div class="owl-carousel2">
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/t6.jpeg);"></span>
									<span class="user">Mr. Nemy</span>
									<small>Accra, Ghana</small>
									<blockquote>
										<p>" Lets patronize made in Ghana products! Wear Ghana</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/Jacket1.jpeg);"></span>
									<span class="user">Kelvinboy</span>
									<small>Accra, Ghana</small>
									<blockquote>
										<p>Nemy clothing provide you with all urban wears with a touch of Africanness, Love it!</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/person3.jpg);"></span>
									<span class="user">Jacob Webb</span>
									<small>Athens, Greece</small>
									<blockquote>
										<p>When I come to Ghana, I always check this website for comfortable African Wears</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>

		<div class="colorlib-blog">
			<div class="col-md-12">
				<svg class="editorial"
     xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink"
     viewBox="0 24 150 28 "
     preserveAspectRatio="none">
 <defs>
 <path id="gentle-wave"
 d="M-160 44c30 0 
    58-18 88-18s
    58 18 88 18 
    58-18 88-18 
    58 18 88 18
    v44h-352z" />
  </defs>
  <g class="parallax1">
   <use xlink:href="#gentle-wave" x="50" y="3" fill="#f461c1"/>
  </g>
    <g class="parallax2">
   <use xlink:href="#gentle-wave" x="50" y="0" fill="#4579e2"/>
    </g>
      <g class="parallax3">
   <use xlink:href="#gentle-wave" x="50" y="9" fill="#3461c1"/>
   </g>
    <g class="parallax4">
   <use xlink:href="#gentle-wave" x="50" y="6" fill="#fff"/>  
  </g>
</svg>
</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
						<h2>Recent Blog</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);"></a>
							<div class="desc">
								<p class="meta"><span class="day">02</span><span class="month">Mar</span></p>
								<p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
								<h2><a href="blog.html">Openning Branches</a></h2>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</article>
					</div>
					<div class="col-md-4">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);"></a>
							<div class="desc">
								<p class="meta"><span class="day">02</span><span class="month">Mar</span></p>
								<p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
								<h2><a href="blog.html">Openning Branches</a></h2>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</article>
					</div>
					<div class="col-md-4">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);"></a>
							<div class="desc">
								<p class="meta"><span class="day">02</span><span class="month">Mar</span></p>
								<p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
								<h2><a href="blog.html">Openning Branches</a></h2>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
		
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6 text-center">
							<h2><i class="icon-paperplane"></i>Sign Up for a Newsletter</h2>
						</div>
						<div class="col-md-6">
							<form class="form-inline qbstp-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Enter your email">
											<button type="submit" class="btn btn-primary">Subscribe</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Store</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Contact</a></li>
								<li><a href="#">Returns/Exchange</a></li>
								<li><a href="#">Gift Voucher</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Special</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-2">
						<h4>News</h4>
						<ul class="colorlib-footer-links">
							<li><a href="blog.html">Blog</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Exhibitions</a></li>
						</ul>
					</div>

					<div class="col-md-3">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="#">yoursite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- <div class="copy">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							
							<span class="block">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
</span> 
							<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
						</p>
					</div>
				</div>
			</div> -->
		</footer>
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




<style type="text/css">
	body
{
  margin:0;
  padding:0;
  /*background-color:#03396c;*/
}

.editorial {
  display: block;
  width: 100%;
  height: 60px;
  max-height: 60px;
  margin: 0;
  z-index:-1;
  /*bottom:0;*/
  position:absolute;
  left:0px;
  float:left;
}

.parallax1 > use {
  animation: move-forever1 10s linear infinite;
  &:nth-child(1) {
    animation-delay: -2s;
  }
}
.parallax2 > use {
  animation: move-forever2 8s linear infinite;
  &:nth-child(1) {
    animation-delay: -2s;
  }
}
.parallax3 > use {
  animation: move-forever3 6s linear infinite;
  &:nth-child(1) {
    animation-delay: -2s;
  }
}
.parallax4 > use {
  animation: move-forever4 4s linear infinite;
  &:nth-child(1) {
    animation-delay: -2s;
  }
}
@keyframes move-forever1 {
  0% {
    transform: translate(85px, 0%);
  }
  100% {
    transform: translate(-90px, 0%);
  }
}
@keyframes move-forever2 {
  0% {
    transform: translate(-90px, 0%);
  }
  100% {
    transform: translate(85px, 0%);
  }
}
@keyframes move-forever3 {
  0% {
    transform: translate(85px, 0%);
  }
  100% {
    transform: translate(-90px, 0%);
  }
}
@keyframes move-forever4 {
  0% {
    transform: translate(-90px, 0%);
  }
  100% {
    transform: translate(85px, 0%);
  }
}

</style>

	</body>
</html>

