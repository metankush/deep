<?php

	require_once('inc/config.php');


 ?>

<div class="fix">
        <div class="offcanvas-area">
            <div class="offcanvas-wrapper">
                <div class="offcanvas-content">
                    <div class="offcanvas-top d-flex justify-content-between align-items-center mb-25">
                        <div class="offcanvas-logo">
                            <a href="index.php">
                                <img src="assets/images/logo/logo-home.png" alt="logo not found">
                            </a>
                        </div>
                        <div class="offcanvas-close">
                            <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                                <span class="offcanvas-m-line line--1"></span><span
                                    class="offcanvas-m-line line--2"></span><span
                                    class="offcanvas-m-line line--3"></span>
                                </span>
                            </button>
                        </div>
                    </div>
         
                    <div class="mobile-menu fix mb-25"></div>
                    <div class="offcanvas-about d-none d-lg-block mb-25">
                        <h4 class="offcanvas-title-meta">About Deep Sheetal Engineers</h4>
                        <p>We believe in more than just buying and selling properties. we believe in turning dreams into reality. Explore our curated selection of homes tailored to your unique lifestyle.</p>
                    </div>
                    <div class="offcanvas-contact mb-25">
                        <h4 class="offcanvas-title-meta">Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center gap-10">
                                <div class="offcanvas-contact-icon">
                                    <a target="_blank" href="#">
                                        <i class="fal fa-map-marker-alt"></i></a>
                                </div>
                                <div class="offcanvas-contact-text">
                                    <a target="_blank" href="#">03rd Floor, S. S. Furniture Mall, Besides IOCL Petrol Pump, Near Ganesh Timber, Danapur, Patna Patna BR 801503 IN.</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-10">
                                <div class="offcanvas-contact-icon">
                                    <a href="tel:+91 7488041647/48"><i class="far fa-phone"></i></a>
                                </div>
                                <div class="offcanvas-contact-text">
                                    <a href="tel:+91 7488041647/48">+91 7488041647/48</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-10">
                                <div class="offcanvas-contact-icon">
                                    <a href="mailto:info@deepsheetal.com"><i class="fal fa-envelope"></i></a>
                                </div>
                                <div class="offcanvas-contact-text">
                                    <a href="mailto:info@deepsheetal.com">info@deepsheetal.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
             
                    <div class="offcanvas-social">
                        <h4 class="offcanvas-title-meta">Subscribe & Follow</h4>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <header class="other-header">
      

      <!-- main header start -->
      <div class="header-area header-primary" id="header-sticky">
      <h2>Deep Sheetal Engineers PVT.LTD.</h2>
          <div class="header-inner">
              <div class="header-logo">
                  <a href="index.php"><img src="assets/images/logo/logo-home.png" alt="Logo"></a>
              </div>
              <div class="header-menu">
                  <nav class="bd-main-menu" id="mobile-menu">
                      <ul>
                          <li class="menu-item-has-children">
                              <a href="index.php">Home</a>
                      
                          </li>

                          <li class="menu-item-has-children">
                              <a href="#">Our Story</a>
                              <ul class="dp-menu">
                                  <li><a href="about.php">About Us</a></li>
                                  <li><a href="mission-vision.php">Mission & Vision</a></li>
                                  <li><a href="founder_message.php">Founder Message</a></li>
                                  <li><a href="certificate.php">Company certification</a></li>
                                  <li >
                              <a href="management.php">Management</a>
                          </li>
                              </ul>
                          </li>

                          <li class="menu-item-has-children">
                              <a href="#">Projects</a>
                              <ul class="dp-menu">
							  	<?php
					
                  $sql = "SELECT * FROM `project_category_tbl`";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
  
                      ?>
								
                                  <li><a href="#"><?php echo $row['project_cate_name']; ?></a>
                                      <ul class="dp-menu">
									  	<?php
					$categid = $row['id']; 
					
                  $sql = "SELECT * FROM `project_subcategory_tbl` WHERE `project_category_id` = '".$categid."'";
