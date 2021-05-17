<?php
include ('productCRUD.php');
$obj = new ProductCRUD();
$list = $obj -> readProducts();
if ($list) {
    /*foreach($list as $item) {
        $content = "";
        foreach($item as $key => $value) {
            $content = $content . $key . ": ". $value . "<br>";
        }
        echo $content . "<br>";
    }
}*/
?>
<!DOCTYPE html>
<html>
<head>
<title>Toys an Entertainment</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Toys Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/styles.css?v=1.6" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/scripts.js?v=1.7"></script>
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
	<!-- header -->
	<div class="banner header-bg">
		<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul class="nav">
						<li><a href="index.html" class="active"> Home</a></li>
						<li><a href="about.html"> About</a></li>
						<li><a href="#" class="menu">Portfolio<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
							<ul class="nav-sub">
								<li><a href="portfolio.html">Portfolio 1</a></li>                                             
								<li><a href="portfolio.html">Portfolio 2</a></li>																								
								<li><a href="portfolio.html">Portfolio 3</a></li> 
							</ul>
							<script>
								$( "li a.menu" ).click(function() {
								$( "ul.nav-sub" ).slideToggle( 300, function() {
								// Animation complete.
								});
								});
							</script>

						<li><a href="Admin.php"> Admin</a></li>

					</ul>
				</nav>
			</div>
		</div>
		<div class="header-top">
			<div class="container">
				<div class="head-logo">
					<h1><a href="index.html">Toys</a></h1>
				</div>
				<div class="top-nav">
					<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><img src="img/menu-icon.png" alt=""></a>
					</div>	
				</div>	
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="banner-info">
			<!-- container -->
			<div class="container">
				<!--banner Slider starts Here-->
				<script src="js/responsiveslides.min.js"></script>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 3
					  $("#slider3").responsiveSlides({
						auto: true,
						pager: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
					  });
				
					});
				</script>
				<!--//End-slider-script-->
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="bnr-text">
								<h4>A Special</h4>
								<h2>TOY STORE </h2>
								<p>Our New Collection</p>
							</div>
						</li>
						<li>
							<div class="bnr-text">
								<h4>Hi iam here</h4>
							</div>
						</li>
						<li>
							<div class="bnr-text">
								<h4>Welcome</h4>
								<h2>A Toy Store for your kids</h2>
								<p>Everything you need is here</p>
							</div>
						</li>
					</ul>
				</div>
			</div>			
		</div>			
	</div>
	<div class="clearfix"> </div>
	<!--//header -->
	<!-- welcome-->
	<div class="welcome">
		<div class="container">
			<h3 class="hdng">Welcome</h3>
			<p>Choose your product</p>
			<div class="welcome-info">
			<?php foreach($list as $item) { ?>
				<div class="col-md-4 welcome-grids">
				
					<div class="welcome-imgs welcm-top">
					
						<img src="img\<?=$item['images']?>" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>Price</h4>
						</div>
						
					</div>
					
				</div>
				<?php } ?>
					<?php } ?>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//welcome-->
	<!-- services -->
	<div class="services">
		<div class="container">
			<h3 class="hdng">Services</h3>
			<div class="services-info">
				<div class="col-md-4 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon-music" aria-hidden="true"></span>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
					</div>

					<div class="clearfix"> </div>
				</div>			
				<div class="clearfix"> </div>
			</div>			
		</div>
	</div>
	<!-- //services -->
	<!--footer-->
	<div class="footer-bottom">
		<div class="container">		
			<p> © 2015 Toys . All rights reserved</p>					
		</div>
	</div>
	<!--//footer-->		
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>