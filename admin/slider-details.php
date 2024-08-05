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
<title>Slider-Details</title>
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
      <div class="crancy-body">
        <!-- Dashboard Inner -->
        <div class="crancy-dsinner">
          <div class="crancy-table crancy-table--v3 mg-top-30">
            <div class="crancy-customer-filter">
              <div
                        class="crancy-customer-filter__single crancy-customer-filter__single--csearch"
                      >
                <div
                          class="crancy-header__form crancy-header__form--customer"
                        >
                  <h3>Slider Details</h3>
                </div>
              </div>
              
              
              <div class="crancy-customer-filter__single"> <a
                          href="add-slider-details.php"
                          class="crancy-customer-filter__single--button"
                        > Add Slider  </a> </div>
            </div>
            <!-- crancy Table -->
            <table id="crancy-table__main" class="crancy-table__main crancy-table__main-v3 table-bordered">
              <!-- crancy Table Head -->
              <thead class="crancy-table__head">
                <tr>
                  
                 <th>
    S.No
</th>
<th>Title Name</th>
<th>Description</th>
<th>Media </th>
<th>Status </th>

<th>Action</th>
                </tr>
              </thead>
              <!-- crancy Table Body -->
              <tbody class="crancy-table__body">
								
								
								
								
								<?php
					
                    $sql = "SELECT * FROM `sliders_tbl`";
	   
                    $query = $link->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                                    <tr>
                                        <td>
                                          <?php echo $row['id']; ?>
                                        </td>
                                        <td><?php echo $row['title_name']; ?></td>
										
										
										
										
										                                        <td><?php echo $row['description']; ?></td>
																				
																				
																					<?php
					//$cheak_status = '1'; 
										
						$cheak_status=$row['multimedia_type'];				
$t = $cheak_status;
//echo $t;

if ($t < "2") {
?>
                                                              <td><a href="update-sliders-image.php?action=update&id=<?php echo $row['id']; ?>"><img src="img/<?php echo $row['photo']; ?>" style="width:50%; height:100px;"/></a></td>
															  
															   <?php  } else {
?>
                                                              <td><a href="update-sliders-image.php?action=update&id=<?php echo $row['id']; ?>">						            <video src="img/<?php echo $row['photo'];  ?>" autoplay loop muted style="height: 106px;"></video>
</a></td>
  <?php 
  }
?>
			
															  
															  	<td><?php
					$status = $row['status']; 
$t = $status;
//echo $t;

if ($t < "2") {

 echo '<span style="color:#669900;">Active</span>';
   } else {

 echo '<span style="color: #FF0000;">DeActive</span>';

  }
?></td>



                                        <td>
                                            <a class="me-3" href="update-slider-details.php?action=update&id=<?php echo $row['id']; ?>">
                                                <img src="../assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="delete-slider-list.php?id=<?php echo $row['id']?>&del=delete">
                                                <img src="../assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>

                                    <?php }?>
                                    
                                    

                                    
                                    
                                    
                                </tbody>
              <!-- End crancy Table Body -->
            </table>
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
