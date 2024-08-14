<?php

	require_once('inc/config.php');


 ?>

<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Deep Sheetal || Home</title>
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

  
    <!-- Pre loader end -->
    

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
  
    <?php include('header.php'); ?>



    <!-- Header area end -->

    <!-- Body main wrapper start -->
    <main>

        <!-- Banner area start -->
        <section class="bd-banner-area banner-style-four p-relative x-clip">
      


            <div class="swiper bannerSliderActivation p-relative">
                <div class="swiper-wrapper slider-wrapper">
                    <!-- if ypu active slider then duplicate "swiper-slide" -->
					
					
					<?php
					
                    $sql = "SELECT * FROM `sliders_tbl` WHERE `status` ='1'";
                    $query = $link->query($sql);
					                      $count = 0;

                    while($rows = $query->fetch_assoc()){
					
					
                      ?>

                    <div class="swiper-slide">
                        <div class="banner-inner p-relative">
                            <div class="banner-single-item ">
							<?php
					//$cheak_status = '1'; 
										
						$cheak_status=$rows['multimedia_type'];				
$t = $cheak_status;
//echo $t;

if ($t < "2") {
?>
							  <div class="banner-bg-image include-bg" data-background="admin/img/<?php echo $rows['photo'];  ?>">
                                </div>
								
								 <?php  } else {
?>
								
								
                                <div class="video-banner">
                                    <video src="admin/img/<?php echo $rows['photo'];  ?>" autoplay loop muted></video>
                                </div>
								
								
								<?php }?>
								
								
                                <div class="container p-relative">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-8 col-xl-8 col-lg-10">
                                            <div class="banner-wrapper-four">
                                                <div class="banner-content-four p-relative">
                                                    <h1 class="banner-title large white-text mb-25"><?php echo $rows['title_name']; ?>
                                                    </h1>
                                                    <p class="banner-description"><?php echo $rows['description']; ?></p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>


                   <?php $count++; }?>
                    
                    
                </div>
            </div>
            <!-- navigation button start -->
            <div class="banner-nav-btn banner-four-navigation d-xxl-block">
                <div class="banner-navigation-btn-2">
                    <button class="banner-navigation-prev"><i class="fa-regular fa-angle-left"></i></button>
                    <button class="banner-navigation-next"><i class="fa-regular fa-angle-right"></i></button>
                </div>
            </div>
            <!-- navigation button end -->

            <div class="banner-from-three">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                        
                            <!-- tab content start-->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-apartments" role="tabpanel" aria-labelledby="pills-apartments-tab" tabindex="0">
								<form class="form-inline" method="POST" action="search-projects.php">
                                    <div class="banner-booking-select">
                                        <div class="booking-select">
                                            <select name="project_cate_id">
                                                <option value="1">Projects Type</option>
													<?php
					
                    $sql = "SELECT * FROM `project_category_tbl`";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                                              <option value="<?php echo $row['id']; ?>"><?php echo $row['project_cate_name']; ?></option>
												
												<?php }?>
                                             
                                                
                                            </select>
                                        </div>
                                        <div class="booking-select">
                                            <select name="project_area_id">
                                                <option value="1">Location</option>
													
								
								<?php
					
                    $sql = "SELECT * FROM `project_area_tbl`";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['area_name']; ?></option>
												
												<?php }?>
                                             
                                               
                                            </select>
                                        </div>
                                  
                                      
                                        <div class="banner-submit">
                                            <button class="bd-btn btn-black btn-style btn-hover-x hover-primary" type="submit" name="search">
                                                <span>
                                       <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M3.58 13.92L0.5 17M1.389 8.581C1.389 12.768 4.772 16.162 8.944 16.162C13.117 16.162 16.5 12.768 16.5 8.582C16.5 4.393 13.117 1 8.945 1C4.772 1 1.389 4.394 1.389 8.581Z"
                                             stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                          </path>
                                       </svg>
                                    </span>
                                                Search
                                            </button>
                                        </div>
                                    </div>
									</form>
                                
                                    <!-- filter-search-form-end -->
                                </div>
                            </div>
                            
                            <!-- tab content end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner area end -->

     

        <!-- About area Start -->
        <section class="bd-about-area section-space p-relative">
            <div class="container">
                <div class="row g-5">
                    <div class=" col-xxl-4 col-xl-4 col-lg-4 order-1 order-lg-0 wow bdFadeInLeft" data-wow-delay=".3s">
                        <div class="section-title-wrapper anim-wrapper animation-style-3 mb-20">
                            <span class="section-subtitle uppercase">
        <i class="icon-home"></i>
        about us
    </span>
                            <h4 class="section-title title-animation">We Provide Right Choice of Properties</h4>
                        </div>

                        <div class="content">
                            <p class="description">We believe in more than just buying and selling properties. We believe in
                                turning dreams
                                into reality. Explore our curated selection of homes tailored to your unique lifestyle.</p>
                        </div>
                        <div class="about-list-wrapper style-two">
                            <!-- <ul>
                                <li>
                                    <span> <i class="icon-interior-design"></i></span>
                                    Smart Home Design
                                </li>
                              
                             
                            </ul> -->
                        </div>
                        <div class="about-btn">
                            <a class="bd-half-outline-btn" href="about.php"><span class="text">Read More</span></a>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8 order-0 order-lg-1">
                        <div class="about-thumb-wrap style-one">
                            <div class="round-box-inner">
                                <div class="round-box">
                                    <span class="round one"></span>
                                    <span class="round two"></span>
                                    <span class="round three"></span>
                                </div>
                                <div class="round-icon">
                                    <figure><img src="assets/images/icons/house.png" alt="image"></figure>
                                </div>
                            </div>
                            <div class="thumb-one">
                                <figure> <img src="assets/images/about/about-thumb-01.png" alt="image"></figure>
                            </div>
                            <div class="thumb-two-inner">
                                <div class="thumb-two">
                                    <figure><img src="assets/images/about/about-thumb-02.png" alt="image"></figure>
                                </div>
                                <div class="thumb-two">
                                    <figure> <img src="assets/images/about/about-thumb-03.png" alt="image"></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end -->


           <!-- Services area start -->
           <section class="bd-services-item section-space theme-bg-primary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section-title-wrapper anim-wrapper section-title-space text-center animation-style-3">
                            <span class="section-subtitle uppercase">
        <i class="icon-home"></i>
        Our Services
    </span>
                            <h2 class="section-title title-animation">What we provide</h2>
                        </div>

                    </div>
                </div>
                <div class="row g-5 justify-content-between justify-content-md-center">
				
					
								<?php
					
                    $sql = "SELECT * FROM `project_category_tbl`";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="services-item style-one wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <span class="icon"><i class="<?php echo $row['icon']; ?>"></i></span>
                            <div class="content">
                                <h3 class="title">
                                    <a href="all_projects.php?action=views&id=<?php echo $row['id']; ?>"><?php echo $row['project_cate_name']; ?></a>
                                </h3>
                                <p class="description"><?php echo $row['description']; ?></p>
                            </div>
                            <div class="btn-inner">
                                <a class="bd-half-outline-btn" href="all_projects.php?action=views&id=<?php echo $row['id']; ?>"><span class="text">Find A Home </span></a>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                 
                </div>
            </div>
        </section>
        <!-- Services area end -->


      <!-- Featured area start -->
      <section class="bd-featured-area section-space">
        <div class="container">
            <div class="row g-5  align-items-center justify-content-between">
                <div class="col-xxl-7 col-xl-6 col-lg-6">
                    <div class="section-title-wrapper anim-wrapper animation-style-3">
                        <span class="section-subtitle uppercase">
    <i class="icon-home"></i>
    featured
