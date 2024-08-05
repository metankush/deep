<?php session_start();
	
	if(!isset($_SESSION['id'],$_SESSION['user_role_id'],$_SESSION['email'],$_SESSION['company_name'],$_SESSION['name']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}		
	
	require_once('inc/config.php');
	
	
	?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<!-- Meta Tags -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="keywords" content="Site keywords here" />
<meta name="description" content="#" />
<meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
<!-- Site Title -->
<title>Projects-Details</title>
<!-- Fav Icon -->
<link rel="icon" href="img/favicon.png" />
<!--  Stylesheet -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/slick.min.css" />
<link rel="stylesheet" href="css/font-awesome-all.min.css" />
<link rel="stylesheet" href="css/charts.min.css" />
<link rel="stylesheet" href="css/datatables.min.css" />
<link rel="stylesheet" href="css/fancy-box.min.css" />
<link rel="stylesheet" href="css/nice-select.min.css" />
<link rel="stylesheet" href="css/pikaday.min.css" />
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="style.css" />
</head>
<body id="crancy-dark-light">
<div class="crancy-body-area">
<!-- crancy Admin Menu -->
<div class="crancy-smenu" id="CrancyMenu">
  <!-- Admin Menu -->
  <?php include('leftsidebaar.php'); ?>
  <!-- End Admin Menu -->
</div>
<!-- End crancy Admin Menu -->
<!-- Start Header -->
<?php include('top-header.php'); ?>
<!-- End Header -->
<!-- crancy Dashboard -->
<section class="crancy-adashboard crancy-show">
<div class="container container__bscreen">
  <div class="row">
    <div class="col-xxl-8 col-12 crancy-main__column">
	 <?php
						  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT r.category_id, r.subcategory_id, r.project_name, r.product_description,  r.price, r.address, r.google_map, r.photo, r.description,  r.id, r.status, e.project_cate_name, m.subcategory_name
       FROM project_category_tbl e
       JOIN project_tbl r ON e.id=r.category_id
	   JOIN project_subcategory_tbl m ON m.id=r.subcategory_id	  WHERE r.id='".$id."'";
                     $result = $link->query($sql);
					 $row = $result->fetch_assoc()
                      ?>
      <div class="crancy-body">
        <!-- Dashboard Inner -->
        <div class="crancy-dsinner">
          <div class="crancy-table crancy-table--v3 mg-top-30">
            <div class="crancy-customer-filter">
              <div
                        class="crancy-customer-filter__single crancy-customer-filter__single--csearch" style=" min-width: 17.5%;"
                      >
                <div
                          class="crancy-header__form crancy-header__form--customer"
                        >
                  <h3>Projects
 Details</h3>
                </div>
              </div>
              
              
              <div class="crancy-customer-filter__single"> <a
                          href="add-project-slider-details.php?action=add&id=<?php echo $row['id']; ?>"
                          class="crancy-customer-filter__single--button"
                        > Add  Project Sliders  </a> </div>
						
						<div class="crancy-customer-filter__single"> <a
                          href="add-project-gallery-details.php?action=add&id=<?php echo $row['id']; ?>"
                          class="crancy-customer-filter__single--button"
                        > Add  Project Gallery  </a> </div>
						
						
						
						
						<div class="crancy-customer-filter__single"> <a
                          href="add-project-certificate-details.php?action=add&id=<?php echo $row['id']; ?>"
                          class="crancy-customer-filter__single--button"
                        > Add  Project Certificate   </a> </div>
						
						
						<div class="crancy-customer-filter__single"> <a
                          href="add-property-features.php?action=add&id=<?php echo $row['id']; ?>"
                          class="crancy-customer-filter__single--button"
                        > Add Property Features   </a> </div>
            </div>
			
			
            <!-- crancy Table -->
            <table class="table table-bordered">
				<tbody>
				
				<tr>
					<td>Project Name</td>
					<td><?php echo $row['project_name']; ?></td>
				</tr>
				
				<tr>
					<td>Price</td>
					<td><?php echo $row['price']; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $row['address']; ?></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><?php echo $row['description']; ?></td>
				</tr>
				
					<tr>
					<th class="td-label" colspan="2">Property Detail:

</th>
				</tr>
				
					
				
				
				
				<tr>
					<td>Property Details</td>
					<td><?php echo $row['product_description']; ?></td>
				</tr>
				<table class="table table-bordered">
				<tbody>
				
				
				<tr>
					<th class="td-label" colspan="2">Property Features:

</th>
				</tr>
					<?php
											  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT * FROM `property_features_tbl` WHERE `project_id` ='".$id."'";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
								
				<tr>
					<td>
					
<a href="update-project-features-image.php?action=update&id=<?php echo $row['id']; ?>"><img src="img/<?php echo $row['photo']; ?>" style="width:100px; height:50px;"></a>					</td>
				
					
						
				<td><?php echo $row['features_name']; ?>	</td>

		<td> 
                                            <a class="me-3 confirm-text" href="delete-property-features.php?id=<?php echo $row['id']?>&del=delete">
                                                <img src="../assets/img/icons/delete.svg" alt="img">
                                            </a>
											 <a class="me-3" href="update-project-features-details.php?action=update&id=<?php echo $row['id']; ?>">
                                                <img src="../assets/img/icons/edit.svg" alt="img">
                                            </a>
											
											</td>
					
				</tr>
				
								
				<?php }?>
				
								
				
				
								
				
				
								</tbody></table>
				
				<table class="table table-bordered">
				<tbody>
				<tr>
					<td>Map Link	</td>
