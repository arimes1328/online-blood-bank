<?php
// Include config file
require_once "config.php";
 session_start();
 $_SESSION['callfrom'] ="blog";
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["id-1"]) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: donor/index");
    exit;
  }
  if(isset($_SESSION["id-2"]) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: requester/index.php");
    exit;
  }
  if(isset($_SESSION["id-4"]) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: organization/index");
    exit;
  }
  if(isset($_SESSION["id-5"]) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: hospital/index");
    exit;
  }
  if(isset($_SESSION["id-3"]) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: bank_admin/index");
    exit;
  }
   
  // Include config file
  require_once "config.php";
   
  // Define variables and initialize with empty values
  $nic = $password = $name = $user_id ="";
  $first_name= $last_name = $district = $dob = $bloodgroup = $gender = $district ="";
  $nic_err = $password_err = "";
  $image="";

 

  if(isset($_SESSION["id-1"])){
    $user_id =$_SESSION["id-1"];
  }
  
  else   if(isset($_SESSION["id-2"])){
    $user_id =$_SESSION["id-2"];
  }
  else   if(isset($_SESSION["id-3"])){
    $user_id =$_SESSION["id-3"];
  }
  else   if(isset($_SESSION["id-4"])){
    $user_id =$_SESSION["id-4"];
  }
  else   if(isset($_SESSION["id-5"])){
    $user_id =$_SESSION["id-5"];
  }
    else {
    header("Location: reg_login.php");
  exit();
    }

    if(isset($_SESSION["id-1"])){
        $user_id =$_SESSION["id-1"];
            // Prepare a select statement
    $sql2 = "SELECT first_name, last_name,  dob, bloodgroup, gender,  district  FROM donor WHERE nic = '$user_id' ";
    
    $result2 = mysqli_query($link, $sql2);
    $count= mysqli_num_rows($result2);


$rows=mysqli_fetch_assoc($result2);
    
$first_name= $rows["first_name"];
$last_name= $rows["last_name"];
$dob= $rows["dob"];
$bloodgroup= $rows["bloodgroup"];
$gender= $rows["gender"];
$district= $rows["district"];





                
         

      }
      
      else   if(isset($_SESSION["id-2"])){
        $user_id =$_SESSION["id-2"];
        // Prepare a select statement
$sql2 = "SELECT firstName, lastName,  DateOfBirth ,  Gender,  District   FROM requestor WHERE nic = '$user_id' ";

$result2 = mysqli_query($link, $sql2);
$count= mysqli_num_rows($result2);


$rows=mysqli_fetch_assoc($result2);
$first_name= $rows["firstName"];
$last_name= $rows["lastName"];
$dob= $rows["DateOfBirth"];
$bloodgroup= '';
$gender= $rows["Gender"];
$district= $rows["District"];


      }
      else   if(isset($_SESSION["id-3"])){
       
        $user_id =$_SESSION["id-3"];
        // Prepare a select statement
$sql2 = "SELECT UserName, `Name`,  `address`, chief,  District   FROM normal_hospital WHERE UserName = '$user_id' ";

$result2 = mysqli_query($link, $sql2);
$count= mysqli_num_rows($result2);


$rows=mysqli_fetch_assoc($result2);
$first_name= $rows["UserName"];
$last_name= $rows["Name"];
$dob= $rows["address"];
$bloodgroup= $rows["chief"];
$gender= "Hospital";
$district= $rows["District"];


            

      }
      else   if(isset($_SESSION["id-4"])){
        $user_id =$_SESSION["id-4"];
        // Prepare a select statement
$sql2 = "SELECT UserName, OrganizationName,  purpose, President,  District   FROM organization WHERE UserName = '$user_id' ";

$result2 = mysqli_query($link, $sql2);
$count= mysqli_num_rows($result2);



$rows=mysqli_fetch_assoc($result2);
$first_name= $rows["UserName"];
$last_name= $rows["OrganizationName"];
$dob= $rows["purpose"];
$bloodgroup= $rows["President"];
$gender= "Organization";
$district= $rows["District"];



      }
      else   if(isset($_SESSION["id-5"])){
        $user_id =$_SESSION["id-5"];
        // Prepare a select statement
$sql2 = "SELECT FirstName, LastName,  BloodBankID  FROM blood_bank_admin WHERE NIC = '$user_id' ";

$result2 = mysqli_query($link, $sql2);
$count= mysqli_num_rows($result2);



$rows=mysqli_fetch_assoc($result2);
$first_name= $rows["FirstName"];
$last_name= $rows["LastName"];
$dob= "";
$bloodgroup= "";
$gender= "Admin";
$district= "";

      }
        else {
      
        }
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
		
    $description = $_POST["description"];
    $title = $_POST["title"];
    
    
    $description=str_replace(array("\\r\\n","\r\n","\\r","\\n","\r","\n"),"<br/>",$description);
    $description=htmlspecialchars_decode($description);
	$description = mysqli_real_escape_string($link, $_POST['description']);
		

