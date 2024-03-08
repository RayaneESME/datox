<?php 
 include 'include/connection.php';
 include 'include/session.php';
$userId = $_SESSION['userId'];

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
    
    <!-- Global CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
	<link rel="stylesheet" href="assets/vendor/nouislider/nouislider.min.css">
	<link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    
	<!-- Stylesheets -->
    <link rel="stylesheet" class="main-css" type="text/css" href="assets/css/style.css">
	
    <!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>   
<body class="bg-white overflow-hidden header-large" data-theme-color="color-primary-2">
<div class="page-wrapper">
    
	<!-- Preloader -->
	<div id="preloader">
		<div class="loader">
			<div class="load-circle"><div></div><div></div></div>
		</div>
	</div>
    <!-- Preloader end-->
	
	<!-- Header -->	
		<?php include 'include/header.php'; ?>
	<!-- Header -->
	
	
	<!-- Page Content Start -->
	<div class="page-content space-top p-b65">
		<div class="container fixed-full-area">
			<div class="dzSwipe_card-cont dz-gallery-slider">
                 <?php 
			      $query="SELECT * FROM `users`";
			      $result=mysqli_query($connect,$query);
			      if (mysqli_num_rows($result)>0) {
			      	while ($row=mysqli_fetch_assoc($result)) {
			      		
			     
				 ?>
				<div class="dzSwipe_card">
					<div class="dz-media">
						<img src="<?php echo $row['pic1'] ?>" alt="">
					</div>
					<div class="dz-content">
						<div class="left-content">
							<span class="badge badge-primary d-inline-flex gap-1 mb-2"><i class="icon feather icon-map-pin"></i><?php echo $row['country'] ?></span>
							<h4 class="title"><a href="profile-detail.php?userId=<?php echo $row['id'] ?>"><?php echo $row['fullName'] ?></a></h4>
							<ul class="intrest">
								<?php 
								
				                  $query1="SELECT * FROM `groups`  ";
				                  $result1=mysqli_query($connect,$query1);
				                  if (mysqli_num_rows($result1)>0) {
				                   	while ($row1=mysqli_fetch_assoc($result1)) {
				                   	 
                                 ?>
								<li><span class="badge"><?php echo $row1['groupName'] ?></span></li>
								
								<?php 	
				                   	}
				                   } ?>	
							</ul>
						</div>
						<a href="javascript:void(0);" class="dz-icon dz-sp-like"><i class="flaticon flaticon-star-1"></i></a>
					</div>
					<div class="dzSwipe_card__option dzReject">
						<i class="fa-solid fa-xmark"></i>
					</div>
					<div class="dzSwipe_card__option dzLike">
						<i class="fa-solid fa-check"></i>
					</div>
					<div class="dzSwipe_card__option dzSuperlike">
						<h5 class="title mb-0">Super Like</h5>
					</div>
					<div class="dzSwipe_card__drag"></div>
				</div>
				<?php }
				} ?>
				
			</div>
		</div>
	</div>
	<!-- Page Content End -->
	
	<!-- Menubar -->
	<?php include 'include/footer.php'; ?>
	<!-- Menubar -->

	<!--  Setting OffCanvas -->
    <div class="offcanvas offcanvas-bottom container p-0" tabindex="-1" id="settingCanvas">
		<button type="button" class="btn-close drage-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		<div class="offcanvas-header share-style m-0">
			<h5 class="title mb-0">Paramètres de recherche</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
		</div>
        <div class="offcanvas-body">
			<div class="dz-slider mb-3">
				<div class="slider-head">
					<h6 class="title mb-0">Distance</h6>
					<div class="title font-w600 font-16">
						<span class="example-val title slider-margin-value-min"></span>
						<span class="example-val title slider-margin-value-max"></span>
					</div>
				</div>
				<div class="slider-body">
					<div class="range-slider style-1 w-100">
						<div id="slider-tooltips3"></div>
					</div>
				</div>
			</div>
			<div class="show-me mb-3">
				<h6 class="title">Montrez-moi</h6>
				<a href="javascript:void(0);" class="btn d-flex align-items-center justify-content-between btn-primary light py-2 px-3 font-14" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4" aria-controls="offcanvasBottom">
					<span class="text-start d-block">Femme</span>
					<i class="font-20 icon feather icon-chevron-right"></i>
				</a>
			</div>
			<div class="dz-slider">
				<div class="slider-head">
					<h6 class="title mb-0">Age</h6>
					<div class="title font-w600 font-16">
						<span class="example-val title slider-margin-value-min"></span>
						<span class="example-val title slider-margin-value-max"></span>
					</div>
				</div>
				<div class="slider-body">
					<div class="range-slider style-1 w-100">
						<div id="slider-tooltips4"></div>
					</div>
				</div>
			</div>
        </div>
    </div>
	<!--  Setting OffCanvas -->

	<!--  Show Me OffCanvas -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom4">
		<button type="button" class="btn-close drage-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		<div class="offcanvas-header share-style m-0 pb-0">
			<h5 class="title">Montrez-moi</h5>
		</div>
        <div class="offcanvas-body">
			<div class="radio style-3">
				<label class="radio-label">
					<input type="radio" checked="checked" name="radio2">
					<span class="checkmark">						
						<span class="text">Femme</span>					
					</span>
				</label>
				<label class="radio-label">
					<input type="radio" name="radio2">
					<span class="checkmark">
						<span class="text">Homme</span>				
					</span>
				</label>
				<label class="radio-label">
					<input type="radio" name="radio2">
					<span class="checkmark">
						<span class="text">Tous</span>						
					</span>
				</label>
			</div>
        </div>
    </div>
	<!--  Show Me OffCanvas -->
</div>  
<!--**********************************
    Scripts
***********************************-->
<script src="assets/js/jquery.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script><!-- Swiper -->
<script src="assets/js/tinderSwiper.min.js"></script>
<script src="assets/vendor/wnumb/wNumb.js"></script><!-- WNUMB -->
<script src="assets/vendor/nouislider/nouislider.min.js"></script><!-- NOUSLIDER MIN JS-->
<script src="assets/js/noui-slider.init.js"></script><!-- NOUSLIDER MIN JS-->
<script src="assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="assets/js/settings.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>