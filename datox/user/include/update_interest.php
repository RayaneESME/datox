<?php 
 include 'connection.php';
 include 'session.php';

    $userId = $_POST['userId'];
    $interest = $_POST['interest'];
    $update = "UPDATE `users` SET `interest`='$interest' WHERE id='$userId' ";
    $run = mysqli_query($connect, $update);
    if ($run) {
        echo 'Update interest';
    } else {
        echo 'Not update interest';
    }
    
 ?>