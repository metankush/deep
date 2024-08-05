
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
								$subject = $_POST['subject'];
								//$location = $_POST['location'];

				$message = $_POST['message'];
				
			    //$country = $_POST['country'];
				//$country = $_POST['country'];
				//$country = $_POST['country'];




				
		    	//$course_price = $_POST['course_price'];


    // Validate password
  
    // Validate confirm password
    
    
    // Check input errors before inserting in database
    if(empty($firstname_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO `contact_us_enq_tbl` (`name`,`email`,`phone_no`, `subject`,  `message`) VALUES ('".$_POST['name']."',  '".$_POST['email']."', '".$_POST['phone_no']."', '".$_POST['subject']."',   '".$_POST['message']."')";
         
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
    <title>Deep Sheetal || Contact</title>
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
            <div class="bd-breadcrumb-bg" data-background="assets/images/breadcrumb/contact-banner.jpg"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb">
                                <div class="bd-breadcrumb-content text-center">
                                    <h1 class="bd-breadcrumb-title">Contact</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="index.php"><i class="icon-home"></i>Home</a></span>
                                        <span>Contact</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area end -->

        <!-- Contact address area start -->
        <section class="bd-contact address section-space">
            <div class="container">
                <div class="row gy-30 about-wrap">
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="contact-box">
                            <div class="contact-icon mb-30"><i class="fa-light fa-phone-volume"></i></div>
                            <h5 class="contact-title mb-15">Call Us On</h5>
                            <div class="contact-content">
                                <a href="tel:+91 7488041647/48">+91 7488041647/48</a>
                                <a href="tel:+91 6123563836"> +91 6123563836</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="contact-box">
                            <div class="contact-icon mb-30"><i class="fa-sharp fa-light fa-location-dot"></i></div>
                            <h5 class="contact-title mb-15">Our Location</h5>
                            <div class="contact-content">
                                <a target="_blank" href="#">03rd Floor, S. S. Furniture Mall, Besides IOCL Petrol Pump, Near Ganesh Timber, Danapur, Patna BR 801503 IN.</a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="contact-box">
                            <div class="contact-icon mb-30"><i class="fa-sharp fa-light fa-envelope"></i></div>
                            <h5 class="contact-title mb-15">Email Us</h5>
                            <div class="contact-content">
                                <a href="mailto:deepsheetalengineers@gmail.com">deepsheetalengineers@gmail.com</a>
                                <a href="mailto:info@deepsheetal.com">info@deepsheetal.com</a>
                               
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- Contact address area end -->

        <!-- Contact form area start -->
        <section class="bd-contact-form section-space-bottom">
            <div class="container">
                <div class="row gy-24 justify-content-between about-wrap">
                    <div class="col-xxl-5 col-xl-5 col-lg-6">
                        <div class="section-title-wrapper anim-wrapper animation-style-3 mb-30">
                            <span class="section-subtitle uppercase mb-20"> <span><svg width="17" height="15"
                              viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M16.5859 7.23047C16.668 7.3125 16.7227 7.42188 16.75 7.55859C16.7227 7.66797 16.6953 7.75 16.6133 7.83203L16.0391 8.48828C15.957 8.57031 15.8477 8.625 15.7109 8.625C15.6016 8.625 15.4922 8.59766 15.4102 8.51562L15 8.13281V13.875C15 14.3672 14.5898 14.75 14.125 14.75H3.625C3.13281 14.75 2.75 14.3672 2.75 13.875V8.13281L2.3125 8.51562C2.23047 8.59766 2.12109 8.625 2.01172 8.625C1.875 8.625 1.76562 8.57031 1.68359 8.48828L1.10938 7.83203C1.02734 7.77734 0.972656 7.66797 0.972656 7.55859C0.972656 7.42188 1.05469 7.3125 1.13672 7.23047L8.13672 1.05078C8.30078 0.886719 8.62891 0.75 8.875 0.75C9.09375 0.75 9.42188 0.886719 9.58594 1.05078L12.375 3.48438V2.0625C12.375 1.84375 12.5664 1.625 12.8125 1.625H14.5625C14.7812 1.625 15 1.84375 15 2.0625V5.80859L16.5859 7.23047ZM10.625 8.92578V6.60156C10.5977 6.27344 10.3516 6.02734 10.0234 6H7.69922C7.37109 6.02734 7.125 6.27344 7.125 6.60156V8.92578C7.125 9.25391 7.37109 9.5 7.69922 9.5H10.0234C10.3516 9.5 10.5977 9.25391 10.625 8.92578Z"
                                 fill="#ED6E5A" />
                           </svg>
                        </span>Contact Us</span>
                            <h2 class="section-title title-animation mb-20">Send us a massage!</h2>
                            <div class="section-divider mb-25"></div>
                            <div class="contact-social">
                                <span class="contact-social-title d-block mb-20">Follow Us here:</span>
                                <div class="contact-info-social style-two">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-threads"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="contact-wrapper style-one">
						<form  method="post" action="#" enctype="multipart/form-data">
                            <div class="contact-from">
                                <div class="row g-5 align-items-center justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-input-box has-icon icon-right">
                                            <div class="form-input">
                                                <input name="name" type="text" placeholder="Your Name">
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
                                    <div class="col-lg-6">
                                        <div class="form-input-box has-icon icon-right">
                                            <div class="form-input">
                                                <input name="phone_no" type="text" placeholder="Your Phone">
                                                <div class=""><span><i class="fa-solid fa-phone"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-input-box has-icon icon-right">
                                            <div class="form-input">
                                                <input name="subject" type="text" placeholder="Subject">
                                                <div class=""><span><i class="fa-solid fa-book"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="form-input-box has-icon icon-right">
                                            <div class="form-input">
                                                <textarea name="message" placeholder="Your Message"></textarea>
                                                <div class=""><span><i class="fa-solid fa-pen"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button class="bd-btn btn-style btn-hover-x btn-black w-100" type="submit">Send
                                            Massage</button>
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

        <!-- Google map area start -->
        <div class="bd-map-area pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.6766181185426!2d85.04812747445668!3d25.615659914626125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed566610eae231%3A0xb27fccb8b05513f0!2sDeep%20Sheetal%20Engineers%20Private%20Limited!5e0!3m2!1sen!2sin!4v1722056459600!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google map area end-->

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