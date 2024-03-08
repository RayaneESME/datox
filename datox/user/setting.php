<?php 
 include 'include/connection.php';
 include 'include/session.php';
 if (isset($_POST['submitBio'])) {
 	$userId=$_GET['userId'];
 	$bio=$_POST['bio'];
 	$update="UPDATE `users` SET `bio`='$bio' WHERE id='$userId' ";
 	$run=mysqli_query($connect,$update);
 	if ($run) {
 		echo 'Update Bio';
 	}else{
 		echo 'Not update Buo';
 	}
 }
 if (isset($_POST['submitAddress'])) {
 	$userId=$_GET['userId'];
 	$address=$_POST['address'];
 	$country=$_POST['country'];
 	$update = "UPDATE `users` SET `address`='$address', `country`='$country' WHERE id='$userId'";
 	$run=mysqli_query($connect,$update);
 	if ($run) {
 		echo 'Update Address';
 	}else{
 		echo 'Not update Address';
 	}
 }
  if (isset($_POST['submitPhone'])) {
 	$userId=$_GET['userId'];
 	$phone=$_POST['phone'];
 	$update="UPDATE `users` SET `phone`='$phone' WHERE id='$userId' ";
 	$run=mysqli_query($connect,$update);
 	if ($run) {
 		echo 'Update phone';
 	}else{
 		echo 'Not update phone';
 	}
 }
 if (isset($_POST['submitEmail'])) {
 	$userId=$_GET['userId'];
 	$email=$_POST['email'];
 	$update="UPDATE `users` SET `email`='$email' WHERE id='$userId' ";
 	$run=mysqli_query($connect,$update);
 	if ($run) {
 		echo 'Update email';
 	}else{
 		echo 'Not update email';
 	}
 }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Title -->
	<title>Moaki</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
	<meta name="theme-color" content="#FF50A2">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow"> 
	<meta name="keywords" content="android, ios, mobile, application template, progressive web app, ui kit, multiple color, dark layout, match, partner, perfect match, dating app, dating, couples, dating kit, mobile app">
	<meta name="description" content="Transform your dating app vision into reality with our 'Dating Kit' - a powerful Bootstrap template for mobile dating applications. Seamlessly integrate captivating features, stylish UI components, and user-friendly functionality. Launch your dating app efficiently and elegantly using the Dating Kit template.">
	<meta property="og:title" content="Dating Kit - Dating Mobile App Template ( Bootstrap + PWA )">
	<meta property="og:description" content="Transform your dating app vision into reality with our 'Dating Kit' - a powerful Bootstrap template for mobile dating applications. Seamlessly integrate captivating features, stylish UI components, and user-friendly functionality. Launch your dating app efficiently and elegantly using the Dating Kit template.">
	<meta property="og:image" content="https://datingkit.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Favicons Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
	
    
    <!-- Global CSS -->
	<link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/nouislider/nouislider.min.css">
	<link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    
	<!-- Stylesheets -->
    <link rel="stylesheet" class="main-css" type="text/css" href="assets/css/style.css">
	
    <!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>   
