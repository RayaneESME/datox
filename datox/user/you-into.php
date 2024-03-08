<?php 
 include 'include/connection.php';
 session_start();
  if(isset($_POST['submitlookfor'])){
    $_SESSION['lookfor'] = $_POST['lookfor'];
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
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
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
   <form method="POST" enctype="multipart/form-data" action="recent-pics.php">
    <!-- Page Content -->
    <div class="page-content">
		<div class="container">
			<div class="account-area style-2">
				<a href="javascript:void(0);" class="back-btn">
					<i class="icon feather icon-arrow-left"></i>
				</a>
				<div class="section-head ps-0">
					<h2 class="mb-2">Quels sont vos intérêts ?</h2>
					<p>Laissez savoir ce que vous aimez.</p>
				</div>
				<div class="swiper-btn-center-lr mt-0">
					<div class="swiper tag-select" id="tagSelect">
						<div class="swiper-wrapper" >
							<div class="swiper-slide" >
								
							</div>
							
						</div>
					</div>					
				</div>
				<ul class="tags">
					<?php 
                       $query="SELECT * FROM `groups`";
                       $result=mysqli_query($connect,$query);
                       if (mysqli_num_rows($result)>0) {
                       	 while ($row=mysqli_fetch_assoc($result)) {
                       	
					 ?>
					<li>
						<a href="javascript:void(0);" data-group-id="<?php echo $row['id']; ?>"><?php echo $row['groupName']; ?></a>

						
					</li>
					<?php  	
                       	 }
                       } ?>						
				</ul>
			</div>
        </div>
    </div>
    <!-- Page Content End -->
	<!-- Footer -->
    <div class="footer fixed bg-white p-b15">
		<div class="container">
			<button type="submit" name="usergroupSubmit" class="btn btn-lg btn-gradient w-100 dz-flex-box btn-shadow rounded-xl">Suivant (5/5)</button>
			
		</div>
	</div>
	<!-- Footer -->
	</form>
</div>
<!--**********************************
    Scripts
***********************************-->
<script>

    const tagSelect = document.getElementById('tagSelect');
    const selectedTags = [];

    function updateSelectedTags() {
        const swiperWrapper = tagSelect.querySelector('.swiper-wrapper');
        swiperWrapper.innerHTML = '';
        selectedTags.forEach(({ tag, groupId }) => {
            const swiperSlide = document.createElement('div');
            swiperSlide.classList.add('swiper-slide');
            swiperSlide.innerHTML = `
                <a href="javascript:void(0);" class="selcted-tag mx-1">${tag}
                    <span><i class="icon feather icon-x"></i></span>                                    
                </a>
                <input type="hidden" name="usergroupId[]" value="${groupId}">
            `;
            swiperWrapper.appendChild(swiperSlide);
            swiperSlide.querySelector('.icon-x').addEventListener('click', () => {
                removeTag(tag);
            });
        });

        // Update session variable
        updateSession();
    }

    function addTag(tag, groupId) {
        if (selectedTags.length < 5 && !selectedTags.some(obj => obj.tag === tag)) {
            selectedTags.push({ tag, groupId });
            updateSelectedTags();
        }
    }

    function removeTag(tag) {
        const index = selectedTags.findIndex(obj => obj.tag === tag);
        if (index !== -1) {
            selectedTags.splice(index, 1);
            updateSelectedTags();
        }
    }

    const tags = document.querySelectorAll('.tags a');
    tags.forEach(tag => {
        const groupId = tag.getAttribute('data-group-id');
        tag.addEventListener('click', () => {
            addTag(tag.innerText.trim(), groupId);
        });
    });
</script>


<script src="assets/js/jquery.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="assets/js/settings.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>