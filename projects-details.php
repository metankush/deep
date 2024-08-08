
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
    <title>Deep Sheetal || Projects Details</title>
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
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
</head>



<body>



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
 <?php
						  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT r.category_id, r.subcategory_id, r.project_name, r.product_description, r.price, r.address, r.google_map, r.photo, r.description,  r.id, r.status, e.project_cate_name, m.subcategory_name
       FROM project_category_tbl e
       JOIN project_tbl r ON e.id=r.category_id
	   JOIN project_subcategory_tbl m ON m.id=r.subcategory_id	  WHERE r.id='".$id."'";
                     $result = $link->query($sql);
					 $row = $result->fetch_assoc()
                      ?>
        <!-- property slider area start -->
        <div class="bd-property-details-area fix pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="property-details-wrapper">
                            <div class="swiper property-details-active">
                                <div class="swiper-wrapper">
								
								
								
								
									<?php
											  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT * FROM `project_slider_tbl` WHERE `project_id` ='".$id."'";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
								
                                    <div class="swiper-slide">
                                        <div class=" property-details-item">
                                            <div class="property-details-item-thumb">
                                                <img src="admin/img/<?php echo $row['photo']; ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                    
                                    
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="property-details-navigation d-none d-sm-block">
                                    <button class="property-details-button-prev circle-btn is-bg-white"><i
                                 class="fa-regular fa-arrow-left-long"></i></button>
                                    <button class="property-details-button-next circle-btn is-bg-white"><i
                                 class="fa-regular fa-arrow-right-long"></i></button>
                                </div>
                                <!-- If we need pagination -->
                                <div class="pagination-wrapper d-block d-sm-none">
                                    <div class="bd-swiper-dot text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- property slider area end -->
 <?php
						  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT r.category_id, r.subcategory_id, r.project_name, r.product_description, r.price, r.address, r.google_map, r.photo, r.description,  r.id, r.status, e.project_cate_name, m.subcategory_name
       FROM project_category_tbl e
       JOIN project_tbl r ON e.id=r.category_id
	   JOIN project_subcategory_tbl m ON m.id=r.subcategory_id	  WHERE r.id='".$id."'";
                     $result = $link->query($sql);
					 $row = $result->fetch_assoc()
                      ?>
        <!-- property details content start -->
        <section class="bd-property-details-area section-space-medium">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-8 col-lg-8">
                        <div class="property-details-content-inner">
                           
                            <h2 class="property-details-title"><?php echo $row['project_name']; ?></h2>
                            <h5 class="mb-4">Price :- ₹<?php echo $row['price']; ?></h5>
                            <span class="property-details-location">
                        <i class="fa-regular fa-location-dot"></i>
                       <?php echo $row['address']; ?>
                     </span>
                            <h4 class="property-details-title-two">Description</h4>
                            <div class="property-details-descrip-text">
                               <?php echo $row['description']; ?>
                            </div>
                            <h4 class="property-details-title-two">Property Details</h4>
                            <div class="property-details-info-list wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                              <?php echo $row['product_description']; ?>
                            </div>
                            <h4 class="property-details-title-two">Property Features</h4>
                            <div class="property-details-feature wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <ul>
								
									<?php
											  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT * FROM `property_features_tbl` WHERE `project_id` ='".$id."'";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
								
                                    <li>
                                        <div class="property-details-feature-list-item">
                                            <span class="icon">
                                   <img src="admin/img/<?php echo $row['photo']; ?>"/>
                                 </span>
                                            <div>
                                                <h6><?php echo $row['features_name']; ?></h6>
                                              
                                            </div>
                                        </div>
                                    </li>
                                    
                                   <?php }?> 
                                    
                                    
                                    
                                    
                                    
                                </ul>
                            </div>
                            <h4 class="property-details-title-two"> Our Property Gallery</h4>
                            <div class="property-details-gallery wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
							
							<div class="row">
        <div class="col-xxl-12">
            <div class="swiper common-carousel-active wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                <div class="swiper-wrapper">
				
				
				<?php
											  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT * FROM `project_gallery_tbl` WHERE `project_id` ='".$id."'";
	   
                    $query = $link->query($sql);
                    while($rows = $query->fetch_assoc()){
                      ?>
                    <div class="swiper-slide">
                         <figure class="image-box"><a href="admin/img/<?php echo $rows['photo']; ?>" class="lightbox-image" data-fancybox="gallery"><img src="admin/img/<?php echo $rows['photo']; ?>" alt></a></figure>
                    </div>
					
					<?php }?>
				    
                    
                </div>
            </div>
        </div>
    </div>
						 <?php
						  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT r.category_id, r.subcategory_id, r.project_name, r.product_description, r.price, r.address, r.google_map, r.photo, r.video, r.description,  r.id, r.status, e.project_cate_name, m.subcategory_name
       FROM project_category_tbl e
       JOIN project_tbl r ON e.id=r.category_id
	   JOIN project_subcategory_tbl m ON m.id=r.subcategory_id	  WHERE r.id='".$id."'";
                     $result = $link->query($sql);
					 $row = $result->fetch_assoc()
                      ?>	
                                
                            </div>
                            <h4 class="property-details-title-two"> Location</h4>
                            <div class="property-details-google-map wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <iframe src="<?php echo $row['google_map']; ?>"></iframe>
                            </div>
                            <h4 class="property-details-title-two"> Certificate </h4>
                            <div class="property-details-google-map wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="table-responsive certificate-table">
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                      
                          <th scope="col">Document</th>
                          
                          <th scope="col">click on view Document</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  	<?php
											  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT * FROM `project_certificate_tbl` WHERE `project_id` ='".$id."'";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                        <tr>
                         
                          <td><?php echo $row['certificate_name']; ?></td>
                          <td><a target="_blank" href="admin/img/<?php echo $row['photo']; ?>"> <span class="img-click-here"><img src="assets/images/click-here.gif" alt=""></span> </a></td>
                        </tr>
                   <?php }?>
                    
                      </tbody>
                    </table>
                </div>
                            </div>
                          <?php
						  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT r.category_id, r.subcategory_id, r.project_name, r.product_description, r.price, r.address, r.google_map, r.photo, r.video, r.description,  r.id, r.status, e.project_cate_name, m.subcategory_name
       FROM project_category_tbl e
       JOIN project_tbl r ON e.id=r.category_id
	   JOIN project_subcategory_tbl m ON m.id=r.subcategory_id	  WHERE r.id='".$id."'";
                     $result = $link->query($sql);
					 $row = $result->fetch_assoc()
                      ?>	
                     
                         
                            <h4 class="property-details-title-two"> Apartment Video</h4>
                            <div class="property-details-video">
                                <div class="bd-video-area style-one position-relative">
                                  
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
											 <div class="">
											<video width="100%" src="admin/img/<?php echo $row['video']; ?>" autoplay loop muted></video>
											</div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="agent-sidebar-wrapper bd-sidebar-sticky">
                            <div class="agent-details-widget mb-35">
                                <h3 class="sidebar-widget-title">Contact</h3>
								<form  method="post" action="#" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <div class="input-box">
                                                <input type="email" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <input type="text" name="phone_no" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <textarea cols="30" name="address" rows="10" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="agent-details-btn">
                                            <button class="bd-btn btn-style btn-hover-x w-100 btn-black" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
								
								</form>
                            </div>
                           
                            <!-- latest post start -->
                            <div class="sidebar-widget mb-35">
                                <h3 class="sidebar-widget-title">Latest Posts</h3>
                                <div class="sidebar-widget-content">
                                    <div class="sidebar-blog-item-wrapper">
									
									
									
										<?php
											  $id = $row['subcategory_id'];

                    $sql = "SELECT r.category_id, r.subcategory_id, r.project_name, r.product_description, r.price, r.address, r.google_map, r.photo, r.description,  r.id, r.status, e.project_cate_name, m.subcategory_name
       FROM project_category_tbl e
       JOIN project_tbl r ON e.id=r.category_id
	   JOIN project_subcategory_tbl m ON m.id=r.subcategory_id WHERE r.`subcategory_id` ='".$id."' ORDER BY id DESC LIMIT 3";
	   
                    $query = $link->query($sql);
                    while($rowss = $query->fetch_assoc()){
                      ?>
									
									
									
									
                                        <div class="sidebar-blog-item">
                                            <div class="sidebar-blog-thumb">
                                                <a href="projects-details.php?action=views&id=<?php echo $rowss['id']; ?>">
                                                    <img src="admin/img/<?php echo $rowss['photo']; ?>" alt="image">
                                                </a>
                                            </div>
                                            <div class="sidebar-blog-content">
                                                <div class="sidebar-blog-meta">
                                                    
                                                </div>
                                                <h3 class="sidebar-blog-title">
                                                    <a href="projects-details.php?action=views&id=<?php echo $rowss['id']; ?>"><?php echo $rowss['project_name']; ?></a>
                                                </h3>
                                            </div>
                                        </div>
										<?php }?>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- latest post end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- property details content end -->

    </main>
    <!-- Body main wrapper end -->

    <!-- Footer area start -->
    <?php include('footer.php'); ?>
    <!-- Footer area end -->

    <!-- JS here -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
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