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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
<body class="header-large" data-theme-color="color-primary-2"></body>
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
	<div class="page-content p-t100 p-b50">
		<div class="container">
			<div class="dz-chat-search input-group input-group-icon input-mini">
				<div class="input-group-text">
					<div class="input-icon">
						<i class="icon feather icon-search"></i>
					</div>
				</div>
				<input type="text" id="searchInput" class="form-control" placeholder="Rechercher...">								
			</div>
			<h6 class="tiltle mb-3">Nouveaux matchs</h6>
			<div class="swiper chat-swiper">
				<div class="swiper-wrapper">
					<?php 
				
                  $query="SELECT * FROM `users` ";
                  $result=mysqli_query($connect,$query);
                  if (mysqli_num_rows($result)>0) {
                  	while ($row=mysqli_fetch_assoc($result)) {
                  
				 ?>
					<div class="swiper-slide">
						<a href="chat.php?userId=<?php echo $row['id'] ?>" class="recent active">								
							<div class="media media-60 rounded-circle">
								<img src="<?php echo $row['pic1'] ?>" alt="">
							</div>
							<span><?php echo $row['fullName'] ?></span>
						</a>
					</div>
					
				<?php } 
			}?>
				</div>
			</div>
			<div class="title-bar">
				<h6 class="title">Message</h6>
			</div>
			<ul class="message-list">
				<?php 
				
          $query="SELECT * FROM `users` ";
          $result=mysqli_query($connect,$query);
          if (mysqli_num_rows($result)>0) {
           while ($row=mysqli_fetch_assoc($result)) {
                  
				 ?>
				<li class="active">
					<a href="chat.php?userId=<?php echo $row['id'] ?>">
						<div class="media media-60">
							<img src="<?php echo $row['pic1'] ?>" alt="image">
						</div>
						<div class="media-content">
							<div>
								<h6 class="name"><?php echo $row['fullName'] ?></h6>

								<p class="last-msg">Would love to!</p>
							</div>
							<div class="right-content">
								<span class="date">Il y a 2min</span>
								<div class="seen-btn active dz-flex-box">
									<i class="icon feather icon-check"></i>
								</div>
							</div>
						</div>
					</a>
				</li>
         <?php } 
			}?>
			</ul>
		</div>    
	</div>
	<!-- Page Content End -->
	<!-- Menubar -->
	<?php include 'include/footer.php'; ?>
	<!-- Menubar -->
</div> 
<script>
$(document).ready(function() {
    $('#searchInput').on('input', function() {
        var searchQuery = $(this).val().toLowerCase();
        $.ajax({
            url: 'search_users.php',
            type: 'GET',
            data: { searchQuery: searchQuery },
            success: function(response) {
                $('.message-list').html(response); 
            }
        });
    });
});
</script> 
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