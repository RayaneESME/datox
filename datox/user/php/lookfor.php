<?php 
 include '../include/connection.php';
 include '../include/session.php';

    $userId = $_POST['userId'];
    $lookfor = $_POST['lookfor'];
    $update = "UPDATE `users` SET `lookfor`='$lookfor' WHERE id='$userId' ";
    $run = mysqli_query($connect, $update);
    if ($run) {
        echo 'Update lookfor';
    } else {
        echo 'Not update lookfor';
    }
 ?>