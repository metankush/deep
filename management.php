<?php

	require_once('inc/config.php');


 ?>

<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Deep Sheetal || Management</title>
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
            <div class="bd-breadcrumb-bg" data-background="assets/images/breadcrumb/team-banner.jpg"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb">
                                <div class="bd-breadcrumb-content text-center">
                                    <h1 class="bd-breadcrumb-title">Management Team</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="index.php"><i class="icon-home"></i>Home</a></span>
                                        <span>Team</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area end -->

        <!-- Agent area Start -->
        <section class="bd-agent-area section-space">
            <div class="container">
               
                <div class="agent-tab-item">
              
                       
                                <div class="row ">
								
								
								
								<?php
					
                    $sql = "SELECT * FROM `team_tbl`";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
								
								
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="agent-item style-one wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                   
                                                        <figure><img src="admin/img/<?php echo $row['photo'];  ?>" alt="agent thumb not found"></figure>
                                                   
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="review">
                                                        <h3 class="title"><?php echo $row['name'];  ?></h3>
                                                       
                                                    </div>
                                           
                                                </div>
                                                <div class="contact-list-wrapper">
                                                    <ul>
                                               
                                                  
                                                        <li class="contact-list-item">
                                                            <span class="icon"><i class="fa-regular fa-phone-volume"></i></span>
                                                            <span class="title">
                                                <a href="tel:+91 <?php echo $row['mob_no'];  ?>">+91 <?php echo $row['mob_no'];  ?></a>
                                             </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
<?php }?>                                    
                                    
                                    

                                    
                                </div>
                         
                      
                
                
                </div>
            </div>
        </section>
        <!-- Agent area end -->

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