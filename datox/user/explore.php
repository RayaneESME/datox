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
	<link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    
	<!-- Stylesheets -->
    <link rel="stylesheet" class="main-css" type="text/css" href="assets/css/style.css">
	
    <!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>   
<body class="header-large" data-theme-color="color-primary-2">
<div class="page-wrapper">
    
	<!-- Preloader -->
	<div id="preloader">
		<div class="loader">
			<div class="load-circle"><div></div><div></div></div>
		</div>
	</div>
    <!-- Preloader end-->
	
	<!-- Header -->
	<header class="header header-fixed border-0 style-2">
			<div class="container">
				<div class="header-content">
					<div class="left-content header-logo logo-lg">
						<a href="index.php">
							<img src="assets/images/moaki.png" alt="">
						</a>
					</div>
					<div class="mid-content">
					</div>
					<div class="right-content d-flex gap-2">
						
					</div>
				</div>
			</div>
		</header>
<!-- Header -->
	
	<!-- Page Content Start -->
	<div class="page-content space-top p-b60">
		<div class="container py-0">
			<div class="row">
				<?php 
				  $emailId=$_GET['emailId'];
                  $query="SELECT * FROM `usergroup` WHERE email = '$emailId' ";
                  $result=mysqli_query($connect,$query);
                  if (mysqli_num_rows($result)>0) {
                    while ($row=mysqli_fetch_assoc($result)) {
                      $groupId = $row['usergroupId'];
                      $groupQuery = "SELECT * FROM `groups` WHERE id = '$groupId'";
                      $groupResult = mysqli_query($connect, $groupQuery);
                      if (mysqli_num_rows($groupResult) > 0) {
                        $group = mysqli_fetch_assoc($groupResult);
                  ?>
				<div class="col-md-6 col-12 mb-2">
					<div class="dz-media-card style-3">
						<div class="dz-media">
							<img src="<?php echo $group['groupImage'] ?>" style="height: 180px;" alt="">
						</div>
						<div class="dz-content">
							<h3 class="title"><?php echo $group['groupName'] ?></h3>
							<p></p>
							<a href="javascript:void(0);" class="btn btn-sm btn-light rounded-xl">REJOINDRE</a>
						</div>
					</div>
				</div>
				<?php 
                        }
                    }
                  } ?>
			</div>
		</div>
	</div>
	<!-- Page Content End -->
	<!-- Menubar -->
	<?php include 'include/footer.php'; ?>
	<!-- Menubar -->
</div>  
<!--**********************************
    Scripts
***********************************-->
<script src="assets/js/jquery.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script><!-- Swiper -->
<script src="assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="assets/js/settings.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
