<?php include 'include/connection.php'; 
 session_start();
if(isset($_POST['submitPhone'])){
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['countryCode'] = $_POST['countryCode'];
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
    
	<!-- Globle Stylesheets -->
	<link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    
	<!-- Stylesheets -->
    <link rel="stylesheet" class="main-css" type="text/css" href="assets/css/style.css">
    
    <!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>   
<body class="bg-white" data-theme-color="color-primary-2">
<div class="page-wrapper">
	<!-- Preloader -->
	<div id="preloader">
		<div class="loader">
			<div class="load-circle"><div></div><div></div></div>
		</div>
	</div>
    <!-- Preloader end-->

    <!-- Page Content -->
    <div class="page-content">
		<div class="container">
			<div class="account-area style-2">
				<a href="javascript:void(0);" class="back-btn">
					<i class="icon feather icon-arrow-left"></i>
				</a>
				<div class="section-head ps-0 border-bottom">
					<h2 class="mb-2">Bienvenue sur Datox.</h2>
				</div>
			</div>
			<?php 
                $query="SELECT * FROM `privacy`";
                $result=mysqli_query($connect,$query);
                if (mysqli_num_rows($result)>0) {
                $row = mysqli_fetch_assoc($result);
                       
                ?>
			<div class="policy-content py-1">
				<?php echo base64_decode($row['privacyContent']); ?>
			</div>
		<?php } ?>
			<!-- <ul class="policy-content">
				<li>
					<h4>Be yourself.</h4>
					<p>Lorem ipsum lorem ipsum lorem ipsum.</p>
				</li>
				<li>
					<h4>Stay safe.</h4>
					<p>Lorem ipsum lorem ipsum lorem ipsum.</p>
				</li>
				<li>
					<h4>Play it cool.</h4>
					<p>Lorem ipsum lorem ipsum lorem ipsum.</p>
				</li>
				<li>
					<h4>Be Proactive.</h4>
					<p>Lorem ipsum lorem ipsum lorem ipsum.</p>
				</li>
			</ul> -->
        </div>
    </div>
    <!-- Page Content End -->
	<!-- Footer -->
    <div class="footer fixed bg-white p-b15">
		<div class="container">
			<a href="first-name.php" class="btn btn-lg btn-gradient w-100 dz-flex-box btn-shadow rounded-xl">Suivant</a>
		</div>
	</div>
	<!-- Footer -->
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