</span>
                        <h2 class="section-title title-animation">Discover our featured listings</h2>
                    </div>

                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-6">
<div class="feature_properties-btn">
                <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Residential</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Commercial</button>
   
  </div>
</nav>
</div>   
<div class="common-nav-pre">
                        <!-- If we need navigation buttons -->
                        <div class="common-navigation justify-content-lg-end justify-content-start">
                            <button class="common-slider-button-prev"><i class="fa-regular fa-arrow-left"></i></button>
                            <!-- If we need pagination -->
                            <div class="why-choos-pagination">
                                <div class="bd-swiper-dot text-center"></div>
                            </div>
                            <button class="common-slider-button-next"><i
                          class="fa-regular fa-arrow-right-long"></i></button>
                        </div>
                    </div>        
                </div>

                <div class="col-lg-12">

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    
    <div class="row">
        <div class="col-xxl-12">
            <div class="swiper common-carousel-active wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                <div class="swiper-wrapper">
				
				
				
				
				
					
								<?php
					
                    $sql = "SELECT r.category_id, r.subcategory_id, r.project_name, r.product_description,  r.price, r.address, r.google_map, r.photo, r.description,  r.id, r.status, e.project_cate_name, m.subcategory_name
       FROM project_category_tbl e
       JOIN project_tbl r ON e.id=r.category_id
	   JOIN project_subcategory_tbl m ON m.id=r.subcategory_id WHERE r.`category_id` ='1'  and `status`='1'";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
				
				
				
                    <div class="swiper-slide">
                        <div class="featured-item style-one">
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
                                <h3 class="title"><a href="projects-details.php?action=views&id=<?php echo $row['id']; ?>"><?php echo $row['project_name']; ?></a></h3>
                                <span class="info"><?php echo $row['address']; ?></span>
                                
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    
                </div>
            </div>
        </div>
    </div>

  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

    <div class="row">
        <div class="col-xxl-12">
            <div class="swiper common-carousel-active wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                <div class="swiper-wrapper">
                    
								<?php
					
                    $sql = "SELECT r.category_id, r.subcategory_id, r.project_name, r.product_description,  r.price, r.address, r.google_map, r.photo, r.description,  r.id, r.status, e.project_cate_name, m.subcategory_name
       FROM project_category_tbl e
       JOIN project_tbl r ON e.id=r.category_id
	   JOIN project_subcategory_tbl m ON m.id=r.subcategory_id WHERE r.`category_id` ='2'  and `status`='1'";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
				
                    
                    <div class="swiper-slide">
                        <div class="featured-item style-one">
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
                                <h3 class="title"><a href="projects-details.php?action=views&id=<?php echo $row['id']; ?>"><?php echo $row['project_name']; ?></a></h3>
                                <span class="info"><?php echo $row['address']; ?></span>
                              
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
          
        </div>
    </section>
    <!-- Featured area end -->

        <!-- core features area start -->
        <section class="bd-core-feature-area section-space theme-bg-primary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section-title-wrapper anim-wrapper section-title-space text-center animation-style-3">
                            <span class="section-subtitle uppercase">
        <i class="icon-home"></i>
        core feature
    </span>
                            <h2 class="section-title title-animation">Modern Living With Ementi</h2>
                        </div>

                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="core-feature-item style-one wow fadeIn" data-wow-delay=".3s">
                            <div class="icon">
                                <span><i class="icon-location"></i></span>
                            </div>
                            <div class="content">
                                <h3 class="title">Prime location
                                </h3>
                                <p class="description">The core feature of any real estate property is its location. It could be
                                    in a prime area</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="core-feature-item style-one active wow fadeIn" data-wow-delay=".4s">
                            <div class="icon">
                                <span><i class="icon-modern-living"></i></span>
                            </div>
                            <div class="content">
                                <h3 class="title"> Modern living
                                </h3>
                                <p class="description">The quality of real state and materials used in the building is crucial
                                    Features building</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="core-feature-item style-one wow fadeIn" data-wow-delay=".5s">
                            <div class="icon">
                                <span><i class="icon-eco-friendly"></i></span>
                            </div>
                            <div class="content">
                                <h3 class="title">Eco friendly
                                </h3>
                                <p class="description">Features such as green spaces, energy-efficient appliances, and
                                    eco-friendly</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="core-feature-item style-one wow fadeIn" data-wow-delay=".6s">
                            <div class="icon">
                                <span><i class="icon-innovation"></i></span>
                            </div>
                            <div class="content">
                                <h3 class="title">Modern technology
                                </h3>
                                <p class="description">In today's digital age, properties with smart home features, integrated
                                    technology</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="core-feature-item style-one wow fadeIn" data-wow-delay=".7s">
                            <div class="icon">
                                <span><i class="icon-easy-ccessibility"></i></span>
                            </div>
                            <div class="content">
                                <h3 class="title">Easy accessibility
                                </h3>
                                <p class="description">access to transportation hubs, schools, healthcare facilities, shopping
                                    centers and venues</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="core-feature-item style-one wow fadeIn" data-wow-delay=".8s">
                            <div class="icon">
                                <span><i class="icon-cctv-camera"></i></span>
                            </div>
                            <div class="content">
                                <h3 class="title">Security cameras
                                </h3>
                                <p class="description">Features like gated provide, surveillance cameras, intercom systems and
                                    security</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- core features area end -->

        

        <!-- property area start -->
        <!-- <section class="bd-property-area section-space">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-8 col-xl-6 col-lg-6">
                        <div class="section-title-space section-title-wrapper text-center anim-wrapper animation-style-3">
                            <span class="section-subtitle uppercase">
        <i class="icon-home"></i>
        Property
    </span>
                            <h2 class="section-title title-animation">Luxury Homes </h2>
                        </div>

                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-5 col-lg-5 wow bdFadeInLeft" data-wow-delay=".3s">
                        <div class="property-content propertyTabContent">
                            <h3 class="title">Single house</h3>
                            <p class="description">At Deep Sheetal Engineers, we're dedicated to more than just facilitating transactions.
                                we're committed to empowering.</p>
                            <div class="row">
                                <div class="col-xxl-6">
                                    <div class="house-info">
                                        <div class="room">
                                            <span class="room-title">Rooms:</span>
                                            <span>03</span>
                                        </div>
                                        <div class="room">
                                            <span class="room-title">Total area:</span>
                                            <span>1200 Sqft</span>
                                        </div>
                                        <div class="room">
                                            <span class="room-title">Number of floors:</span>
                                            <span>01</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="house-info">
                                        <div class="room room-margin-top">
                                            <span class="room-title">Parking:</span>
                                            <span>Yes</span>
                                        </div>
                                       
                                        <div class="room">
                                            <span class="room-title">Total price:</span>
                                            <span>₹35,000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrap offer-tour-btn">
                                    <a class="bd-btn btn-style btn-hover-x btn-black" href="enquiry.php"><i class="fa-regular fa-arrow-right-long"></i>Book A Tour</a>
                                </div>
                            </div>
                        </div>
                        <div class="property-content propertyTabContent">
                            <h3 class="title">Town house</h3>
                            <p class="description">At Deep Sheetal Engineers, we're dedicated to more than just facilitating transactions.
                                we're committed to empowering.</p>
                            <div class="row">
                                <div class="col-xxl-6">
                                    <div class="house-info">
                                        <div class="room">
                                            <span class="room-title">Rooms:</span>
                                            <span>05</span>
                                        </div>
                                        <div class="room">
                                            <span class="room-title">Total area:</span>
                                            <span>1900 Sqft</span>
                                        </div>
                                        <div class="room">
                                            <span class="room-title">Number of floors:</span>
                                            <span>02</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="house-info">
                                        <div class="room room-margin-top">
                                            <span class="room-title">Parking:</span>
                                            <span>Yes</span>
                                        </div>
                                       
                                        <div class="room">
                                            <span class="room-title">Total price:</span>
                                            <span>₹99,9900</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrap offer-tour-btn">
                                    <a class="bd-btn btn-style btn-hover-x btn-black" href="enquiry.php"><i class="fa-regular fa-arrow-right-long"></i>Book A Tour</a>
                                </div>
                            </div>
                        </div>
                        <div class="property-content propertyTabContent">
                            <h3 class="title">Family house</h3>
                            <p class="description">At Deep Sheetal Engineers, we're dedicated to more than just facilitating transactions.
                                we're committed to empowering.</p>
                            <div class="row">
                                <div class="col-xxl-6">
                                    <div class="house-info">
                                        <div class="room">
                                            <span class="room-title">Rooms:</span>
                                            <span>10</span>
                                        </div>
                                        <div class="room">
                                            <span class="room-title">Total area:</span>
                                            <span>2500 Sqft</span>
                                        </div>
                                        <div class="room">
                                            <span class="room-title">Number of floors:</span>
                                            <span>03</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="house-info">
                                        <div class="room room-margin-top">
                                            <span class="room-title">Parking:</span>
                                            <span>Yes</span>
                                        </div>
                                  
                                        <div class="room">
                                            <span class="room-title">Total price:</span>
                                            <span>₹99,85765</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrap offer-tour-btn">
                                    <a class="bd-btn btn-style btn-hover-x btn-black" href="enquiry.php"><i class="fa-regular fa-arrow-right-long"></i>Book A Tour</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-7 col-lg-7">
                        <div class="row-custom property-panel wow bdFadeInRight" data-wow-delay=".4s">
                            <div class="col-custom active">
                                <div class="bd-panel-item">
                                    <div class="bd-panel-content">
                                        <h6 class="bd-panel-title child-one">Single House</h6>
                                        <span>01</span>
                                    </div>
                                </div>
                                <div class="bd-panel-item-2">
                                    <div class="bd-panel-content-2">
                                        <img src="assets/images/property/property-thumb-04.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-custom">
                                <div class="bd-panel-item">
                                    <div class="bd-panel-content">
                                        <h6 class="bd-panel-title child-two">Town House</h6>
                                        <span>02</span>
                                    </div>
                                </div>
                                <div class="bd-panel-item-2">
                                    <div class="bd-panel-content-2">
                                        <img src="assets/images/property/property-thumb-05.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-custom">
                                <div class="bd-panel-item">
                                    <div class="bd-panel-content">
                                        <h6 class="bd-panel-title child-three">Family House</h6>
                                        <span>03</span>
                                    </div>
                                </div>
                                <div class="bd-panel-item-2">
                                    <div class="bd-panel-content-2">
                                        <img src="assets/images/property/property-thumb-06.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section> -->
        <!-- property area end -->

        <!-- <section class="bd-featured-area section-space x-clip theme-bg-primary">
            <div class="container">
                <div class="row gy-30 mb-80 justify-content-between align-items-end section-title-space">
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="section-title-wrapper anim-wrapper animation-style-3 text-center">
                            <span class="section-subtitle uppercase">
        <i class="icon-home"></i>
        Location
    </span>
                            <h2 class="section-title title-animation">Our popular location</h2>
                        </div>

                    </div>
               
                </div>
                <div class="swiper featured-slider-active-two is-featured-slider wow bdFadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="category-item style-one wow bdFadeInUp" data-wow-delay=".3s">
                                <div class="thumb">
                                    <figure class="w-img"><img src="assets/images/category/categorie-thumb-02.png" alt="thumb not found"></figure>
                                </div>
                                <div class="content">
                                    <p class="description">Patna Bihar</p>
                                    <h3 class="title"><a href="projects.php">Residential</a></h3>
                                </div>
                                <div class="btn-inner">
                                    <a class="link" href="projects.php"><i class="fa-regular fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-item style-one wow bdFadeInUp" data-wow-delay=".3s">
                                <div class="thumb">
                                    <figure class="w-img"><img src="assets/images/category/categorie-thumb-04.png" alt="thumb not found"></figure>
                                </div>
                                <div class="content">
                                    <p class="description">Patna Bihar</p>
                                    <h3 class="title"><a href="projects.php">Commercial</a></h3>
                                </div>
                                <div class="btn-inner">
                                    <a class="link" href="projects.php"><i class="fa-regular fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                       
                       
                    </div>
                </div>
            </div>
        </section> -->

    
   <!-- Team area start -->
  
