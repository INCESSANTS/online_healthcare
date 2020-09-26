<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
$query = $dbh->prepare($sql);
$query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Subscribed successfully.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
?>
<!--
<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
      
        <div class="col-md-6">
          <h6>Quick Links</h6>
          <ul>

        
          <li><a href="page.php?type=aboutus">About Us</a></li>
		  <li><a href="page.php?type=faqs">Domestic</a></li>
		  <li><a href="page.php?type=privacy">Careers</a></li>
          <li><a href="page.php?type=terms">Inquiry</a></li>
		  <li><a href="page.php?type=terms">Certificate</a></li>
		  <li><a href="page.php?type=terms">Explore</a></li>
		  <li><a href="page.php?type=terms">Contact US</a></li>
          </ul>
        </div>
  
        <div class="col-md-3 col-sm-6">
          <h6>Subscribe Newsletter</h6>
          <div class="newsletter-form">
            <form method="post">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Enter Email Address" />
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users very week.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
            <p>Connect with Us:</p>
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">Copyright &copy; 2020 Redicure Life. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
  
</footer>
-->

<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
    <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h3>Quick Links</h3>
          <ul class="list-unstyled">
            <li><a href="#">About us</a></li>
            <li><a href="#">Certificate</a></li>
            <li><a href="#">Inquiry</a></li>
            <li><a href="#">Quality Control</a></li>
            <li><a href="#">Manufacturing Facility</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h3>Contact Us</h3>
          <ul class="list-unstyled">
            <li><a href="#">Contact Person:</a>
            </li>
            <li><a href="#">Office Address:</a></li>
            <li><a href="#">Phone:</a></li>
            <li><a href="#">Email:</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h3>News Letter</h3>
          <form class="form-inline" method="post">
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Your Email"></div>
                <div><br></div>
                <div class="form-group" style="position:relative;left:30px;"><button class="btn btn-primary" type="submit">Subscribe </button></div>
            </form>
        </div>
      </div>
    	<div class="col-md-3 footer-social-pad">
    		<h3>Follow Us</h3>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
             <li><a href="#" class="icoGoogle"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
             <li><a href="#" class="icoInsta"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>				
		</div>
    </div>
	<div class="row">
		<div class="col-md-12 copy">
			<p class="text-center">&copy; Copyright 2020 - Redicure Life. &nbsp; All rights reserved.&nbsp; Powered By Team Incessant</p>
		</div>
	</div>


  </div>
  </div>
</footer>
  