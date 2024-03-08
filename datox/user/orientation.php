<?php 
 include 'include/connection.php';
 session_start();
 if(isset($_POST['submitGender'])){
    $_SESSION['gender'] = $_POST['gender'];
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Title -->
	<title>Moaki Paris</title>

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
    
	<!-- Globle Stylesheets -->
	<link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    
	<!-- Stylesheets -->
    <link rel="stylesheet" class="main-css" type="text/css" href="assets/css/style.css">
    
    <!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>   
<body class="bg-white"  data-theme-color="color-primary-2">
<div class="page-wrapper">
	<!-- Preloader -->
	<div id="preloader">
		<div class="loader">
			<div class="load-circle"><div></div><div></div></div>
		</div>
	</div>
    <!-- Preloader end-->
     <form method="POST" enctype="multipart/form-data" action="intrested.php">
    
    <!-- Page Content -->
    <div class="page-content">
		<div class="container">
			<div class="account-area style-2">
				<a href="javascript:void(0);" class="back-btn">
					<i class="icon feather icon-arrow-left"></i>
				</a>
				<div class="section-head ps-0">
					<h2>Votre orentiation</h2>
				</div>
				<div class="form-check mb-3">
					<input class="form-check-input" type="checkbox" name="straight"  value="1" id="flexCheck1">
					<label class="form-check-label" for="flexCheck1">
						Hétro
					</label>
				</div>
				<div class="form-check mb-3">
					<input class="form-check-input" type="checkbox" name="gay" value="1" id="flexCheck2">
					<label class="form-check-label" for="flexCheck2">
						Gay
					</label>
				</div>
				<div class="form-check mb-3">
					<input class="form-check-input" type="checkbox" name="lesbian" value="1" id="flexCheck3">
					<label class="form-check-label" for="flexCheck3">
						Lesbienne
					</label>
				</div>
				<div class="form-check mb-3">
					<input class="form-check-input" type="checkbox" name="bisexual" value="1" id="flexCheck4">
					<label class="form-check-label" for="flexCheck4">
						Bisexual
					</label>
				</div>
				<div class="form-check mb-3">
					<input class="form-check-input" type="checkbox" name="asexual" value="1" id="flexCheck5">
					<label class="form-check-label" for="flexCheck5">
						Asexual
					</label>
				</div>
				<div class="form-check mb-3">
					<input class="form-check-input" type="checkbox" name="queer" value="1" id="flexCheck6">
					<label class="form-check-label" for="flexCheck6">
						Queer
					</label>
				</div>
				<div class="form-check mb-3">
					<input class="form-check-input" type="checkbox" name="demisexual" value="1" id="flexCheck7">
					<label class="form-check-label" for="flexCheck7">
						Demisexual
					</label>
				</div>	
			</div>
        </div>
    </div>
    <!-- Page Content End -->
	<!-- Footer -->
    <div class="footer fixed bg-white p-b15">
		<div class="container">
			<div class="form-check mb-3 ms-3">
				<input class="form-check-input" type="checkbox" name="showOrien" value="1" id="checkbox1">
				<label class="form-check-label" for="checkbox1">
					Montrer sur mon profil
 				</label>
			</div>
			<button type="submit" name="orientation" class="btn btn-lg btn-gradient w-100 dz-flex-box btn-shadow rounded-xl">Suivant</button>
		</div>
	</div>
	<!-- Footer -->

     </form>
</div>
<!--**********************************
    Scripts
***********************************-->
<script src="assets/js/jquery.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="assets/js/settings.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>