<?php
require_once "config.php";
 session_start();
 	$_SESSION['callfrom'] ="blog";
 ?>

<?php


    $today="";
	// query
	$sql = "SELECT * FROM blog_posts ";
	$result = mysqli_query($link, $sql);

    $today= date("Y-m-d");

	if (isset($_GET['page_no']) && $_GET['page_no']!="") {
		$page_no = $_GET['page_no'];
		} else {
			$page_no = 1;
			}

			$total_records_per_page = 10;

			$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";


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
	<title>Blood Bank Home</title>

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

	
	
<?php
		include 'header.php';
	?>


	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Blood Bank Blog 
					</h1>
					<p class="link-nav">
						<span class="box">
							<a href="#">Home </a>
							<a href="#">Blog</a>
					</span>
					</p>

					<p class="link-nav" >
					<a href="blogwrite.php" >
						<button class="box btn btn-primary">
							Write A Post
					</button>
					</a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	



	<!-- Start post-content Area -->
	<section class="post-content-area">
		<div class="container mt-4">
		<h2>Posts</h2>
			<div class="row">
			
			

				<?php 
				$result_count = mysqli_query(
					$link,
					"SELECT COUNT(*) As total_records FROM `blog_post`"
					);
					$total_records = mysqli_fetch_array($result_count);
					$total_records = $total_records['total_records'];
					$total_no_of_pages = ceil($total_records / $total_records_per_page);
					$second_last = $total_no_of_pages - 1; // total pages minus 1

					$result = mysqli_query(
						$link,
						"SELECT * FROM `blog_post` LIMIT $offset, $total_records_per_page"
						);
					while($row = mysqli_fetch_array($result)){
					
				
				?>
					<div class="col-lg-6 posts-list">
					<div class="single-post row">
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								<li><a href="#">Blood</a></li>
								
							</ul>
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#"><?php echo $row['first_name'] ?></a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $row['createdAt'] ?></a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#"><?php echo $row['district'] ?></a> <span class="lnr lnr-eye"></span></p>
									</div>
						</div>
						<div class="col-lg-9 col-md-9 ">
							<div class="feature-img">
								<img class="images-fluid" src=<?php echo "uploads/".$row['image'] ?> alt="">
							</div>
							<a class="posts-title" href=<?php echo "blogpost.php?id=".$row['id_post'] ?> ><h3><?php echo $row['title'] ?></h3></a>
							<p class="excert">
									<?php echo $row['description'] ?>
							</p>
							<a  href=<?php echo "blogpost.php?id=".$row['id_post'] ?> class="primary-btn" data-text="View More">
								<span>V</span>
								<span>i</span>
								<span>e</span>
								<span>w</span>
								<span> </span>
								<span>M</span>
								<span>o</span>
								<span>r</span>
								<span>e</span>
							</a>
						</div>
					</div>
					</div>
					<?php 
					
						   }
				   mysqli_close($link);
				   ?>
	
				
				
			
			</div>
			<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Previous">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-left"></span>
									</span>
								</a>
							</li>
							<li class="page-item"><a href="#" class="page-link">01</a></li>
							<li class="page-item active"><a href="#" class="page-link">02</a></li>
							<li class="page-item"><a href="#" class="page-link">03</a></li>
							<li class="page-item"><a href="#" class="page-link">04</a></li>
							<li class="page-item"><a href="#" class="page-link">09</a></li>
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Next">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-right"></span>
									</span>
								</a>
							</li>
						</ul>
					</nav>
		</div>
	</section>
	<!-- End post-content Area -->


	
	<!-- Start Job History Area Area -->
	<section class="job-area section-gap-top section-gap-bottom-90">
		<div class="container">
			<div class="row d-flex">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Notes</h2>
						
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>Be Vigilant</h4>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text=" Present">
								
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s">
							Ensure you doctor uses new needles and equipments during the donation process. Stay vigilant. Donate blood only at certified hospitals and blood banks
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>Blood Donation</h4>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text=" Present">
								
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
				Donating blood is harmless and a good practice that should be done every 6 months.
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Job Historyt Area Area -->




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