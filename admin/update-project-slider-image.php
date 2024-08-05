<?php session_start();
	
	if(!isset($_SESSION['id'],$_SESSION['user_role_id'],$_SESSION['email'],$_SESSION['company_name'],$_SESSION['name']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}		
	
	require_once('inc/config.php');
	
	
	if(isset($_REQUEST['submit']) && $_REQUEST['submit'] =='Update'){
                  

$id = $_REQUEST['id'];

    	//$user_role_id = $_POST['user_role_id'];
		    	//$user_id = $_POST['user_id'];

	 $photo = $_FILES['photo']['name'];
	  $filename1 = time()."-".rand(1000, 9999)."-".$photo;												 
 
		if(!empty($filename1)){
			move_uploaded_file($_FILES['photo']['tmp_name'], 'img/'.$filename1);	
		}
			
										        
 							         
						    				  $project_id = $_POST['project_id'];
		    				   					
		    				   						
		    
    // Validate confirm password
   

// Create connection
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$sql = "update `project_slider_tbl` set `photo` = '".$filename1."'  where `id` = '".$id."'";

if ($link->query($sql) === TRUE) {
	header("Location: view-all-project-details.php?action=views&id=$project_id");
} else {
    echo "Error updating record: " . $link->error;
}
}
	
	
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
    <title>Update Project Image</title>

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
		  
		   <?php
						  $id = isset($_GET['id'])?mysqli_real_escape_string($link,$_GET['id']):'';

                    $sql = "SELECT * FROM   project_slider_tbl	  WHERE id='".$id."'";
                     $result = $link->query($sql);
					 $row = $result->fetch_assoc()
                      ?>
            <div class="col-xxl-8 col-12 crancy-main__column">
              <div class="crancy-body">
                <!-- Dashboard Inner -->
                <div class="crancy-dsinner">
 <form  method="post"  enctype="multipart/form-data">
 
   <input
                              class="crancy__item-input"  value="<?php echo $row['project_id']; ?>"
                              type="hidden" name="project_id"
                              placeholder=""
                              required="required"
                            />
                    <div class="row">
                      <div class="col-lg-12 col-12 mg-top-30">
                        <!-- Product Card -->
                        <div class="crancy-product-card">
                          <h4 class="crancy-product-card__title">
                           Update Project  Slider Image
                            <a href="#"><img src="img/alert-circle.svg" /></a>
                          </h4>
						  
						  <div class="row">
						  
						  
						  <div class="col-lg-6">
						  <div class="crancy__item-form--group mg-top-25">
                            <label
                              class="crancy__item-label crancy__item-label-product"
                              >	Image</label
                            >
                            <input
                              class="crancy__item-input"  value="<?php echo $row['photo']; ?>"
                              type="file" name="photo"
                              placeholder=""
                              required="required"
                            />
                          </div>
						  </div>
						  
						  
						  <div class="col-lg-12">
						  <button class="crancy-btn mg-top-20" type="submit" name="submit" value="Update">
                          Submit
                        </button>
						</div>
						  </div>
						  
                          
                          
                          
                        </div>
                        <!-- End Product Card -->
                      </div>
                      
                      
                      
                    </div>
                  </form>
                </div>
                <!-- End Dashboard Inner -->
              </div>
            </div>

            
          </div>
        </div>
      </section>
      <!-- End crancy Dashboard -->
    </div>

    <!-- Dashra Scripts -->
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
    <script src="js/jquery-jvectormap.html"></script>
    <script src="js/jvector-map.html"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/pikaday.min.js"></script>
    <script src="js/main.js"></script>

    <script>
      $(document).ready(function () {
        $("#crancy-table__main").DataTable({
          searching: true, // Enable search functionality
          info: true,
          lengthChange: true, // Enable the ability to change the number of records per page
          pageLength: 8,
          lengthMenu: [
            [8, 14, 25, 50, -1],
            [8, 14, 25, 50, "All"],
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
    <script>
      var picker = new Pikaday({ field: document.getElementById("dateInput") });
      // Create a new instance of Pikaday for the date-input field
      const picker1 = new Pikaday({
        field: document.getElementById("date-input"),
        format: "DD MMM", // Set the desired format
        toString(date, format) {
          const day = date.getDate();
          const month = date.toLocaleString("default", { month: "short" });
          const formattedDate = `${day} ${month}`;
          return formattedDate;
        },
      });

      // Create another instance of Pikaday for the dateInput field
      const picker2 = new Pikaday({
        field: document.getElementById("dateInput"),
        // ... other options for the dateInput picker
      });
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var calendarEl = document.getElementById("crancy-calender");
        var calendar = new FullCalendar.Calendar(calendarEl, {
          defaultView: "timeGridWeek",
          contentHeight: "auto",
          height: "100%",
          fixedWeekCount: false,
          showNonCurrentDates: true,
          columnHeaderFormat: {
            week: "ddd",
          },
        });
        calendar.render();
      });
    </script>

    <script>
      jQuery(document).ready(function ($) {
        $(".circle__one").circleProgress({
          size: 82,
          thickness: 8,
          lineCap: "round",
          fill: {
            // the fill color and border radius of the progress bar
            color: "#194BFB",
            borderRadius: "5px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 5,
            borderRadius: "315px",
          },
          emptyFill: "#CEE6FF", // the background color of the progress bar
        });

        $(".circle__two").circleProgress({
          lineCap: "round",
          fill: {
            // the fill color and border radius of the progress bar
            color: "#EF5DA8",
            borderRadius: "50px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 50,
            borderRadius: "50px",
          },
          emptyFill: "#FCDFEE", // the background color of the progress bar
        });

        $(".circle__three").circleProgress({
          lineCap: "round",
          fill: {
            // the fill color and border radius of the progress bar
            color: "#27AE60",
            borderRadius: "50px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 50,
            borderRadius: "50px",
          },
          emptyFill: "#D4EFDF", // the background color of the progress bar
        });

        $(".circle__four").circleProgress({
          lineCap: "round",
          fill: {
            // the fill color and border radius of the progress bar
            color: "#9B51E0",
            borderRadius: "50px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 50,
            borderRadius: "50px",
          },
          emptyFill: "#EBDCF9", // the background color of the progress bar
        });

        $(".circle_side_one").circleProgress({
          startAngle: -Math.PI / 1,
          lineCap: "round",
          size: 250,
          fill: {
            // the fill color and border radius of the progress bar
            color: "#9B51E0",
            borderRadius: "10px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 190,
            borderRadius: "10px",
          },
          emptyFill: "#D7B9F3", // the background color of the progress bar
        });

        $(".circle_side_two").circleProgress({
          startAngle: -Math.PI / 3,
          lineCap: "round",
          size: 250,
          fill: {
            // the fill color and border radius of the progress bar
            color: "#0A82FD",
            borderRadius: "50px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 190,
            borderRadius: "50px",
          },
          emptyFill: "#9DCDFE", // the background color of the progress bar
        });

        $(".circle_side_three").circleProgress({
          startAngle: -Math.PI / 2,
          lineCap: "round",
          size: 250,
          fill: {
            // the fill color and border radius of the progress bar
            color: "#F2C94C",
            borderRadius: "50px",
          },
          border: {
            // the border color, width, and border radius of the progress bar
            color: "#000",
            width: 190,
            borderRadius: "50px",
          },
          emptyFill: "#FAE9B7", // the background color of the progress bar
        });
      });
    </script>
    <script>
      // Chart One
      const ctx = document.getElementById("myChart_one").getContext("2d");
      const myChart_one = new Chart(ctx, {
        type: "bar",

        data: {
          labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          datasets: [
            {
              label: "AVG Sale",
              data: [55, 70, 25, 65, 50, 70, 50, 65, 80, 75, 45, 70],
              backgroundColor: [
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#0A82FD",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
              ],
              hoverBackgroundColor: "#0A82FD",
              fill: true,
              tension: 0.4,
              borderWidth: 0,
              borderSkipped: false,
              borderRadius: 8,
              borderRadius: {
                topLeft: 8, // Apply border radius to the top-left corner
                topRight: 8, // Apply border radius to the top-right corner
                bottomLeft: 0, // Keep bottom-left corner square
                bottomRight: 0, // Keep bottom-right corner square
              },
              barPercentage: 0.8,
              categoryPercentage: 0.5,
            },
            {
              label: "Total Sell",
              data: [45, 65, 15, 70, 45, 65, 55, 55, 65, 65, 60, 65],
              backgroundColor: [
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#F2C94C",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
                "#E8EDFF",
              ],
              hoverBackgroundColor: [
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
                "#F2C94C",
              ],
              borderWidth: 0,
              borderSkipped: false,
              borderRadius: 8,
              borderRadius: {
                topLeft: 8, // Apply border radius to the top-left corner
                topRight: 8, // Apply border radius to the top-right corner
                bottomLeft: 0, // Keep bottom-left corner square
                bottomRight: 0, // Keep bottom-right corner square
              },
              barPercentage: 0.8,
              categoryPercentage: 0.5,
            },
          ],
        },

        options: {
          maintainAspectRatio: false,
          responsive: true,
          scales: {
            x: {
              ticks: {
                color: "#5D6A83",
              },
              grid: {
                display: false,
                drawBorder: false,
                color: "#D7DCE7",
              },
            },
            y: {
              ticks: {
                color: "#5D6A83",
                callback: function (value, index, values) {
                  return (value / 10) * 10 + "%";
                },
              },
              grid: {
                drawBorder: false,
                color: "#D7DCE7",
                borderDash: [5, 5],
              },
            },
          },
          plugins: {
            tooltip: {
              padding: 10,
              displayColors: true,
              yAlign: "bottom",
              backgroundColor: "#fff",
              titleColor: "#000",
              titleFont: { weight: "normal" },
              bodyColor: "#2F3032",
              cornerRadius: 12,
              boxPadding: 3,
              usePointStyle: true,
              borderWidth: 0,
              font: {
                size: 14,
              },
              caretSize: 9,
              bodySpacing: 100,
            },
            legend: {
              position: "top",
              display: false,
            },
            title: {
              display: false,
              text: "Sell History",
            },
          },
        },
      });

      // Chart Two
      const ctx_two = document.getElementById("myChart_two").getContext("2d");

      const myChart_two = new Chart(ctx_two, {
        type: "doughnut",

        data: {
          labels: ["Website", "Google", "Others"],
          datasets: [
            {
              data: [50, 20, 30],
              backgroundColor: ["#436CFF", "#F7CA16", "#F7F8FA"],
              hoverOffset: 2,
              borderWidth: 0,
            },
          ],
        },

        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              position: "top",
              display: false,
            },
            title: {
              display: false,
              text: "Sell History",
            },
            tooltip: {
              enabled: false, // Set enabled to false to hide data labels on hover
            },
          },
        },
      });
    </script>
  </body>

</html>
