<?php
include 'include/connection.php';
include 'include/session.php';
   
    $senderId = $_SESSION['userId'];
    $receiverId = $_POST['receiverId'];
    $msg = $_POST['msg'];
    $insert = "INSERT INTO `chat`(`senderId`, `receiverId`, `msg`) VALUES ('$senderId','$receiverId','$msg')";
    $run = mysqli_query($connect, $insert);
    if (!$run) {
        echo "Error: " . mysqli_error($connect);
    } else {
        echo "Message inserted successfully!";
    }

?>
