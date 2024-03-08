<?php 
 include 'include/connection.php';
 session_start();
  if(isset($_POST['submitlookfor'])){
    $_SESSION['lookfor'] = $_POST['lookfor'];
}
 if (isset($_POST['usergroupSubmit'])) {
   $email = $_SESSION['email'];
   $usergroupIds = $_POST['usergroupId'];

   foreach ($usergroupIds as $groupId) {
     $insert1 = "INSERT INTO `usergroup`(`email`, `usergroupId`) VALUES ('$email','$groupId')";
     $run1 = mysqli_query($connect, $insert1);
     if (!$run1) {
       echo "Error inserting group ID: " . mysqli_error($connect);
     }
   }
 }


  // if (isset($_POST['youInto'])) {
  //      $_SESSION['selected_groups'] = $_POST['youInto'];
  //    }
 $msg="";
 
 if (isset($_POST['submit'])) {
 	$phone = $_SESSION['phone'];
 	$countryCode = $_SESSION['countryCode'];
    $fullName = $_SESSION['fullName'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $gender = $_SESSION['gender'];
    $dateBirth = $_SESSION['dateBirth'];
    $lookfor = $_SESSION['lookfor'];
    
    $interest = $_SESSION['interest'];
   
    $straight = $_SESSION['straight'];
    $gay = $_SESSION['gay'];
    $lesbian = $_SESSION['lesbian'];
    $bisexual = $_SESSION['bisexual'];
    $asexual = $_SESSION['asexual'];
    $queer = $_SESSION['queer'];
    $demisexual = $_SESSION['demisexual'];
    $showOrien = $_SESSION['showOrien'];
 	 $pic1="../media/".$_FILES['pic1']['name'];
 	 move_uploaded_file($_FILES['pic1']['tmp_name'], $pic1);
 	 $pic2="../media/".$_FILES['pic2']['name'];
 	 move_uploaded_file($_FILES['pic2']['tmp_name'], $pic2);
 	 $pic3="../media/".$_FILES['pic3']['name'];
 	 move_uploaded_file($_FILES['pic3']['tmp_name'], $pic3);
 	 $pic4="../media/".$_FILES['pic4']['name'];
 	 move_uploaded_file($_FILES['pic4']['tmp_name'], $pic4);
 	 $pic5="../media/".$_FILES['pic5']['name'];
 	 move_uploaded_file($_FILES['pic5']['tmp_name'], $pic5);
 	 $pic6="../media/".$_FILES['pic6']['name'];
 	 move_uploaded_file($_FILES['pic6']['tmp_name'], $pic6);
 	 $insert="INSERT INTO `users`(`fullName`, `email`, `countryCode`, `phone`, `gender`, `dateBirth`, `password`, `lookfor`, `interest`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `straight`, `gay`, `lesbian`, `bisexual`, `asexual`, `queer`, `demisexual`, `showOrien`) VALUES ('$fullName','$email', '$countryCode','$phone','$gender','$dateBirth','$password','$lookfor','$interest','$pic1','$pic2','$pic3','$pic4','$pic5','$pic6','$straight','$gay','$lesbian','$bisexual','$asexual','$queer','$demisexual','$showOrien')";
 	 $run=mysqli_query($connect,$insert);
 	 if ($run) {
 	 	header("Location:index.php");
 	 }else{
 	 	$msg="<div class='alert alert-danger'>Your are not registered</div>";
 	 }
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
	<link rel="stylesheet" href="assets/vendor/imageuplodify/imageuploadify.min.css">
    
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
    <form method="POST" enctype="multipart/form-data">

    <!-- Page Content -->
    <div class="page-content p-b70">
		<div class="container">
			<div class="account-area style-2">
				<a href="javascript:void(0);" class="back-btn">
					<i class="icon feather icon-arrow-left"></i>
				</a>
				<div class="section-head ps-0">
					<h2>Ajouter des photos</h2>
					<?php echo $msg; ?>
					<p>Upload 2 photos pour commencer. Ajouter en 4 pour démarquer votre profil.</p>
				</div>
				<div class="row g-3"  data-masonry='{"percentPosition": true }'>
					<div class="col-4">
						<div class="dz-drop-box style-2">
							<img src="assets/images/w3tinder/liked/pic1.png" alt="">
							<div class="drop-bx">
								<div class="imagePreview active" style="background-image: url(assets/images/w3tinder/liked/pic1.png);">
									<label for="imageUpload" class="add-btn">
										<i class="icon feather icon-plus"></i>
									</label>
									<div class="remove-img remove-btn">
										<i class="icon feather icon-x"></i>
									</div>
									<input type='file' class="form-control d-none imageUpload" name="pic1"  id="imageUpload" accept=".png, .jpg, .jpeg">
									<label for="imageUpload"></label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="dz-drop-box style-2">
							<img src="assets/images/recent-pic/drop-bx2.png" alt="">
							<div class="drop-bx">
								<div class="imagePreview" style="background-image: url(assets/images/recent-pic/drop-bx2.png);">
									<label for="imageUpload" class="add-btn">
										<i class="icon feather icon-plus"></i>
									</label>
									<div class="remove-img remove-btn">
										<i class="icon feather icon-x"></i>
									</div>
									<input type='file' class="form-control d-none imageUpload" name="pic2"  id="imageUpload2" accept=".png, .jpg, .jpeg">
									<label for="imageUpload2"></label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="dz-drop-box style-2">
							<img src="assets/images/recent-pic/drop-bx2.png" alt="">
							<div class="drop-bx">
								<div class="imagePreview" style="background-image: url(assets/images/recent-pic/drop-bx2.png);">
									<label for="imageUpload" class="add-btn">
										<i class="icon feather icon-plus"></i>
									</label>
									<div class="remove-img remove-btn">
										<i class="icon feather icon-x"></i>
									</div>
									<input type='file' class="form-control d-none imageUpload" name="pic3"  id="imageUpload3" accept=".png, .jpg, .jpeg">
									<label for="imageUpload3"></label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="dz-drop-box style-2">
							<img src="assets/images/recent-pic/drop-bx2.png" alt="">
							<div class="drop-bx">
								<div class="imagePreview" style="background-image: url(assets/images/recent-pic/drop-bx2.png);">
									<label for="imageUpload" class="add-btn">
										<i class="icon feather icon-plus"></i>
									</label>
									<div class="remove-img remove-btn">
										<i class="icon feather icon-x"></i>
									</div>
									<input type='file' class="form-control d-none imageUpload" name="pic4"  id="imageUpload4" accept=".png, .jpg, .jpeg">
									<label for="imageUpload4"></label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="dz-drop-box style-2">
							<img src="assets/images/recent-pic/drop-bx2.png" alt="">
							<div class="drop-bx">
								<div class="imagePreview" style="background-image: url(assets/images/recent-pic/drop-bx2.png);">
									<label for="imageUpload" class="add-btn">
										<i class="icon feather icon-plus"></i>
									</label>
									<div class="remove-img remove-btn">
										<i class="icon feather icon-x"></i>
									</div>
									<input type='file' class="form-control d-none imageUpload" name="pic5"  id="imageUpload5" accept=".png, .jpg, .jpeg">
									<label for="imageUpload5"></label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="dz-drop-box style-2">
							<img src="assets/images/recent-pic/drop-bx2.png" alt="">
							<div class="drop-bx">
								<div class="imagePreview" style="background-image: url(assets/images/recent-pic/drop-bx2.png);">
									<label for="imageUpload" class="add-btn">
										<i class="icon feather icon-plus"></i>
									</label>
									<div class="remove-img remove-btn">
										<i class="icon feather icon-x"></i>
									</div>
									<input type='file' class="form-control d-none imageUpload" name="pic6"  id="imageUpload6" accept=".png, .jpg, .jpeg">
									<label for="imageUpload6"></label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- Page Content End -->
	<!-- Footer -->
    <div class="footer fixed bg-white p-b15">
		<div class="container">
			<button type="submit" name="submit" class="btn btn-lg btn-gradient w-100 dz-flex-box btn-shadow rounded-xl">Suivant</button>
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
<script src="assets/vendor/imageuplodify/imageuploadify.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="assets/js/settings.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>