$results = $link->query($sql);

  // output data of each row
  while($rows = $results->fetch_assoc()) {
   
  
                      ?>
                                          <li><a href="projects.php?action=views&id=<?php echo $rows['id']; ?>"><?php echo $rows['subcategory_name']; ?></a></li>
                                         
										 <?php }?>
                                      </ul>
                                  </li>
                                  
                                  <?php }}?>
                              </ul>
                          </li>

                     

                          <li class="menu-item-has-children">
                              <a href="media.php">Media</a>
                              
                          </li>
                        
                          <li class="has-mega-menu is-menu-none">
                              <a href="enquiry.php">Enquiry</a>
                          </li>
                          <li class="menu-item-has-children">
                              <a href="contact.php">Contact</a>
                          </li>

                       
                      </ul>
                  </nav>
              </div>
              <div class="header-right style-one">
                  <div class="header-action">
                      <div class="header-btn-wrap d-none d-sm-block">
                          <a class="bd-half-outline-btn" href="enquiry.php"><span class="text">Enquiry</span></a>
                      </div>
                      <div class="header-hamburger">
                          <div class="sidebar-toggle">
                              <button><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M6.69832 0.128621C5.15057 -0.0428735 3.5886 -0.0428735 2.04085 0.128621C1.55781 0.182362 1.10707 0.397514 0.761668 0.73922C0.416264 1.08093 0.196426 1.52917 0.137769 2.01133C-0.045923 3.58071 -0.045923 5.16615 0.137769 6.73553C0.196426 7.21769 0.416264 7.66593 0.761668 8.00764C1.10707 8.34935 1.55781 8.5645 2.04085 8.61824C3.5757 8.78929 5.16347 8.78929 6.69832 8.61824C7.18136 8.5645 7.6321 8.34935 7.9775 8.00764C8.3229 7.66593 8.54274 7.21769 8.6014 6.73553C8.7851 5.16615 8.7851 3.58071 8.6014 2.01133C8.54274 1.52917 8.3229 1.08093 7.9775 0.73922C7.6321 0.397514 7.18136 0.182362 6.69832 0.128621ZM6.69832 11.3821C5.15057 11.2106 3.5886 11.2106 2.04085 11.3821C1.55781 11.4358 1.10707 11.651 0.761668 11.9927C0.416264 12.3344 0.196426 12.7826 0.137769 13.2648C-0.045923 14.8342 -0.045923 16.4196 0.137769 17.989C0.196426 18.4712 0.416264 18.9194 0.761668 19.2611C1.10707 19.6028 1.55781 19.818 2.04085 19.8717C3.5757 20.0428 5.16347 20.0428 6.69832 19.8717C7.18136 19.818 7.6321 19.6028 7.9775 19.2611C8.3229 18.9194 8.54274 18.4712 8.6014 17.989C8.78511 16.4196 8.78511 14.8342 8.6014 13.2648C8.54274 12.7826 8.3229 12.3344 7.9775 11.9927C7.6321 11.651 7.18136 11.4358 6.69832 11.3821ZM17.9591 0.128621C16.4114 -0.0428735 14.8494 -0.0428735 13.3017 0.128621C12.8186 0.182362 12.3679 0.397514 12.0225 0.73922C11.6771 1.08093 11.4572 1.52917 11.3986 2.01133C11.2149 3.58071 11.2149 5.16615 11.3986 6.73553C11.4572 7.21769 11.6771 7.66593 12.0225 8.00764C12.3679 8.34935 12.8186 8.5645 13.3017 8.61824C14.8376 8.78929 16.4232 8.78929 17.9591 8.61824C18.4422 8.5645 18.8929 8.34935 19.2383 8.00764C19.5837 7.66593 19.8036 7.21769 19.8622 6.73553C20.0459 5.16615 20.0459 3.58071 19.8622 2.01133C19.8036 1.52917 19.5837 1.08093 19.2383 0.73922C18.8929 0.397514 18.4422 0.182362 17.9591 0.128621ZM17.9591 11.3821C16.4114 11.2106 14.8494 11.2106 13.3017 11.3821C12.8186 11.4358 12.3679 11.651 12.0225 11.9927C11.6771 12.3344 11.4572 12.7826 11.3986 13.2648C11.2149 14.8342 11.2149 16.4196 11.3986 17.989C11.4572 18.4712 11.6771 18.9194 12.0225 19.2611C12.3679 19.6028 12.8186 19.818 13.3017 19.8717C14.8376 20.0428 16.4232 20.0428 17.9591 19.8717C18.4422 19.818 18.8929 19.6028 19.2383 19.2611C19.5837 18.9194 19.8036 18.4712 19.8622 17.989C20.0459 16.4196 20.0459 14.8342 19.8622 13.2648C19.8036 12.7826 19.5837 12.3344 19.2383 11.9927C18.8929 11.651 18.4422 11.4358 17.9591 11.3821Z" fill="white" />
                                  </svg>
                              </button>
                          </div>
                      </div>
                  </div>
                  <!-- for wp -->
                  <div class="header-hamburger ml-20 d-none">
                      <button type="button" class="hamburger-btn offcanvas-open-btn">
                          <span>01</span>
                          <span>01</span>
                          <span>01</span>
                      </button>
                  </div>
              </div>
          </div>
      </div>
      <!-- main header end -->
  </header>