<td> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.6764319037857!2d85.0395437!3d25.6156661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed566878b48009%3A0x441a30ca6dac73b9!2sDream%20Jewel%20Apartment!5e0!3m2!1sen!2sin!4v1722245542291!5m2!1sen!2sin" width="50%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</td>
				</tr>
				</tbody></table>
					
					<table class="table table-bordered">
				<tbody>
				
				
				<tr>
					<th class="td-label" colspan="2">All Certificate:

</th>
				</tr>
					<?php
											  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT * FROM `project_certificate_tbl` WHERE `project_id` ='".$id."'";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
								
				<tr>
					<td>
					
<a href="img/<?php echo $row['photo']; ?>">View File</a>					</td>
				
					
						
				<td><?php echo $row['certificate_name']; ?>	</td>

		<td> 
                                            <a class="me-3 confirm-text" href="delete-project-certificate.php?id=<?php echo $row['id']?>&del=delete">
                                                <img src="../assets/img/icons/delete.svg" alt="img">
                                            </a>
											 <a class="me-3" href="update-project-certificate-details.php?action=update&id=<?php echo $row['id']; ?>">
                                                <img src="../assets/img/icons/edit.svg" alt="img">
                                            </a>
											
											</td>
					
				</tr>
				
								
				<?php }?>
				
								
				
				
								
				
				
								</tbody></table>
								
								
				<table class="table table-bordered">
				<tbody>
				
				
				<tr>
					<th class="td-label" colspan="2">Project Slider Details

</th>
				</tr>
					
								<?php
											  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT * FROM `project_slider_tbl` WHERE `project_id` ='".$id."'";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
								
				<tr>
					<td>
					
	<a href="update-project-slider-image.php?action=update&id=<?php echo $row['id']; ?>"><img src="img/<?php echo $row['photo']; ?>" style="width:100px; height:100px;"></a>
															</td>
				
					
						
				

		<td> 
                                            <a class="me-3 confirm-text" href="delete-project-silder.php?id=<?php echo $row['id']?>&del=delete">
                                                <img src="../assets/img/icons/delete.svg" alt="img">
                                            </a>
											 <a class="me-3" href="update-project-slider-image.php?action=update&id=<?php echo $row['id']; ?>">
                                                <img src="../assets/img/icons/edit.svg" alt="img">
                                            </a>
											
											</td>
					
				</tr>
				
								
				<?php }?>
				
								
				
				
								
				
				
								</tbody></table>
								
								
								
								
								
								
								
								
								<table class="table table-bordered">
				<tbody>
				
				
				<tr>
					<th class="td-label" colspan="2">Project Gallary:

</th>
				</tr>
						<?php
											  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT * FROM `project_gallery_tbl` WHERE `project_id` ='".$id."'";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
								
				<tr>
					<td>
					
<a href="update-project-gallery-image.php?action=update&id=<?php echo $row['id']; ?>"><img src="img/<?php echo $row['photo']; ?>" style="width:100px; height:100px;"></a>					</td>
				
					
						

		<td> 
                                            <a class="me-3 confirm-text" href="ddelete-project-gallery.php?id=35&amp;del=delete">
                                                <img src="../assets/img/icons/delete.svg" alt="img">
                                            </a>
											 <a class="me-3" href="update-project-gallery-image.php?action=update&id=<?php echo $row['id']; ?>">
                                                <img src="../assets/img/icons/edit.svg" alt="img">
                                            </a>
											
											</td>
					
				</tr>
				
								
				<?php }?>
				
								
				
				
								
				
				
								</tbody></table>
				
				
				
				
            <!-- End crancy Table -->
          </div>
        </div>
        <!-- End Dashboard Inner -->
      </div>
    </div>
  </div>
  </section>
  <!-- End crancy Dashboard -->
</div>
<!--  Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/charts.js"></script>
<script src="js/final-countdown.min.js"></script>
<script src="js/fancy-box.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/datatables.min.js"></script>
<script src="js/circle-progress.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/pikaday.min.js"></script>
<script src="js/main.js"></script>
<script>
      $(document).ready(function () {
        $("#crancy-table__main").DataTable({
          searching: true, // Enable search functionality
          info: true,
          lengthChange: true, // Enable the ability to change the number of records per page
          pageLength: 14,
          lengthMenu: [
            [4, 14, 25, 50, -1],
            [4, 14, 25, 50, "All"],
          ],
          language: {
            paginate: {
              next: '<i class="fas fa-angle-right"></i>',
              previous: '<i class="fas fa-angle-left"></i>',
            },
            lengthMenu: "Show result: _MENU_ ", // Customize the "Show entries" text
          },
          dom: 'rt<"crancy-table-bottom"flp><"clear">', // Set the desired layout for the table
        });
      });
    </script>
</body>
</html>
