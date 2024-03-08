<?php 
include 'include/connection.php';
include 'include/session.php';

$userId = $_GET['userId'];

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style type="text/css">
    	.chat-box-area .chat-content .message-item .message-time {
    font-size: 0.75rem;
    padding: 3px 0;
    text-align: left;
     line-height: normal; 
     margin-top: 0px; 
    color: #969696;
     height: auto; 
     margin-bottom: 5px;
}
    </style>
</head>   
<body class="header-large bg-white" data-theme-color="color-primary-2"></body>
<div class="page-wrapper">
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader">
            <div class="load-circle"><div></div><div></div></div>
        </div>
    </div>
    <!-- Preloader end-->
    <?php 

    $query="SELECT * FROM `users` WHERE  id = '$userId' ";
    $result=mysqli_query($connect,$query);
    if (mysqli_num_rows($result)>0) {
     $row=mysqli_fetch_assoc($result)
                  
        ?>
    <!-- Header -->
        <header class="header header-fixed bg-white">
            <div class="container">
                
                <div class="header-content">
                    <div class="left-content me-3">
                        <a href="javascript:void(0);" class="back-btn">
                            <i class="icon feather icon-arrow-left"></i>
                        </a>
                    </div>
                    <div class="mid-content d-flex align-items-center text-start">
                        <a href="javascript:void(0);" class="media media-40 rounded-circle me-3">
                            <img src="<?php echo $row['pic1'] ?>" alt="/">
                        </a>
                        <div>
                            <h6 class="title"><?php echo $row['fullName'] ?></h6>
                        </div>    
                    </div>
                    <div class="right-content d-flex align-items-center">
                        <a href="javascript:void(0);" class="dz-icon btn border rounded-circle text-primary">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                        <a href="javascript:void(0);" class="dz-icon me-0 btn border rounded-circle text-primary">
                            <i class="fa-solid fa-video"></i>
                        </a>
                    </div>
                </div>
                
            </div>
        </header>
    <!-- Header -->
    
    <!-- Page Content Start -->
    <div class="page-content space-top p-b50">
    <div class="container"> 
         <div class="chat-box-area pb-3 style-2" id="chatBox"> 
            <?php 
                $query = "SELECT * FROM chat WHERE senderId = '$userId' OR receiverId = '$userId' ORDER BY id ASC";
                $result = mysqli_query($connect, $query);

                // Display messages
                while ($row = mysqli_fetch_assoc($result)) {
							    $messageSender = $row['senderId'];
							    $messageReceiver = $row['receiverId'];
							    $msg = $row['msg'];
							    $messageTime = date('h:i A', strtotime($row['published']));

							    $class = ($messageSender == $userId) ? '' : 'user';
							    echo '<div class="chat-content ' . $class . '">';
							    echo '<div class="message-item">';
							    echo '<div class="bubble">' . $msg . '</div>';
							    echo '<div class="message-time">' . $messageTime . '</div>';
							    echo '</div>';
							    echo '</div>';
              }

            ?>
        </div>
    </div> 
</div>
    
<footer class="footer border-top fixed bg-white">
    <div class="container p-2">
        <div class="chat-footer">
            <form id="chatForm" method="POST">
                <div class="form-group">
                    <div class="input-wrapper message-area">
                        <div class="append-media"></div>
                        <input type="hidden" id="receiverId" name="receiverId" value="<?php echo $_GET['userId']; ?>">
                        <input type="text" id="msg" name="msg" class="form-control" placeholder="Envoyer un message...">
                        <button type="button" id="sendMessageButton" class="btn-chat border-0"><i class="icon feather icon-send"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</footer>
<?php } ?>

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
  <script>
$(document).ready(function () {
    $('#msg').keypress(function (e) {
        if (e.keyCode == 13 && !e.shiftKey) {
            e.preventDefault();
            sendMessage(); 
        }
    });
     
    $('#sendMessageButton').click(function (e) {
        e.preventDefault();
        sendMessage();
    });

    function sendMessage() {
     
        var receiverId = $('#receiverId').val();
        var msg = $('#msg').val();

        $.ajax({
            type: 'POST',
            url: 'sendMessage.php',
            data: {
                receiverId: receiverId,
                msg: msg
            },
            success: function (response) {
                $('.chat-box-area').load(location.href + ' .chat-box-area');
                $('#msg').val('');
                console.log(response);
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }

    // Refresh chat messages every 5 seconds
    setInterval(function() {
        $('#chatBox').load('receiveMessages.php?userId=<?php echo $userId; ?>');
    }, 1000); // 5 seconds
});

</script>
</body>
</html>
