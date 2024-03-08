<?php 
 include 'include/connection.php';
 include 'include/session.php';
 include 'php/editprofilepic.php';
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
    <style type="text/css">
    	.media img {
    width: 100%;
    min-width: 100%;
    height: auto;
    object-fit: cover;
}
    </style>
</head>   
<body data-theme-color="color-primary-2">
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
					<div class="left-content me-3">
						<a href="javascript:void(0);" class="back-btn">
							<i class="icon feather icon-chevron-left"></i>
						</a>
						<h6 class="title">Éditer votre profil</h6>
					</div>
					<div class="mid-content">
					</div>
					<div class="right-content">
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
	<div class="page-content space-top">
		<div class="container"> 
			<form method="POST" enctype="multipart/form-data">
				<div class="row g-2 m-b30"  data-masonry='{"percentPosition": true }'>
				<div class="col-4">
					<div class="dz-drop-box style-2">
						<img src="assets/images/w3tinder/liked/pic1.png" alt="">
						<div class="drop-bx">
							<div class="imagePreview active" style="background-image: url(<?php echo $row['pic1'] ?>);">
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
							<div class="imagePreview" style="background-image: url(<?php echo $row['pic2'] ?>);">
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
							<div class="imagePreview" style="background-image: url(<?php echo $row['pic3'] ?>);">
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
							<div class="imagePreview" style="background-image: url(<?php echo $row['pic4'] ?>);">
								<label for="imageUpload" class="add-btn">
									<i class="icon feather icon-plus"></i>
								</label>
								<div class="remove-img remove-btn">
									<i class="icon feather icon-x"></i>
								</div>
								<input type='file' class="form-control d-none imageUpload" name="pic4" id="imageUpload4" accept=".png, .jpg, .jpeg">
								<label for="imageUpload4"></label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="dz-drop-box style-2">
						<img src="assets/images/recent-pic/drop-bx2.png" alt="">
						<div class="drop-bx">
							<div class="imagePreview" style="background-image: url(<?php echo $row['pic5'] ?>);">
								<label for="imageUpload" class="add-btn">
									<i class="icon feather icon-plus"></i>
								</label>
								<div class="remove-img remove-btn">
									<i class="icon feather icon-x"></i>
								</div>
								<input type='file' class="form-control d-none imageUpload" name="pic5" id="imageUpload5" accept=".png, .jpg, .jpeg">
								<label for="imageUpload5"></label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="dz-drop-box style-2">
						<img src="assets/images/recent-pic/drop-bx2.png" alt="">
						<div class="drop-bx">
							<div class="imagePreview" style="background-image: url(<?php echo $row['pic6'] ?>);">
								<label for="imageUpload" class="add-btn">
									<i class="icon feather icon-plus"></i>
								</label>
								<div class="remove-img remove-btn">
									<i class="icon feather icon-x"></i>
								</div>
								<input type='file' class="form-control d-none imageUpload" name="pic6" id="imageUpload6" accept=".png, .jpg, .jpeg">
								<label for="imageUpload6"></label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button type="submit" name="submitImg" class="btn btn-gradient mb-3 btn-block rounded-xl">Ajouter</button>
			</form>
			<div class="card style-4">
				<div class="card-header">
					<h6 class="title mb-0">Intérêts</h6>
				</div>
				<div class="card-body">
					<a href="javascript:void(0);" class="setting-input" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom1">
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
					                    echo "
					                                <span class='me-1'>{$groupNameRow['groupName']},</span>
					                            ";
					                }
					            }
					        }
					        ?>
						
						<i class="icon feather dz-flex-box icon-chevron-right ms-auto me-0"></i>
					</a>
				</div>
			</div>
			
			<div class="card style-4">
				<div class="card-header">
					<h6 class="title mb-0">Type de relation</h6>
				</div>
				<div class="card-body">
					<a href="javascript:void(0);" class="setting-input" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom2">
						<span id="selectedlookfor"><?php echo $row['lookfor'] ?></span>
						<i class="icon feather dz-flex-box icon-chevron-right ms-auto me-0"></i>
					</a>
				</div>
			</div>
			
			<div class="card style-4">
				<div class="card-header">
					<h6 class="title mb-0">Langues</h6>
				</div>
				<div class="card-body">
					<a href="javascript:void(0);" class="setting-input" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLang" aria-controls="offcanvasLang">
						<span class="select-lang">Anglais, Français</span>
						<i class="icon feather dz-flex-box icon-chevron-right ms-auto me-0"></i>
					</a>
				</div>
			</div>
			
		</div> 
	</div>
	<!-- Page Content End -->
	<?php } ?>
	<!--  Interest OffCanvas -->
    <div class="offcanvas offcanvas-bottom intrests" tabindex="-1" id="offcanvasBottom1">
		<div class="offcanvas-header share-style">
			<h6 class="title mb-0">Intérêts</h6>
			<button type="button" class="btn-close dz-flex-box" data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="icon feather icon-x font-22"></i>
			</button>
		</div>
        <div class="offcanvas-body">
			<!-- <div class="input-group input-group-icon search-input">
				<div class="input-group-text">
					<div class="input-icon">
						<i class="icon feather icon-search"></i>
					</div>
				</div>
				<input type="search" class="form-control ms-0" placeholder="Search...">
			</div> -->
			<ul class="dz-tag-list style-2">
				<?php 
                       $query1="SELECT * FROM `groups`";
                       $result1=mysqli_query($connect,$query1);
                       if (mysqli_num_rows($result1)>0) {
                       	 while ($row1=mysqli_fetch_assoc($result1)) {
                       	
					 ?>
				<li> 
					<div class="dz-tag">
						<span><?php echo $row1['groupName'] ?></span>
					</div>
				</li>
				<?php  	
                       	 }
                       } ?>	
			</ul>
        </div>
    </div>
	<!--  Interest OffCanvas -->
	
	<!--  Relationship OffCanvas -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom2">
		<button type="button" class="btn-close drage-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		<div class="offcanvas-header share-style m-0 pb-0">
			<h6 class="title">Type de relation</h6>
		</div>
      <div class="offcanvas-body">
      	<?php 
					 $userId=$_GET['userId'];
				      $query="SELECT * FROM `users` WHERE id='$userId' ";
				      $result=mysqli_query($connect,$query);
				      if (mysqli_num_rows($result)>0) {
				      	$row=mysqli_fetch_assoc($result);
				      
					 ?>
			 <form method="POST" enctype="multipart/form-data">
			 	  <div class="radio style-4 row g-2">
				<div class="col-4">
					<label class="radio-label">
						<input type="radio" id="radioSérieux" name="radio2" value="Sérieux" <?php if ($row['lookfor'] === 'Sérieux') echo 'checked'; ?>>
						<span class="checkmark">
							<img src="assets/images/w3tinder/svg/love.svg" alt="">							
							<span class="text">Sérieux</span>	
						</span>
					</label>
				</div>
				<div class="col-4">
					<label class="radio-label">
						<input type="radio" id="radiofaut" name="radio2" value="Il faut voir" <?php if ($row['lookfor'] === 'Il faut voir') echo 'checked'; ?>>
						<span class="checkmark">
							<img src="assets/images/w3tinder/svg/smile-emoji.svg" alt="">							
							<span class="text">Il faut voir</span>	
						</span>
					</label>
				</div>
				<div class="col-4">
					<label class="radio-label">
						<input type="radio" id="radioLibre" name="radio2" value="Libre" <?php if ($row['lookfor'] === 'Libre') echo 'checked'; ?>>
						<span class="checkmark">
							<img src="assets/images/w3tinder/svg/toast.svg" alt="">							
							<span class="text">Libre</span>	
						</span>
					</label>
				</div>	
				<div class="col-4">
					<label class="radio-label">
						<input type="radio" id="radioFun" name="radio2" value="Fun" <?php if ($row['lookfor'] === 'Fun') echo 'checked'; ?>>
						<span class="checkmark">
							<img src="assets/images/w3tinder/svg/party.svg" alt="">							
							<span class="text">Fun</span>	
						</span>
					</label>
				</div>
				<div class="col-4">
					<label class="radio-label">
						<input type="radio" id="radioAmis" name="radio2" value="Amis" <?php if ($row['lookfor'] === 'Amis') echo 'checked'; ?>>
						<span class="checkmark">
							<img src="assets/images/w3tinder/svg/hello.svg" alt="">							
							<span class="text">Amis</span>	
						</span>
					</label>
				</div>
				<div class="col-4">
					<label class="radio-label">
						<input type="radio" id="radioIndécis" name="radio2" value="Indécis" <?php if ($row['lookfor'] === 'Indécis') echo 'checked'; ?>>
						<span class="checkmark">
							<img src="assets/images/w3tinder/svg/think.svg" alt="">							
							<span class="text">Indécis</span>	
						</span>
					</label>
				</div>
			  </div>
			 </form>
			 <?php } ?>
      </div>
    </div>
	<!--  Relationship OffCanvas -->
	
	<!--  Language OffCanvas -->

    <?php include 'php/language.php'; ?>
	<!--  Language OffCanvas -->
	
	<!--  Orientation OffCanvas -->
	
