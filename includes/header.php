<div id="progressbar"></div>
<div id="scrollpath"></div>
<header>
 
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
       <!-- <div><img src="assets/images/cat-profile.png" style="width:100px;hieght:100px;display:inline-block"></div>  -->
        <div > <a href="index.php" style="font-size:24px; font-weight:700;">Redicure Life</a> </div>
        
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Support Mail us : </p>
              <a href="mailto:info@example.com">info@example.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service Helpline Call Us: </p>
              <a href="tel:61-1234-5678-09">+91 9090121121</a></div>
			<div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-map-marker" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Factory Location </p>Greater Kailash , Delhi-92</a> </div>
	<?php   if(strlen($_SESSION['login'])==0)
	{	
	?>
<?php }
else{ 

echo "Welcome To Redicure";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
 <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a>    </li>
			<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">About US</a>
						<div class="dropdown-content">
						<a href="../UploadBooks.php">Profile</a>
						<a href="../Bookmenu.php">Manufacturing Facility</a>
						<a href="../Bookmenu.php">Quality Control</a>
						</div>
			</li>
		  
          <li><a href="#.php">Certificate</a>
          <li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">Domestic</a>
						<div class="dropdown-content">
						<a href="../UploadBooks.php">Tablet</a>
						<a href="../Bookmenu.php">Capsules</a>
						<a href="../Bookmenu.php">Liquid and Dry Syrup</a>
						<a href="../Bookmenu.php">External Preparation</a>
						<a href="../Bookmenu.php">Injections</a>
						<a href="../Bookmenu.php">ORS & Powders</a>
						</div>
			</li>
		  <li><a href="page.php?type=faqs">Export</a></li>
		  <li><a href="page.php?type=faqs">Carrers</a></li>
		  <li><a href="page.php?type=faqs">Inquiry</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>

        </ul>
      </div>
    </div>
  </nav> 

  <!-- Navigation end --> 
 
</header>