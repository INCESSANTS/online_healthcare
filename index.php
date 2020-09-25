<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Redicure Life</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/dropdown.css" type="text/css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
<style>
	::-webkit-scrollbar
{
	width: 0;
}
		
		#scrollpath {
			position: fixed;
			top: 0;
			right: 0;
			width: 10px;
			background: rgba(255,255,255,0.05);
		}
		#progressbar {
			position: fixed;
			top: 0;
			right: 0;
			width: 10px;
			background: linear-gradient(to top, #008aff , #00ffe7);
			animation: animate 5s linear infinite;
			z-index: 2;
		}
		
		@keyframes animate 
		{
			0%,100%
			{
				filter: hue-rotate(0deg);
			}
			50%
			{
				filter: hue-rotate(360deg);
			}
		}
		
		#progressbar:before
		{	
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(to top, #008aff , #00ffe7);
			filter: blur(10px);
			
			
		}
		
		#progressbar:after
		{	
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(to top, #008aff , #00ffe7);
			filter: blur(30px);
			
			
		}
		.container
		{
			padding-right: 0px;
			padding-left: 0px;
		}
		
	</style>
<body>
<div id="progressbar"></div>
	<div id="scrollpath"></div>
	
        
<!--Header-->
<?php include('includes/header.php');?>


<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1 style="color:black;"> Helping You</h1>
            <p style="color:red;">STAY HAPPY </p>
            <a href="#" class="btn">CheckOut our Services <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
 

<!-- Resent Meds-->
<section class="section-padding gray-bg">
  <div class="container">
		<div class="row">
			<div class="col">
				<div class="section-header text-center">
					<h3>Redicure Products</h3>
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-xl-6">
						<div class="card transition">
						<h2 class="transition">Tablet</h2>
						<p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
						<div class="cta-container transition"><a href="#" class="cta">Read More</a></div>
						<div class="card_circle transition"></div>
						</div>

						<div class="card transition">
						<h2 class="transition">Capsules</h2>
						<p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
						<div class="cta-container transition"><a href="#" class="cta">Read More</a></div>
						<div class="card_circle transition"></div>
						</div>

						<div class="card transition">
						<h2 class="transition">Liquid & Dry Syrup</h2>
						<p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
						<div class="cta-container transition"><a href="#" class="cta">Read More</a></div>
						<div class="card_circle transition"></div>
						</div>
				</div>		
				<div class="col-xl-6">
						<div class="card transition">
						<h2 class="transition">External Preparation</h2>
						<p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
						<div class="cta-container transition"><a href="#" class="cta">Read More</a></div>
						<div class="card_circle transition"></div>
						</div>

						<div class="card transition">
						<h2 class="transition">Injections</h2>
						<p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
						<div class="cta-container transition"><a href="#" class="cta">Read More</a></div>
						<div class="card_circle transition"></div>
						</div>

						<div class="card transition">
						<h2 class="transition">ORS & Powders</h2>
						<p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
						<div class="cta-container transition"><a href="#" class="cta">Read More</a></div>
						<div class="card_circle transition"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<!-- Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>20+</h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-vial" aria-hidden="true"></i>1200+</h2>
            <p>Products</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
            <p>Distributor</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>1000+</h2>
            <p>Operational City</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>


<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Reviews</h2>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>



<!--Footer -->
<?php include('includes/footer.php');?>



<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>


<!--Login-Form -->
<?php include('includes/login.php');?>


<!--Register-Form -->
<?php include('includes/registration.php');?>

 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>


<!-- Scripts --> 
<script type="text/javascript">
	let progress = document.getElementById('progressbar');
	let totalHeight = document.body.scrollHeight - window.innerHeight;
	window.onscroll = function(){
		let progressHeight = (window.pageYOffset / totalHeight ) * 100 ;
		progress.style.height = progressHeight + "%";
	}
	
	</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>