<?php

	require_once('inc/config.php');


 ?>

<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Deep Sheetal || All Projects</title>
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
            <div class="bd-breadcrumb-bg" data-background="assets/images/breadcrumb/projects-banner.jpg"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb">
                                <div class="bd-breadcrumb-content text-center">
                                    <h1 class="bd-breadcrumb-title">All Projects</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="index.php"><i class="icon-home"></i>Home</a></span>
                                        <span>Projects</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area end -->

        <!-- Property area start -->
        <section class="bd-property-area section-space">
            <div class="container">
                <div class="swiper common-carousel-active wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="swiper-wrapper">
                <div class="row ">
               
			   
			   
			   
			   
			   
			   
			   
			   			
								<?php
											  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT r.category_id, r.subcategory_id, r.project_name, r.product_description, r.price, r.address, r.google_map, r.photo, r.description,  r.id, r.status, e.project_cate_name, m.subcategory_name
       FROM project_category_tbl e
       JOIN project_tbl r ON e.id=r.category_id
	   JOIN project_subcategory_tbl m ON m.id=r.subcategory_id WHERE r.`category_id` ='".$id."'";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                                <div class="col-lg-4">
                                    <div class="featured-item style-one mb-4">
                                        <div class="thumb-wrapper">
                                            <div class="badge-wrap">
                                                
                                             
                                            </div>
                                            <div class="thumb">
                                                <a href="projects-details.php?action=views&id=<?php echo $row['id']; ?>">
                                                    <figure>
                                                        <img src="admin/img/<?php echo $row['photo'];  ?>" alt="Image">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content">
                                        <div class="price">Status :-
                                    <span><?php echo $row['price']; ?></span>
                                </div>
                                            <h3 class="title"><a href="projects-details.php?action=views&id=<?php echo $row['id']; ?>"><?php echo $row['project_name'];  ?></a></h3>
                                            <span class="info"><?php echo $row['address'];  ?></span>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <?php }?>
                            </div>
                        </div>
                  
                </div>
            </div>
        </section>
        <!-- Property area end -->
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