<!-- Team area end -->

           <!-- Testimonial area start -->
           <section class="bd-testimonial-area p-relative z-index-11 section-space">
            <div class="container">
            <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section-title-wrapper anim-wrapper section-title-space text-center animation-style-3">
                            <span class="section-subtitle uppercase">
        <i class="icon-home"></i>
        Testimonial
    </span>
                            <h2 class="section-title title-animation">Custom Feedback</h2>
                        </div>

                    </div>
                </div>
                <div class="row align-items-center wow bdFadeInUp" data-wow-delay=".3s">
                   
                    <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-8">
                        <div class="testimonial-content-two">
                            <div class="swiper testimonial-active-two">
                                <div class="swiper-wrapper">
								
								
								
								<?php
					
                    $sql = "SELECT * FROM `testimonial_tbl`";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                                    <div class="swiper-slide">
                                        <div class="testimonials-item style-two">
                                            <div class="content view-more-view-less">
                                                
                                              <?php echo $row['description']; ?>
                                                <input type="checkbox" class="check" />
                                            </div>
                                            <div class="admin-nav-wrap">
                                                <div class="admin-item">
                                                    <div class="admin-thumbnail">
                                                        <img src="admin/img/<?php echo $row['photo']; ?>" alt="Admin Avatar">
                                                    </div>
                                                    <div class="admin-info">
                                                        <h4 class="admin-name"><?php echo $row['name']; ?></h4>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="testimonial-navigation d-none d-sm-block">
                                    <button class="testimonial-nav-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                                    <button class="testimonial-nav-next"><i class="fa-regular fa-arrow-right-long"></i></button>
                                </div>
                                <div class="testimonial-pagination d-block d-sm-none">
                                    <div class="testimonial-swiper-dot text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-4">
                        <div class="testimonials-info-wrapper">
                            <div class="testimonials-info-item">
                                <div class="content">
                                    <h2 class="title"><span data-purecounter-duration="1" data-purecounter-end="200"
                                 class="purecounter">200+</span>+</h2>
                                    <p class="description">Project Handover</p>
                                </div>
                            </div>
                            <div class="testimonials-info-item">
                                <div class="content">
                                    <h2 class="title"><span data-purecounter-duration="1" data-purecounter-end="198"
                                 class="purecounter">198+</span>+</h2>
                                    <p class="description">Happy Customers</p>
                                </div>
                            </div>
                            <div class="testimonials-info-item">
                                <div class="content">
                                    <h2 class="title"><span data-purecounter-duration="1" data-purecounter-end="150"
                                 class="purecounter">150+</span>+</h2>
                                    <p class="description">Review</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-shapes">
                <div class="shape-one">
                    <img src="assets/images/shapes/quotes-white.svg" alt="quotes not found">
                </div>
            </div>
        </section>
        <!-- Testimonial area end -->

    


    


        <!-- apartment type area start -->
        <!-- <section class="bd-apartment-type-area section-space-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="section-title-wrapper anim-wrapper section-title-space text-center animation-style-3">
                            <span class="section-subtitle uppercase">
        <i class="icon-home"></i>
        apartment
    </span>
                            <h2 class="section-title title-animation">Types of apartment</h2>
                        </div>

                    </div>
                </div>
                <div class="apartment-type-wrapper">
                    <div class="apartment-type-card wow fadeIn" data-wow-delay=".3s">
                        <span class="apartment-type-icon is-orange"><i class="icon-villa"></i></span>
                        <div class="apartment-name-details">
                            <h6 class="apartment-name">Villa</h6>
                            <p class="apartment-property">20 Property</p>
                        </div>
                    </div>
                    <div class="apartment-type-card wow fadeIn" data-wow-delay=".4s">
                        <span class="apartment-type-icon is-orange"><i class="icon-penthouse"></i></span>
                        <div class="apartment-name-details">
                            <h6 class="apartment-name">Penthouse</h6>
                            <p class="apartment-property">25 Property</p>
                        </div>
                    </div>
                    <div class="apartment-type-card wow fadeIn" data-wow-delay=".5s">
                        <span class="apartment-type-icon is-orange"><i class="icon-urban"></i></span>
                        <div class="apartment-name-details">
                            <h6 class="apartment-name">Urban</h6>
                            <p class="apartment-property">15 Property</p>
                        </div>
                    </div>
                    <div class="apartment-type-card wow fadeIn" data-wow-delay=".6s">
                        <span class="apartment-type-icon is-orange"><i class="icon-factories"></i></span>
                        <div class="apartment-name-details">
                            <h6 class="apartment-name">Factory</h6>
                            <p class="apartment-property">30 Property</p>
                        </div>
                    </div>
                    <div class="apartment-type-card wow fadeIn" data-wow-delay=".7s">
                        <span class="apartment-type-icon is-orange"><i class="icon-warehouse"></i></span>
                        <div class="apartment-name-details">
                            <h6 class="apartment-name">Warehouse</h6>
                            <p class="apartment-property">10 Property</p>
                        </div>
                    </div>
                    <div class="apartment-type-card wow fadeIn" data-wow-delay=".8s">
                        <span class="apartment-type-icon is-orange"><i class="icon-city"></i></span>
                        <div class="apartment-name-details">
                            <h6 class="apartment-name">City</h6>
                            <p class="apartment-property">35 Property</p>
                        </div>
                    </div>
                    <div class="apartment-type-card wow fadeIn" data-wow-delay=".9s">
                        <span class="apartment-type-icon is-orange"><i class="icon-store"></i></span>
                        <div class="apartment-name-details">
                            <h6 class="apartment-name">Store</h6>
                            <p class="apartment-property">40 Property</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- apartment type area end -->

       

    </main>
    <!-- Body main wrapper end -->

    <!-- Footer area start -->
    <?php include('footer.php'); ?>
    <!-- Footer area end -->

    <!-- JS here -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/ImageChange.js"></script>
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
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