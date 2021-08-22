
	<?php 
	require_once "config.php";
	
	?>

		<!-- Start Header Area -->
		<header id="header" class="">
		<div class="container main-menu">
			<div class="row align-items-center d-flex">
				<div id="logo">
				<a href="index.html"><img src="images/logo.png" alt="ssa" title="" width="100px" /></a>
				</div>
				<nav id="nav-menu-container" class="ml-auto">
					<ul class="nav-menu ">
					<?php
					if($_SESSION['callfrom']==="home") {
                    echo '		<li class=""><a class= "active" href="/bloodbank/index.php">Home</a></li>';
                  } else {
                     echo '		<li class=""><a  href="/bloodbank/index.php">Home</a></li>';
                  }
?>
			
						
					<?php
					if($_SESSION['callfrom']==="blog") {
                    echo '	<li ><a class="active" href="/bloodbank/blog.php">Blog</a>';
                  } else {
                     echo '	<li ><a  href="/bloodbank/blog.php">Blog</a>';
                  }
?>

<?php
					if($_SESSION['callfrom']==="login") {
                    echo '<li><a class="active" href="/bloodbank/reg_login.php">Login/Registration</a></li>';
                  } else {
                     echo '<li><a href="/bloodbank/reg_login.php">Login/Registration</a></li>';
                  }
?>


					
						
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- End Header Area -->