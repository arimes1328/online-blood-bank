<?php
session_start();
$_SESSION['callfrom']="home";
?>
<!DOCTYPE html>
<html>
<head>

	<title>Home</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<!-- Start Preloader Area -->
	<div class="preloader-area">
		<div class="loader-box">
			<div class="loader"></div>
		</div>
	</div>
	<!-- End Preloader Area -->


	<?php
		include 'header.php';
	?>

	<!--introtext-->
	<!-- <div class="introtext">
		<h1>Donate Blood<br>& Save Lives</h1>
		<p><b>Volunteer blood donation</b> is a safe and simple procedure that involves a donor giving one of the following blood products: whole blood, red blood cells, plasma, or platelets. Overview Volunteers donate all blood products used for transfusions performed in the United States to help people who are ill or injured, or who need blood for other reasons.</p>
		<button><a href="https://www.nhlbi.nih.gov/health-topics/blood-donation" target="_blank">Read more</a></button> 
	</div>	 -->


	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Blood Bank Management System
					</h1>
					
						<span class="box m-2">
							<a href="#">BY </a>
							<a href="#">INANA OGHALE PRINCE</a>
					</span>
					
					<span class="box m-2">
							<a href="#">MAT NO </a>
							<a href="#">SCN/CSC/180375</a>
					</span>
					<br/>
					<span class="box m-2">
							<a href="#">DEPARTMENT </a>
							<a href="#">PHYSICS SCIENCE DEPARTMENT </a>
					</span>

					
					<span class="box m-2">
							<a href="#">UNIVERSITY </a>
							<a href="#">BENSON IDAHOSA UNIVERSITY </a>
					</span>

					<br/>
					<span class="box m-2">
							<a href="#">DATE </a>
							<a href="#">1ST JUL, 2021 </a>
					</span>
			
			

				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start banner Area -->
	<section class="home-banner-area">
		<div class="container">
			<div class="row mt-4 d-flex align-items-center">
				<div class="banner-content col-lg-6 col-md-12 justify-content-center ">
					<div class="me wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">Donate Blood<br>& Save Lives</div>
					<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">Donate Blood to save a Life</h1>
					<div class="designation mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
					Volunteer blood donation <br/>
						<span class="designer">A safe and simple procedure  </span>
						
					</div>
					<a href="#" class="primary-btn" data-text="Donate Blood">
						<span>D</span>
						<span>o</span>
						<span>n</span>
						<span>a</span>
						<span>t</span>
						<span>e</span>
						<span>!</span>
					</a>
				</div>
				<div class="banner-img col-lg-6 col-md-12 align-self-center">
					<img class="img-fluid" src="images/blood.png" alt="">
					
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->





	<!-- Start About Area -->
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 about-left">
					<img class="img-fluid" src="images/donation.png" alt="" width="400px">
				</div>
				<div class="col-lg-5 col-md-12 about-right">
					<div class="section-title">
						<h2>Why You Should Donate Blood</h2>
					</div>
					<div class="mb-50 wow fadeIn" data-wow-duration=".8s">
						<p>
						Blood donation is a safe and simple procedure that involves a donor giving one of the following blood products: whole blood, red blood cells, plasma, or platelets. 
						 
							</p>
						<p>
						Volunteers donate all blood products used for transfusions performed  to help people who are ill or injured, or who need blood for other reasons. Most times blood is 
						  not enough for surgeries which is whyblood banks were created. Blood Donated is now stored allowing hospitals to decrease fatalityies caused by lack of blood.
						
						</p>
					</div>
					<a href="#" class="primary-btn white" data-text="More Info">
						<span>M</span>
						<span>o</span>
						<span>r</span>
						<span>e</span>
						<span> </span>
						<span>I</span>
						<span>n</span>
						<span>f</span>
						<span>o</span>
					</a>
					<a href="#" class="primary-btn" data-text="Resume">
						<span>R</span>
						<span>e</span>
						<span>s</span>
						<span>u</span>
						<span>m</span>
						<span>e</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->



	<!-- Start Service Area -->
	<section class="service-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Features</h2>
						<p>This Application is a complete management system for blood bank distribution chains.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s">
						<span class="lnr lnr-screen"></span>
						<h4>
							<span>Blood Stock </span>
						</h4>
						<p>The application handles management of blood stock seamlessly</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
						<span class="lnr lnr-laptop-phone"></span>
						<h4><span>Location Of</span> Blood Donors
						</h4>
						<p>The application makes it easy to fing blood donors around a vicinity</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
						<span class="lnr lnr-database"></span>
						<h4><span>Information</span> System
						</h4>
						<p>The information system makes it easy for people to learn about blood donation and tips on the benefits</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
						<span class="lnr lnr-chart-bars"></span>
						<h4><span>Streamlined</span> Process
						</h4>
						<p>The application process makes it easy for hospitals and blood requester to get blood for clinical processes and for donors and organisations to donate.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Service Area -->


	<!-- Start Testimonials Area -->
	<section class="testimonials_area section-gap">
		<div class="container">
			<div class="testi_slider owl-carousel">
				<div class="item">
					<div class="testi_item">
						<img src="images/quote.png" alt="">
						<h4>Obioma John</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								Donating blood has become a habit of mine, I encourage everyone to donate blood every 6 months
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi_item">
						<img src="images/quote.png" alt="">
						<h4>Olufunke Oluwatobi</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								A lot of people are in need of blood, people should make it a habit to donate blood especially people with rare blood types.
							</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Testimonials Area -->


	<!-- Start Contact Area -->
	<section class="contact-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-title">
						<h2>Join</h2>
						
					</div>
				</div>
			</div>

			<div class="row mt-80">
				<div class="col-lg-3 col-md-3">
					<div class="contact-box">
					<a href="login/donor.php" class="primary-btn mt-10">
                        <div class="m-3">
                            <p class="title">Blood Donors</p>
                        </div>
                    </a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="contact-box">
					<a href="login/requester.php" class="primary-btn mt-10">
                    <div class="m-3">
                        <p class="title">Blood Requesters</p>
                    </div>
                    </a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					
					<a href="login/hospital.php" class="primary-btn mt-10">
                    <div class="m-3">
                        <p class="title">Hospital</p>
                    </div>
                    </a>
					
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="contact-box ">
					<a href="login/organization.php" class="primary-btn mt-10">
                    <div class="m-3">
                        <p class="title">Organizations</p>
                    </div>
                    </a>
                   
					</div>
				</div>

				
                   
                 
                    

			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="#" class="primary-btn mt-50" data-text="Join / Login">
						<span>Join</span>
						<span></span>
						<span>/</span>
						<span></span>
						<span>Login </span>
						
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Area -->


<?php 
include('footer.php')
?>

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="lnr lnr-arrow-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/mn-accordion.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.circlechart.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>