
<?php   
	require_once('inc/config.php');
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["email"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
     //   mysqli_stmt_close($stmt);
    }
	//$filename = $_FILES['photo']['name'];
		//if(!empty($filename)){
			//move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		//}
	
		    	//$orgg_id = $_POST['orgg_id'];
						    	//$orgc_id = $_POST['orgc_id'];


		    	//$org_name = $_POST['org_name'];
			    $name = $_POST['name'];
				$email = $_POST['email'];
                $phone_no = $_POST['phone_no'];
								$address = $_POST['address'];
								//$location = $_POST['location'];

				//$message = $_POST['message'];
				
			    //$country = $_POST['country'];
				//$country = $_POST['country'];
				//$country = $_POST['country'];




				
		    	//$course_price = $_POST['course_price'];


    // Validate password
  
    // Validate confirm password
    
    
    // Check input errors before inserting in database
    if(empty($firstname_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO `enquiry_tbl` (`name`,`email`,`phone_no`, `address`) VALUES ('".$_POST['name']."',  '".$_POST['email']."', '".$_POST['phone_no']."', '".$_POST['address']."')";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;

            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: thank.html");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
	


?>


<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Deep Sheetal || Enquiry</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/chosen.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-pro.css">
    <link rel="stylesheet" href="assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="assets/css/vendor/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>



<body>



    <!-- Back to top start -->

    <a href="#" data-target="html" class="back-to-target back-to-top">
        <span class="back-to-top-text">back top</span>
        <span class="back-to-top-wrapper"><span class="back-to-top-inner" style="width: 4.05654%;"></span></span>
    </a>

    <!-- Back to top end -->

    <!-- Offcanvas area start -->
 
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>
    <!-- Offcanvas area start -->

    <!-- Header area start -->
    <?php include('header2.php'); ?>
    <!-- Header area end -->

    <!-- Body main wrapper start -->
    <main>
        <!-- Breadcrumb area start -->
        <section class="bd-breadcrumb-area p-relative fix">
            <!-- breadcrumb background image -->
            <div class="bd-breadcrumb-bg" data-background="assets/images/breadcrumb/enquiry-banner.jpg"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb">
                                <div class="bd-breadcrumb-content text-center">
                                    <h1 class="bd-breadcrumb-title">Enquiry Now</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="index.php"><i class="icon-home"></i>Home</a></span>
                                        <span>Enquiry</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area end -->

      

        <!-- Contact form area start -->
        <section class="bd-contact-form section-space">
            <div class="container">
                <div class="row gy-24 justify-content-center">
                   
                    <div class="col-xxl-9 col-xl-9 col-lg-9">
                        <div class=" box-shadow-enquiry">
						
						<form  method="post" action="#" enctype="multipart/form-data">
                            <div class="contact-from">
                                <div class="row g-5 align-items-center justify-content-center">
                                    <div class="col-lg-12 text-center">
<h4>Enquire Now</h4>
<p>Fill in the following details and we will get back to you shortly.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-input-box has-icon icon-right">
                                            <div class="form-input">
                                                <input name="name" type="text" placeholder="First Name">
                                                <div class=""><span><i class="fa-solid fa-user"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="form-input-box has-icon icon-right">
                                            <div class="form-input">
                                                <input name="email" type="text" placeholder="Your Email">
                                                <div class=""><span><i class="fa-solid fa-envelope"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-input-box has-icon icon-right">
                                            <div class="form-input">
                                                <input name="phone_no" type="text" placeholder="Your Phone">
                                                <div class=""><span><i class="fa-solid fa-phone"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-12 text-center">
                                        <div class="form-input-box has-icon icon-right">
                                            <div class="form-input">
                                                <textarea name="address" placeholder="Your Address"></textarea>
                                                <div class=""><span><i class="fa-solid fa-map-marker-alt"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button class="bd-btn btn-style btn-hover-x btn-black " type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
							
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact form area end -->

      

    </main>
    <!-- Body main wrapper end -->

 <!-- Footer area start -->
 <?php include('footer.php'); ?>
<!-- Footer area end -->


    <!-- JS here -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/meanmenu.min.js"></script>
    <script src="assets/js/plugins/swiper.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/vendor/magnific-popup.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/purecounter.js"></script>
    <script src="assets/js/plugins/nouislider.min.js"></script>
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <script src="assets/js/plugins/ScrollTrigger.min.js"></script>
    <script src="assets/js/plugins/SplitText.min.js"></script>
    <script src="assets/js/plugins/gsap.min.js"></script>
    <script src="assets/js/plugins/bd-cursor.js"></script>
    <script src="assets/js/plugins/jarallax.min.js"></script>
    <script src="assets/js/plugins/dropzone.min.js"></script>
    <script src="assets/js/plugins/tinymce.min.js"></script>
    <script src="assets/js/vendor/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>