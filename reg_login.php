<?php
session_start();
$_SESSION['callfrom']="login";
?>
<?php


// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["id-1"]) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: donor/index");
  exit;
}
if(isset($_SESSION["id-2"]) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: requester/index.php");
  exit;
}
if(isset($_SESSION["id-4"]) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: organization/index");
  exit;
}
if(isset($_SESSION["id-5"]) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: hospital/index");
  exit;
}
if(isset($_SESSION["id-3"]) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: bank_admin/index");
  exit;
}
/* 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$nic = $password = $name= "";
$nic_err = $password_err = "";
 
// Processing form data when form is submitted

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_POST['donor'] || $_POST['requester'] || $_POST['admins']){

    // Check if NIC is empty
        if(empty(trim($_POST["nic"]))){
            $nic_err = "Please enter nic.";
        }else{
            $nic = trim($_POST["nic"]);
            $id_card= $nic;
        }

    }else{
    //Check if username is empty"
        if(empty(trim($_POST["username"]))){
            $nic_err = "Please enter username.";
        }else{
            $nic = trim($_POST["username"]);
        }

    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($nic_err) && empty($password_err)){

        // Prepare a select statement
        if($_POST['donor']) {
            $sql = "SELECT nic, first_name, password FROM donor WHERE nic = ?";
        }elseif ($_POST['requester']) {
            $sql = "SELECT NIC, FirstName, Password FROM requestor WHERE NIC = ?";
        }elseif($_POST['admins']){
            $sql = "SELECT BloodBankID, FirstName, Password FROM blood_bank_admin WHERE NIC = ?";
        }elseif($_POST['organization']) {
            $sql = "SELECT UserName, OrganizationName, Password FROM organization WHERE UserName = ?";
        }elseif($_POST['hospital']){
            $sql = "SELECT UserName, Name, Password FROM normal_hospital WHERE UserName = ?";
        }else{
            #
        }
       
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $nic;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $nic, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["nic"] = $nic;                           
                            
                            // Redirect user to welcome page
                            if($_POST['donor']){
                                $_SESSION["id-1"] = $id;
                                $_SESSION["id_card"] = $id_card;
                                header("location: donor/index");
                            }elseif ($_POST['requester']) {
                                $_SESSION["id-2"] = $id;
                                $_SESSION["id_card2"] = $id_card;
                                header("location: requester/index.php");
                            }elseif ($_POST['admins']) {
                                $_SESSION["id-3"] = $id;
                                $_SESSION["id_card3"] = $id_card;
                                header("location: bank_admin/index");
                            }elseif ($_POST['organization']) {
                                $_SESSION["id-4"] = $id;
                                header("location: organization/index");
                            }elseif ($_POST['hospital']) {
                                $_SESSION["id-5"] = $id; 
                                header("location: hospital/index");
                            }else{
                                #
                            }
                            
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $nic_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
*/
    $reg=$del=$out="";
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['key'])) {
        $del= "Succesfully Deleted !!!";
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['reg'])) {
        $reg= "Succesfully Created !!!";
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['logout'])) {
        $out= "Log Out Succesfully !!!";
    }

?>




<!DOCTYPE html>
<html>
<head>
	<title>Registration/Login</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
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
		require('header.php');
	?>
   
	<section class="banner-area relative">
	
	
</section>
            <!-- Start Contact Area -->
	<section class="banner-area relative">
    <div class="container">
			<div class=" d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-6">
	
					<div class="contact-title">
						<h2>Log In</h2>
						
					</div>
                    <div class="  ">
				<div class="col-lg-12 col-md-12 ">
					<div class="contact-box ">
					<a href="login/donor.php" class="primary-btn mt-10">
                       <div class="m-3 ">
                            <p class="title">Blood Donors</p>
                        </div>
                    </a>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="contact-box">
					<a href="login/requester.php" class="primary-btn mt-10">
                   <div class="m-3 ">
                        <p class="title">Blood Requesters</p>
                    </div>
                    </a>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					
					<a href="login/hospital.php" class="primary-btn mt-10">
                   <div class="m-3 ">
                        <p class="title">Hospital</p>
                    </div>
                    </a>
					
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="contact-box ">
					<a href="login/organization.php" class="primary-btn mt-10">
                   <div class="m-3 ">
                        <p class="title">Organizations</p>
                    </div>
                    </a>
                   
					</div>
				</div>
                <div class="col-lg-12 col-md-12">
					<div class="contact-box ">
					<a href="login/admin.php" class="primary-btn mt-10">
                   <div class="m-3 ">
                        <p class="title">Admins</p>
                    </div>
                    </a>
                   
					</div>
				</div>
                <div class="col-lg-12 col-md-12">
					<div class="contact-box ">
					<a href="login/superadmin.php" class="primary-btn mt-10">
                   <div class="m-3 ">
                        <p class="title">Super Admin</p>
                    </div>
                    </a>
                   
					</div>
				</div>
               
			</div>
				</div>
                <div class="about-content col-lg-6">
               
            <div class="contact-title">
						<h2>New here? Sign Up!</h2>
						
					</div>
                    <div class=" mt-10 ">
				<div class="col-lg-12 col-md-12 ">
					<div class="contact-box ">
					<a href="donor/register.php" class="primary-btn mt-10">
                       <div class="m-3 ">
                            <p class="title">Blood Donors</p>
                        </div>
                    </a>
					</div>
				</div>
                <div class="col-lg-12 col-md-12 ">
					<div class="contact-box ">
					<a href="requester/signup.php" class="primary-btn mt-10">
                       <div class="m-3 ">
                            <p class="title">Blood  Requesters</p>
                        </div>
                    </a>
					</div>
				</div>
                <div class="col-lg-12 col-md-12 ">
					<div class="contact-box ">
					<a href="hospital/signup.php" class="primary-btn mt-10">
                       <div class="m-3 ">
                            <p class="title">Hospitals</p>
                        </div>
                    </a>
					</div>
				</div>
                <div class="col-lg-12 col-md-12 ">
					<div class="contact-box ">
					<a href="organization/signup.php" class="primary-btn mt-10">
                       <div class="m-3 ">
                            <p class="title">Organizations</p>
                        </div>
                    </a>
					</div>
				</div>
                   
                
            </div>
        </div>

                </div>
			</div>

            <?php
        echo '<p style="color:red; text-align:center;">'.$del.'</p>';
        echo '<p style="color:red; text-align:center;">'.$out.'</p>';
        echo '<p style="color:green; text-align:center;">'.$reg.'</p>';
        ?>
			

		</div>
	</section>
	<!-- End Contact Area -->



		
		

		

		</div>




    <?php
        require_once "footer.php";
    ?>


</body>

</html>