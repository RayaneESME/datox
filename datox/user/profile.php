<?php
include 'include/connection.php';
include 'include/session.php';
$userId=$_GET['userId'];
$query = "SELECT * FROM `users` WHERE id='$userId'";

$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $completedFields = 0;
    $totalFields = 14;

    if (!empty($row['fullName'])) {
        $completedFields++;
    }
    if (!empty($row['phone'])) {
        $completedFields++;
    }
    if (!empty($row['email'])) {
        $completedFields++;
    }
    if (!empty($row['bio'])) {
        $completedFields++;
    }
    if (!empty($row['gender'])) {
        $completedFields++;
    }
    if (!empty($row['dateBirth'])) {
        $completedFields++;
    }
    if (!empty($row['password'])) {
        $completedFields++;
    }
    if (!empty($row['lookfor'])) {
        $completedFields++;
    }
    if (!empty($row['interest'])) {
        $completedFields++;
    }
    if (!empty($row['youInto'])) {
        $completedFields++;
    }
    // if (!empty($row['language'])) {
    //     $completedFields++;
    // }
    if (!empty($row['pic1'])) {
        $completedFields++;
    }
    if (!empty($row['pic2'])) {
        $completedFields++;
    }
    if (!empty($row['address'])) {
        $completedFields++;
    }
    if (!empty($row['country'])) {
        $completedFields++;
    }

    $percentage = ($completedFields / $totalFields) * 100;
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
	
    
    <!-- Global CSS -->
	<link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
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
		<header class="header header-fixed border-0 bg-white style-2">
		<div class="container">
			<div class="header-content">
				<div class="left-content header-logo logo-lg">
					<a href="index.php">
						<img src="assets/images/moaki.png" alt="">
					</a>
				</div>
				<div class="mid-content">
				</div>
				<div class="right-content">
					<a href="javascript:void(0);" class="font-22">
						<i class="flaticon flaticon-computer-security-shield"></i>
					</a>	
				</div>
			</div>
		</div>
	</header>
	<!-- Header -->
	
	<!-- Page Content Start -->
	<?php 
      $query="SELECT * FROM `users` WHERE id='$userId' ";
      $result=mysqli_query($connect,$query);
      if (mysqli_num_rows($result)>0) {
      	$row=mysqli_fetch_assoc($result);
         
	 ?>
	<div class="page-content space-top p-b60">
		<div class="container pt-0"> 
			<div class="profile-area">
				<div class="main-profile">
					<div class="about-profile">
						<a href="setting.php?userId=<?php echo $row['id'] ?>" class="setting dz-icon">
							<i class="flaticon flaticon-setting"></i>
						</a>
						<div class="media rounded-circle">
						    <img src="<?php echo $row['pic1']; ?>" alt="profile-image">
						    <svg class="radial-progress m-b20" data-percentage="<?php echo $percentage; ?>" viewBox="0 0 80 80">
						        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
						        <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: <?php echo 100 - $percentage; ?>;"></circle>
						    </svg>
						    <div class="data-fill style-2"><span>Complet à <?php echo intval($percentage); ?>%</span></div>

						</div>
						<a href="edit-profile.php?userId=<?php echo $row['id'] ?>" class="edit-profile dz-icon">
							<i class="flaticon flaticon-pencil-2"></i>
						</a>
					</div>
					<div class="profile-detail">
						<h4 class="name"><?php echo $row['fullName'] ?></h4>
						<p class="mb-0"><i class="icon feather icon-map-pin me-1"></i> <?php echo $row['country'] ?></p>
						<a class="pt-2" href="logout.php">Logout</a>
					</div>
				</div>
				<div class="row g-2 mb-5">
					<!-- 
					<div class="col-4">
						<div class="card style-2">
							<div class="card-body">
								<a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">	
									<div class="card-icon">
										<i class="flaticon flaticon-star-1"></i>
									</div>
									<div class="card-content">
										<p>0 Super Likes</p>
									</div>
									<i class="icon feather icon-plus"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card style-2">
							<div class="card-body">
								<div class="card-icon">
									<i class="flaticon flaticon-shuttle"></i>
								</div>
								<div class="card-content">
									<p>Boosts</p>
								</div>
								<i class="icon feather icon-plus"></i>
							</div>
						</div>
					</div>
				 -->
					<div class="col-12">
						<div class="card style-2">
							<div class="card-body">
								<a href="explore.php?emailId=<?php echo $row['email'] ?>">
									<div class="card-icon">
										<i class="flaticon flaticon-bell"></i>
									</div>
									<div class="card-content">
										<?php 
								    $emailId = $_SESSION['email'];
								    $query1 = "SELECT COUNT(*) AS total FROM usergroup WHERE email = '$emailId'";
								    $result1 = mysqli_query($connect, $query1);
								    if (mysqli_num_rows($result1) > 0) {
								        $row1 = mysqli_fetch_assoc($result1);
								    ?>
								    <p><?php echo $row1['total'] ?> Groupes</p>
								    <?php } ?>
									</div>
									<i class="icon feather icon-plus"></i>
								</a>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div> 
	</div>
    
	<!-- Page Content End -->
	

	<!-- Like OffCanvas -->
	
	<!-- Menubar -->
	
	<?php } ?>
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