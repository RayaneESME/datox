<?php 

 include 'include/connection.php'; 
 $msg="";
 if (isset($_POST['submit'])) {
   $email=$_POST['email'];
   $password=$_POST['password'];
   $query="SELECT * FROM `users` WHERE email='$email' AND password='$password' ";
   $run=mysqli_query($connect,$query);
   if (mysqli_num_rows($run)>0) { 
   	$row=mysqli_fetch_assoc($run);
      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['userId'] = $row['id'];
      header("Location:index.php"); 
      session_write_close();
 
   }else{
     $msg="<div class='alert alert-danger'>Your login information incorrect</div>";
   }

 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	
    <!-- Title -->
	<title>Moaki Paris - Datox</title>

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
    
    <!-- Stylesheets -->
    <link rel="stylesheet" class="main-css" type="text/css" href="assets/css/style.css">
	
    <!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	
</head>  
<style type="text/css">
	.login-inputs{
		height: 50px; text-indent: 5px; border-radius: 10px; border: none;
	}
</style> 
<body class="primary-gradient" data-theme-color="color-primary-2">
<div class="page-wrapper">
	<!-- Preloader -->
	<div id="preloader">
		<div class="loader">
			<div class="load-circle"><div></div><div></div></div>
		</div>
	</div>
	<!-- Preloader end-->	
    <!-- Welcome Start -->
	<div class="content-body">
		<div class="welcome-area">
			<div class="welcome-inner flex-column">
				<div class="logo-area">
					<img class="logo" src="assets/images/moaki.png" alt="">
					<p class="para-title">Matcher dès maintenant avec des gens partageant vos intérêts.</p>
				</div>
				<form method="POST" enctype="multipart/form-data">
					<?php echo $msg; ?>
					<div class="social-area">
					<input type="email" name="email" class="login-inputs" placeholder="Adresse E-mail" />
					<input type="password" name="password" class="login-inputs" placeholder="Mot de passe" />
					
					
						<button type="submit" class="btn btn-icon icon-start w-100 btn-facebook" name="submit">Connexion</button>
						
					
					<a href="forgot.php" class="btn btn-icon icon-start btn-tp w-100">
						
						<span>Mot de passe oublié</span>
					</a>
				</div>
				</form>
			</div>
		</div>
	</div>
    <!-- Welcome End -->
    
</div>
<!--**********************************
    Scripts
***********************************-->
<script src="assets/js/jquery.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>