</div>  
<!--**********************************
    Scripts
***********************************-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script><!-- Swiper -->
<script src="assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="assets/js/settings.js"></script>
<script src="assets/js/custom.js"></script>
<script type="text/javascript">
	 $(document).ready(function() {
    $('input[name="radio2"]').change(function() {
        if (this.checked) {
            var lookfor = $(this).val();
            var userId = '<?php echo $_GET['userId'] ?>';
            $.ajax({
                url: 'php/lookfor.php',
                type: 'POST',
                data: { userId: userId, lookfor: lookfor },
                success: function(response) {
                    console.log(response);
                    // Handle success response
                    $('#selectedlookfor').text(lookfor); // Update element with selected value

                    // Close the offcanvas
                    $('.offcanvas').offcanvas('hide');
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    // Handle error
                }
            });
        }
    });
});
</script>
<script type="text/javascript">
    $('#offcanvasLang form').submit(function(e) {
    e.preventDefault();
    var french = $('#offcanvasLang input[name="french"]:checked').val();
    var english = $('#offcanvasLang input[name="english"]:checked').val();
    var germany = $('#offcanvasLang input[name="germany"]:checked').val();
    var italian = $('#offcanvasLang input[name="italian"]:checked').val();
    var spainsh = $('#offcanvasLang input[name="spainsh"]:checked').val();
    $.ajax({
        url: 'php/updateLang.php',
        type: 'POST',
        data: { french: french, english: english, germany: germany, italian: italian, spainsh: spainsh },
        success: function(response) {
            alert(response); 
            $('#offcanvasLang').offcanvas('hide');
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});

</script>

</body>
</html>