//Validate Title
if(empty(trim($_POST["title"]))){
    $nic_err = "Please enter a Title.";

}else if (strlen($_POST["title"]) > 50 || strlen($_POST["title"]) < 1) {
        $nic_err = "The title is the wrong length.";
            
}
    // Validate description
    if(empty(trim($description))){
        $nic_err = "Please enter an Description.";
    
    }else if (strlen($description) > 1550 || strlen($description) < 1) {
            $nic_err = "The description is the wrong length.";
                
    }

   
 


        $uploadOk = true; 

        $folder_dir = "uploads/";
    
        $base = basename($_FILES['image']['name']); // mydocs/images/myprofile.jpg -> myprofile.jpg
    
        $imageFileType = pathinfo($base, PATHINFO_EXTENSION); // .png .jpg
    
        $file = "";
    
        if(file_exists($_FILES['image']['tmp_name'])) {
            if($imageFileType == 'jpg' || $imageFileType == 'png'|| $imageFileType == 'PNG') {
                if($_FILES['image']['size'] < 5000000) {
                    
                    $file = uniqid() . "." . $imageFileType;  
    
                    $filename = $folder_dir . $file;  
    
                    move_uploaded_file($_FILES['image']['tmp_name'], $filename);

                    $image=$file;
                } else {
                    $_SESSION['uploadError'] = "Wrong Size. Max Size Allowed: 5MB";
                    $uploadOk = false;
                }
            } else {
                $_SESSION['uploadError'] = "Wrong Format. Only jpg or png allowed.";
                $uploadOk = false;
            }
        }
    
    
 
    
    // Check input errors before inserting in database
    if(empty($nic_err)){
      
        // Prepare an insert statement
        $sql = "INSERT INTO blog_post (id_post, id_user,first_name, last_name, title, description , image,  district, dob, bloodgroup , gender) VALUES  ('', '$user_id', '$first_name', '$last_name','$title', '$description', '$image',  '$district', '$dob', '$bloodgroup', '$gender')";
 

            // Set parameters
            // $param_username = $nic;
            // $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            

            if(mysqli_query($link,$sql)){
               
                header("location: blog.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            // mysqli_stmt_close($sql);
      
    }
    else {
        echo $nic_err;
       
    }
    
    // Close connection
    mysqli_close($link);
}

 require('header.php');

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



	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Write A blog post
					</h1>
					<p class="link-nav">
						<span class="box">
							<a href="#">Home </a>
							<a href="#">Blog</a>
							<a href="#">Write Post</a>
						</span>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
    <?php if(isset($_SESSION['uploadError'])) { ?>
                    <p><?php echo $_SESSION['uploadError']; ?></p>
                  <?php unset($_SESSION['uploadError']); } ?>
	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area section-half">
		<div class="container">
    <?php 
     if(isset($_SESSION["id-1"])){
      $user_id =$_SESSION["id-1"];
          // Prepare a select statement
  $sql2 = "SELECT first_name, last_name,  dob, bloodgroup, gender,  district  FROM donor WHERE nic = '$user_id' ";
  
  $result2 = mysqli_query($link, $sql2);
  $count= mysqli_num_rows($result2);


$rows=mysqli_fetch_assoc($result2);
  
$first_name= $rows["first_name"];
$last_name= $rows["last_name"];
$dob= $rows["dob"];
$bloodgroup= $rows["bloodgroup"];
$gender= $rows["gender"];
$district= $rows["district"];


echo "Hello, $first_name  you are not allowed to write posts on the blog because you are a donor, only organisations, hospitals and admins can post";
    }
    
    else   if(isset($_SESSION["id-2"])){
      $user_id =$_SESSION["id-2"];
      // Prepare a select statement
$sql2 = "SELECT firstName, lastName,  DateOfBirth ,  Gender,  District   FROM requestor WHERE nic = '$user_id' ";

$result2 = mysqli_query($link, $sql2);
$count= mysqli_num_rows($result2);


$rows=mysqli_fetch_assoc($result2);
$first_name= $rows["firstName"];
$last_name= $rows["lastName"];
$dob= $rows["DateOfBirth"];
$bloodgroup= '';
$gender= $rows["Gender"];
$district= $rows["District"];


echo "Hello,  $first_name  you are not allowed to write posts on the blog because you are a requestor, only organisations, hospitals and admins can post";


    }else { ?>
        <!-- form start -->
        <?php echo $first_name; ?>
    <form class="form-horizontal" action="blogwrite.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
              <div class="form-group">
                  <div class="col-sm-12">
                   <input class="form-control" name="title" placeholder="Enter Post Title" name="message" maxlength="50" required></input>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                   <textarea class="form-control" name="description" placeholder="Enter Post Body" name="message" maxlength="800" required></textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Post</button>
                <div class="pull-right margin-r-5">
                  <label class="btn btn-warning">Image
                    <input type="file" name="image" id="ProfileImageBtn" required>
                  </label>
                  
                </div>
               
                <div>
                  <?php if(isset($_SESSION['uploadError'])) { ?>
                    <p><?php echo $_SESSION['uploadError']; ?></p>
                  <?php unset($_SESSION['uploadError']); } ?>
                </div>
              </div>
              <!-- /.box-footer -->
            </form>
            <?php } ?>
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

