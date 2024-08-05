
<?php

	require_once('inc/config.php');


 ?>


<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Deep Sheetal || Media</title>
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
            <div class="bd-breadcrumb-bg" data-background="assets/images/breadcrumb/gallery-banner.jpg"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb">
                                <div class="bd-breadcrumb-content text-center">
                                    <h1 class="bd-breadcrumb-title">Media</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="index.php"><i class="icon-home"></i>Home</a></span>
                                        <span>Media</span>
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
                <div class="product-information ">
                    <div class="row gy-24 justify-content-center">
                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="product-information-tab ">
                                <ul class="nav nav-pills nav-pills-media mb-35 flex-wrap gap-10" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-information-tab" data-bs-toggle="pill" data-bs-target="#pills-information" type="button" role="tab" aria-controls="pills-information" aria-selected="true">Photo Category</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review" aria-selected="false">Video Category</button>
                                    </li>
                                   
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-information" role="tabpanel" aria-labelledby="pills-information-tab" tabindex="0">
                                        <div class="row gy-50">
										
										
											<?php
											//  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT * FROM `photo_category_tbl`";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
										
										
										
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <div class="blog-item style-one is-box-shadow wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                                    <div class="blog-thumb">
                                                        <figure>
                                                            <a href="gallery.php?action=views&id=<?php echo $row['id']; ?>"> <img src="admin/img/<?php echo $row['photo'];  ?>" alt="blog thumb"></a>
                                                        </figure>
                                                    </div>
                                                    <div class="blog-content text-center">
                                                      
                                                        <h3 class="title">
                                                            <a href="gallery.php?action=views&id=<?php echo $row['id']; ?>"><?php echo $row['category_name'];  ?></a>
                                                        </h3>
                                                        <div class="blog-content-bottom">
                                                       
                                                            <div class="blog-btn underline">
                                                                <a href="gallery.php?action=views&id=<?php echo $row['id']; ?>">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <?php }?>
                
                                            
                
                                       
                
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab" tabindex="0">
                                        <div class="row gy-50">
										<?php 
										//  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT * FROM `video_category_tbl`";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <div class="blog-item style-one is-box-shadow wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                                    <div class="blog-thumb">
                                                        <figure>
                                                            <a href="video.php?action=views&id=<?php echo $row['id']; ?>"> <img src="admin/img/<?php echo $row['photo'];  ?>" alt="blog thumb"></a>
                                                        </figure>
                                                    </div>
                                                    <div class="blog-content text-center">
                                                      
                                                        <h3 class="title">
                                                            <a href="video.php?action=views&id=<?php echo $row['id']; ?>"><?php echo $row['category_name'];  ?></a>
                                                        </h3>
                                                        <div class="blog-content-bottom">
                                                       
                                                            <div class="blog-btn underline">
                                                                <a href="video.php?action=views&id=<?php echo $row['id']; ?>">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <?php }?>
                
                                            
                
                                       
                
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
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