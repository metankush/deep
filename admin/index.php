<?php 
session_start();

require_once('inc/config.php');

if(isset($_POST['login']))
{
	if(!empty($_POST['email']) && !empty($_POST['password']))
	{
		$email 		= trim($_POST['email']);
		 $password 	= trim($_POST['password']);
		
		//$md5Password = md5($password);
		
		$sql = "select * from tbl_users where email = '".$email."' and password = '".$password."'";
		$rs = mysqli_query($link,$sql);
		$getNumRows = mysqli_num_rows($rs);
		
		if($getNumRows == 1)
		{
			$getUserRow = mysqli_fetch_assoc($rs);
			unset($getUserRow['password']);
			
			$_SESSION = $getUserRow;
						
			header('location:dashboard.php');
			exit;
		}
		else
		{
			$errorMsg = "Wrong Username or password";
		}
	}
}

if(isset($_GET['logout']) && $_GET['logout'] == true)
{
	session_destroy();
	header("location:index.php");
	exit;
}


if(isset($_GET['lmsg']) && $_GET['lmsg'] == true)
{
	$errorMsg = "Login required to access dashboard";
}


?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->
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
<title>Login</title>
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
<body id="crancy-dark-light" class="logo-bg-img">
<div class="body-bg">
  <section class="crancy-wc crancy-wc__full crancy-bg-cover ">
    <div class="crancy-wc__form logo-bg-img">
      <!-- Welcome Banner -->
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="crancy-wc__form--middle">
            <div class="crancy-wc__form-inner">
              <div class="crancy-wc__logo"> <a href="index.html"><img src="img/logo-home.png" alt="#" /></a> </div>
              <div class="crancy-wc__form-inside">
                <div class="crancy-wc__form-middle">
                  <div class="crancy-wc__form-top">
                    <div class="crancy-wc__heading pd-btm-20">
                      <h3
                        class="crancy-wc__form-title crancy-wc__form-title__one m-0"
                      > Login to your account </h3>
					  
					   <?php 
			if(isset($errorMsg))
			{
				echo '<div class="alert alert-danger">';
				echo $errorMsg;
				echo '</div>';
				unset($errorMsg);
			}
		?>
                    </div>
                    <!-- Sign in Form -->
                    <form class="crancy-wc__form-main" action="<?php echo $_SERVER['PHP_SELF']?>" method="post"  >
                      <!-- Form Group -->
                      <div class="form-group">
                        <div class="form-group__input">
                          <input class="crancy-wc__form-input" type="email" name="email" placeholder="Email" required/>
                        </div>
                      </div>
                      <!-- Form Group -->
                      <div class="form-group">
                        <div class="form-group__input">
                          <input class="crancy-wc__form-input" placeholder="Password" id="password-field" type="password" name="password" maxlength="8" required="required"/>
                          <span class="crancy-wc__toggle"><i class="fas fa-eye" id="toggle-icon"></i ></span> </div>
                      </div>
                      <!-- Form Group -->
                      
                      <!-- Form Group -->
                      <div class="form-group mg-top-30">
                        <div class="crancy-wc__button">
                          <button class="ntfmax-wc__btn" type="submit" name="login" value="submit"> Login </button>
                        </div>
                      </div>
                      <!-- Form Group -->
                      <div class="form-group form-mg-top30">
                        <div class="crancy-wc__bottom">
                          <p class="crancy-wc__text"> Dont’t have an account ? <a href="create-account.html">Get Started</a> </p>
                        </div>
                      </div>
                    </form>
                    <!-- End Sign in Form -->
                  </div>
                  <!-- Footer Top -->
                  <!-- End Footer Top -->
                </div>
              </div>
            </div>
            <!-- End Welcome Banner -->
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!--  Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/charts.js"></script>
<script src="js/final-countdown.min.js"></script>
<script src="js/fancy-box.min.js"></script>
<!-- <script src="js/datatables.min.js"></script> -->
<script src="js/circle-progress.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/pikaday.min.js"></script>
<script src="js/main.js"></script>
<script>
      var crancyWCSlider = jQuery(".crancy-wc__slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        fade: true,
        infinite: true,
        arrows: false,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
      });
    </script>
</body>
<!-- Mirrored from zomur.vercel.app/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2024 06:19:14 GMT -->
</html>
