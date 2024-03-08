<?php 
include 'include/connection.php';
include 'include/session.php';

if (isset($_GET['wishlistId'])) {
    $wishlistId = $_GET['wishlistId'];
    mysqli_query($connect, "DELETE FROM `wishlist` WHERE id = '$wishlistId'");
    header("Location: index.php");
}
?>
