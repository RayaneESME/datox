<?php 
 include 'include/connection.php';
 include 'include/session.php';
 $msg="";
 $userId = $_GET['userId'];
 if (isset($_POST['submitWishlist'])) {
 	$userId=$_POST['userId'];
 	$wishlistUser=$_SESSION['userId'];
 	$insert="INSERT INTO `wishlist`(`userId`, `wishlistUser`) VALUES ('$userId','$wishlistUser')";
 	$run=mysqli_query($connect,$insert);
 	if ($run) {
 		header("Location: wishlist.php");
 		exit();
 	}else{
 		$msg="<div class='alert alert-danger'>User are not add to wishlist</div>";
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
<body class="bg-white" data-theme-color="color-primary-2">
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
					<div class="left-content">
						<a href="javascript:void(0);" class="back-btn">
							<i class="icon feather icon-arrow-left"></i>
						</a>
						<h6 class="title">Retour</h6>
					</div>
					<div class="mid-content header-logo">
					</div>
					<div class="right-content dz-meta">
					</div>
				</div>
			</div>
		</header>
	<!-- Header -->
	<?php 
	 $userId=$_GET['userId'];
      $query="SELECT * FROM `users` WHERE id = '$userId' ";
      $result=mysqli_query($connect,$query);
      if (mysqli_num_rows($result)>0) {
      	$row=mysqli_fetch_assoc($result);
     
	 ?>
	<!-- Page Content Start -->
	<div class="page-content space-top p-b40">
		<div class="container">
			<div class="detail-area">
				<?php echo $msg; ?>
				<div class="dz-media-card style-2">
					<div class="dz-media">
						<img src="<?php echo $row['pic1'] ?>" alt="">
					</div>
					<div class="dz-content">
						<div class="left-content">
							<h4 class="title"><?php echo $row['fullName'] ?></h4>
							<p class="mb-0"><i class="icon feather icon-map-pin"></i> 5 Km</p>
						</div>
						<a href="javascript:void(0);" class="dz-icon"><i class="flaticon flaticon-star-1"></i></a>
					</div>
				</div>
				<div class="detail-bottom-area">
					<div class="about">
						<h6 class="title">Bio</h6>
						<p class="para-text"><?php echo $row['bio'] ?></p>					
					</div>
					<div class="intrests mb-3">
						<h6 class="title">Intérêts</h6>
						<ul class="dz-tag-list">
					        <?php
					        $emailId = $row['email']; 
					        $groupQuery = "SELECT * FROM `usergroup` WHERE email = '$emailId'";
					        $groupResult = mysqli_query($connect, $groupQuery);
					        if (mysqli_num_rows($groupResult) > 0) {
					            while ($groupRow = mysqli_fetch_assoc($groupResult)) {
					                $groupId = $groupRow['usergroupId'];
					                $groupNameQuery = "SELECT * FROM `groups` WHERE id = '$groupId'";
					                $groupNameResult = mysqli_query($connect, $groupNameQuery);
					                if (mysqli_num_rows($groupNameResult) > 0) {
					                    $groupNameRow = mysqli_fetch_assoc($groupNameResult);
					                    echo "<li> 
					                            <div class='dz-tag'>
					                                <span>{$groupNameRow['groupName']}</span>
					                            </div>
					                          </li>";
					                }
					            }
					        }
					        ?>
					    </ul>
					</div>
					<?php if ($row['showOrien'] == 1): ?>
					<div class="orentiation mb-3">
						<h6 class="title">Orentiation</h6>
						<ul class="dz-tag-list">
							
							<li> 
								<?php if ($row['straight'] == 1):?>
								<div class="dz-tag">
									<span>Straight</span>
								</div>
								 <?php endif; ?>
							</li>
							<li> 
								<div class="dz-tag">
									<?php if ($row['gay'] == 1):?>
									<span>Gay</span>
									<?php endif; ?>
								</div>
							</li>
							<li>
								 <?php if ($row['lesbian'] == 1):?> 
								<div class="dz-tag">
									<span>Lesbian</span>
								</div>
								 <?php endif; ?>
							</li>
							<li>
							 	<?php if ($row['bisexual'] == 1):?> 
								<div class="dz-tag">
									<span>Bisexual</span>
								</div>
								<?php endif; ?>
							</li>
							<li>
							 <?php if ($row['asexual'] == 1):?>  
								<div class="dz-tag">
									<span>Asexual</span>
								</div>
								<?php endif; ?>
							</li>
							<li>
							 <?php if ($row['queer'] == 1):?>  
								<div class="dz-tag">
									<span>Queer</span>
								</div>
								<?php endif; ?>
							</li>
							<li>
							  <?php if ($row['demisexual'] == 1):?>  
								<div class="dz-tag">
									<span>Demisexual</span>
								</div>
								<?php endif; ?>
							</li>
						</ul>
					</div>
					<?php endif; ?>
					<div class="languages mb-3">
						<h6 class="title">Langues</h6>
						<ul class="dz-tag-list">
							<li> 
								<div class="dz-tag">
									<span>Anglais</span>
								</div>
							</li>
							<li> 
								<div class="dz-tag">
									<span>Espagnol</span>
								</div>
							</li>
							<li> 
								<div class="dz-tag">
									<span>Allemand</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- Page Content End -->
	<!-- Menubar -->
	<?php
$query="SELECT * FROM `users` WHERE id = '$userId'";
$result=mysqli_query($connect,$query);
if (mysqli_num_rows($result)>0) {
    $row=mysqli_fetch_assoc($result);

?>

<div class="footer fixed">
    <div class="dz-icon-box">
        <a href="index.php" class="icon dz-flex-box dislike"><i class="flaticon flaticon-cross font-18"></i></a>

        <a href="chat.php?userId=<?php echo $row['id'] ?>" class="icon dz-flex-box super-like"><i class="fa-solid fa-comment-dots"></i></a>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="userId" value="<?php echo $row['id'] ?>">
            <button type="submit" name="submitWishlist" class="icon dz-flex-box like border-0"><i class="fa-solid fa-heart"></i></button>
        </form>
    </div>
</div>
<?php
    }
?>

	<!-- Menubar -->

</div>  
<!--**********************************
    Scripts
***********************************-->
<script src="assets/js/jquery.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/wnumb/wNumb.js"></script><!-- WNUMB -->
<script src="assets/vendor/nouislider/nouislider.min.js"></script><!-- NOUSLIDER MIN JS-->
<script src="assets/js/settings.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>