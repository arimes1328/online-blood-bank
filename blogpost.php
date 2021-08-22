<?php
require_once "config.php";
session_start();
$_SESSION['callfrom'] ="blog";

  if(isset($_GET["id"])){
	$id =$_GET["id"];
	
$sql2 = "SELECT *  FROM blog_post WHERE id_post = '$id' ";

$result2 = mysqli_query($link, $sql2);
$count= mysqli_num_rows($result2);


$rows=mysqli_fetch_assoc($result2);

$first_name= $rows["first_name"];
$last_name= $rows["last_name"];
$dob= $rows["dob"];
$bloodgroup= $rows["bloodgroup"];
$gender= $rows["gender"];
$district= $rows["district"];
$title= $rows["title"];
$description = $rows["description"];
$image= $rows["image"];
$createdAt= $rows["createdAt"];


  }
  else {
	header("location: blog.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="images/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Blog Details</title>

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

	<!-- Start Header Area -->
	<?php 
	include('header.php');
	?>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						<?php echo $title ?>
					</h1>
					<p class="link-nav">
						<span class="box">
						
							<a href="#">Blog</a>
							<a href="#">Blog Post</a>
						</span>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
								<img class="images-fluid" src="images/blog/feature-img1.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								<li><a href="#">Blood Donation</a></li>
								
							</ul>
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#"><?php echo $first_name ?></a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $createdAt ?></a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#"><?php echo $district ?></a> <span class="lnr lnr-eye"></span></p>
								
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
						<img src=<?php echo "uploads/".$image ?> alt="">
							<a class="posts-title" href="#"><h3><?php echo $title ?></h3></a>
							<p class="excert">
						
							<?php echo $description?>
						</p>
						</div>
						<div class="col-lg-12">
							<div class="quotes">
							About <?php echo $first_name ?>
							<br />
							Date Of Birth <?php echo $dob ?>
							<br />
							Blood Group <?php echo $bloodgroup ?>
							</div>
							<div class="row mt-30 mb-30">
								<div class="col-6">
									<img class="images-fluid" src="images/blog/post-img1.jpg" alt="">
								</div>
								<div class="col-6">
									<img class="images-fluid" src="images/blog/post-img2.jpg" alt="">
								</div>
								
							</div>
						</div>
					</div>
			
				
				
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						<div class="single-sidebar-widget search-widget">
							<form class="search-form" action="#">
								<input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<div class="single-sidebar-widget user-info-widget">
							
							<a href="#"><h4><?php echo $first_name ?></h4></a>
							<p>
							<?php echo $district ?>
							</p>
						
						
						</div>
					
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End post-content Area -->

	<!-- Horizontal bar -->
	<div class="container">
		<hr>
	</div>

	<!-- start footer Area -->
	<?php 
	include('footer.php')
	?>
	<!-- End footer Area -->

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