<body data-theme-color="color-primary-2">
<div class="page-wrapper">
    
	<!-- Preloader -->
	<div id="preloader">
		<div class="loader">
			<div class="load-circle"><div></div><div></div></div>
		</div>
	</div>
    <!-- Preloader end-->
	
	<!-- Header -->
		<header class="header header-fixed bg-white">
			<div class="container">
				<div class="header-content">
					<div class="left-content me-3">
						<a href="javascript:void(0);" class="back-btn">
							<i class="icon feather icon-chevron-left"></i>
						</a>
						<h6 class="title">Paramètres</h6>
					</div>
					<div class="mid-content">
					</div>
					<div class="right-content">
					</div>
				</div>
			</div>
		</header>
	<!-- Header -->
	
	<!-- Page Content Start -->
	<?php 
	 $userId=$_GET['userId'];
      $query="SELECT * FROM `users` WHERE id='$userId' ";
      $result=mysqli_query($connect,$query);
      if (mysqli_num_rows($result)>0) {
      	$row=mysqli_fetch_assoc($result);
      
	 ?>
	<div class="page-content space-top">
		<div class="container"> 

			<h6 class="title">Paramètres du compte</h6>
			<div class="card style-4">
				<div class="card-header">
					<h6 class="title mb-0 font-14">Téléphone</h6>
				</div>
				<div class="card-body">
					<a href="javascript:void(0);" class="setting-input" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom">
						<i class="icon dz-flex-box feather icon-phone-call"></i>
						<span class="me-1"><?php echo $row['countryCode'] ?></span>
						<span><?php echo $row['phone'] ?></span>
						<i class="icon feather dz-flex-box icon-chevron-right ms-auto me-0"></i>
					</a>
				</div>
			</div>
			<div class="card style-4">
				<div class="card-header">
					<h6 class="title mb-0 font-14">E-mail</h6>
				</div>
				<div class="card-body">
					<a href="javascript:void(0);" class="setting-input" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">
						<i class="icon dz-flex-box feather icon-mail"></i>
						<span><?php echo $row['email'] ?></span>
						<i class="icon feather dz-flex-box icon-chevron-right ms-auto me-0"></i>
					</a>
				</div>
			</div>
			<div class="card style-4">
				<div class="card-header">
					<h6 class="title mb-0 font-14">Bio</h6>
				</div>
				<div class="card-body">
					<a href="javascript:void(0);" class="setting-input" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom22" aria-controls="offcanvasBottom">
						<i class="fa-regular fa-user"></i>
						<span><?php echo $row['bio'] ?></span>
						<i class="icon feather dz-flex-box icon-chevron-right ms-auto me-0"></i>
					</a>
				</div>
			</div>
			<h6 class="title">Paramètres de recherche</h6>
			<div class="card style-4">
				<div class="card-header">
					<h6 class="title mb-0 font-14">Localisation</h6>
				</div>
				<div class="card-body">
					<a href="javascript:void(0);" class="setting-input" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom3" aria-controls="offcanvasBottom">
						<i class="icon dz-flex-box feather icon-map-pin"></i>
						<span class="me-1"><?php echo $row['address'] ?></span>
						<span><?php echo $row['country'] ?></span>
						<i class="icon feather dz-flex-box icon-chevron-right ms-auto me-0"></i>
					</a>
				</div>
			</div>
			<h6 class="title">Autres</h6>
			<div class="card style-4">
				<div class="card-header">
					<h6 class="title mb-0 font-14">Distance</h6>
					<div class="title font-w600 font-16">
						<span class="example-val title slider-margin-value-min"></span>
						<span class="example-val title slider-margin-value-max"></span>
					</div>
				</div>
				<div class="card-body py-4">
					<div class="range-slider style-1 w-100">
						<div id="slider-tooltips3"></div>
					</div>
				</div>
			</div>
			<div class="card style-4">
				<div class="card-header">
					<h6 class="title mb-0 font-14">Montrez-moi</h6>
				</div>
				<div class="card-body">
					<a href="javascript:void(0);" class="setting-input" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4" aria-controls="offcanvasBottom">
						<span id="selectedInterest"><?php echo $row['interest'] ?></span>
						<i class="icon feather dz-flex-box icon-chevron-right ms-auto me-0"></i>
					</a>
				</div>
			</div>
			<div class="card style-4 mb-0">
				<div class="card-header">
					<h6 class="title mb-0 font-14">Age</h6>
					<div class="title font-w600 font-16">
						<span class="example-val title slider-margin-value-min"></span>
						<span class="example-val title slider-margin-value-max"></span>
					</div>
				</div>
				<div class="card-body py-4">
					<div class="range-slider style-1 w-100">
						<div id="slider-tooltips4"></div>
					</div>
				</div>
			</div>
		</div> 
	</div>
	
	<!-- Page Content End -->
	<?php include 'include/offcanvas.php'; ?>
	<?php } ?>

</div> 

<!--**********************************
    Scripts
***********************************-->
<script type="text/javascript" src="include/offcanvas.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="assets/vendor/wnumb/wNumb.js"></script><!-- WNUMB -->
<script src="assets/vendor/nouislider/nouislider.min.js"></script><!-- NOUSLIDER MIN JS-->
<script src="assets/js/noui-slider.init.js"></script><!-- NOUSLIDER MIN JS-->
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="assets/js/settings.js"></script>
<script src="assets/js/custom.js"></script>
<script type="text/javascript">
	  $(document).ready(function() {
    $('input[name="interest"]').change(function() {
        if (this.checked) {
            var interest = $(this).val();
            var userId = '<?php echo $_GET['userId'] ?>';
            $.ajax({
                url: 'include/update_interest.php',
                type: 'POST',
                data: { userId: userId, interest: interest },
                success: function(response) {
                    console.log(response);
                    // Handle success response
                    $('#selectedInterest').text(interest); // Update element with selected interest

                    // Close the offcanvas
                    $('.offcanvas').offcanvas('hide');
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    // Handle error
                }
            });
        }
    });
});


</script>
</body>
</html>