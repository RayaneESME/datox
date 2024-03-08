<?php 
 include 'include/connection.php';
 include 'include/session.php';
 $userId = $_SESSION['userId'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Title -->
	<title>Dating Kit - Dating Mobile App Template ( Bootstrap + PWA )</title>

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
<body class="header-large bg-white" data-theme-color="color-primary-2">
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
	<div class="page-content p-t100 p-b50">
		<div class="container">
			<!-- Nav tabs -->
			<div class="default-tab style-2">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link" data-bs-toggle="tab" href="#home1" aria-selected="false" role="tab" tabindex="-1">12 Likes</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link active" data-bs-toggle="tab" href="#profile1" aria-selected="true" role="tab">Top Picks</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade" id="home1" role="tabpanel">
						<div class="row g-2">
    <?php 
    $wishlistUser = $_SESSION['userId'];
    $query = "SELECT * FROM wishlist WHERE wishlistUser = '$wishlistUser'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $userId = $row['userId'];
           
            $userQuery = "SELECT * FROM users WHERE id = '$userId'";
            $userResult = mysqli_query($connect, $userQuery);
            if (mysqli_num_rows($userResult) > 0) {
                $userRow = mysqli_fetch_assoc($userResult);
                
                ?>
                <div class="col-6">
                    <div class="dz-media-card style-4">
                        <a href="profile-detail.php?userId=<?php echo $userRow['id'] ?>">
                            <div class="dz-media">
                                <img src="<?php echo $userRow['pic1'] ?>" alt="">
                            </div>
                            <div class="dz-content">
                                <div class="left-content">
                                    <h6 class="title"><?php echo $userRow['fullName'] ?></h6>    
                                    <span class="about"><?php echo $userRow['address'] ?></span>
                                </div>
                                <div class="dz-icon ms-auto me-0"><i class="flaticon flaticon-star-1"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
            }
        }
    } else {
        echo "No users found in wishlist.";
    }
    ?>
</div>

					</div>
					<div class="tab-pane fade active show" id="profile1" role="tabpanel">
						<div class="title-bar">
							<h6 class="title">Recently Active</h6>
						</div>
						<div class="swiper-btn-center-lr">
							<div class="swiper spot-swiper1 mb-3">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="dz-media-card style-4">
											<a href="profile-detail.php">
												<div class="dz-media">
													<img src="assets/images/w3tinder/liked/pic1.png" alt="">
												</div>
												<div class="dz-content">
													<div class="left-content">
														<h6 class="title">Richard, 22</h6>	
														<span class="active-status">Recently Active</span>
													</div>
													<div class="dz-icon ms-auto me-0"><i class="flaticon flaticon-star-1"></i></div>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dz-media-card style-4">
											<a href="profile-detail.php">
												<div class="dz-media">
													<img src="assets/images/w3tinder/liked/pic2.png" alt="">
												</div>
												<div class="dz-content">
													<div class="left-content">
														<h6 class="title">Abby, 27</h6>	
														<span class="active-status">Recently Active</span>
													</div>
													<div class="dz-icon ms-auto me-0"><i class="flaticon flaticon-star-1"></i></div>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dz-media-card style-4">
											<a href="profile-detail.php">
												<div class="dz-media">
													<img src="assets/images/w3tinder/liked/pic3.png" alt="">
												</div>
												<div class="dz-content">
													<div class="left-content">
														<h6 class="title">Javelle, 23</h6>	
														<span class="active-status">Recently Active</span>
													</div>
													<div class="dz-icon ms-auto me-0"><i class="flaticon flaticon-star-1"></i></div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="title-bar">
								<h6 class="title">Common Passion</h6>
							</div>

							<div class="swiper spot-swiper1 mb-3">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="dz-media-card style-4">
											<a href="profile-detail.php">
												<div class="dz-media">
													<img src="assets/images/w3tinder/liked/pic4.png" alt="">
												</div>
												<div class="dz-content">
													<div class="left-content">
														<h6 class="title">Kethy, 25</h6>	
														<span class="badge">photpgraphy</span>
													</div>
													<div class="dz-icon ms-auto me-0"><i class="flaticon flaticon-star-1"></i></div>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dz-media-card style-4">
											<a href="profile-detail.php">
												<div class="dz-media">
													<img src="assets/images/w3tinder/liked/pic5.png" alt="">
												</div>
												<div class="dz-content">
													<div class="left-content">
														<h6 class="title">Lucy, 22</h6>	
														<span class="badge">Instagram</span>
													</div>
													<div class="dz-icon ms-auto me-0"><i class="flaticon flaticon-star-1"></i></div>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dz-media-card style-4">
											<a href="profile-detail.php">
												<div class="dz-media">
													<img src="assets/images/w3tinder/liked/pic6.png" alt="">
												</div>
												<div class="dz-content">
													<div class="left-content">
														<h6 class="title">Charlse, 24</h6>	
														<span class="badge">Dancing</span>
													</div>
													<div class="dz-icon ms-auto me-0"><i class="flaticon flaticon-star-1"></i></div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="title-bar">
								<h6 class="title">Recommended</h6>
							</div>

							<div class="swiper spot-swiper1 mb-3">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="dz-media-card style-4">
											<a href="profile-detail.php">
												<div class="dz-media">
													<img src="assets/images/w3tinder/liked/pic2.png" alt="">
												</div>
												<div class="dz-content">
													<div class="left-content">
														<h6 class="title">Alina, 24</h6>	
														<span class="active-status">Recently Active</span>
													</div>
													<div class="dz-icon ms-auto me-0"><i class="flaticon flaticon-star-1"></i></div>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dz-media-card style-4">
											<a href="profile-detail.php">
												<div class="dz-media">
													<img src="assets/images/w3tinder/liked/pic1.png" alt="">
												</div>
												<div class="dz-content">
													<div class="left-content">
														<h6 class="title">Broke, 26</h6>	
														<span class="active-status">Recently Active</span>
													</div>
													<div class="dz-icon ms-auto me-0"><i class="flaticon flaticon-star-1"></i></div>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="dz-media-card style-4">
											<a href="profile-detail.php">
												<div class="dz-media">
													<img src="assets/images/w3tinder/liked/pic4.png" alt="">
												</div>
												<div class="dz-content">
													<div class="left-content">
														<h6 class="title">lisa, 23</h6>	
														<span class="active-status">Recently Active</span>
													</div>
													<div class="dz-icon ms-auto me-0"><i class="flaticon flaticon-star-1"></i></div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/dz.carousel.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>