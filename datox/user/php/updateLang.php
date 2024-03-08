<?php 
include '../include/connection.php';
include '../include/session.php';

if (isset($_POST['languagebtn'])) {
    $userId = $_SESSION['userId'];
    $french = $_POST['french'];
    $english = $_POST['english'];
    $germany = $_POST['germany'];
    $italian = $_POST['italian'];
    $spainsh = $_POST['spainsh'];

    // Fetch the language ID based on the user ID
    $getLangIdQuery = "SELECT id FROM `language` WHERE `userId`='$userId'";
    $resultLangId = mysqli_query($connect, $getLangIdQuery);
    $rowLangId = mysqli_fetch_assoc($resultLangId);
    $langId = $rowLangId['id'];

    $update = "UPDATE `language` SET `french`='$french', `english`='$english', `germany`='$germany', `italian`='$italian', `spainsh`='$spainsh' WHERE `id`='$langId'";
    $result = mysqli_query($connect, $update);

    if ($result) {
        echo "Language updated successfully";
    } else {
        echo "Error updating language: " . mysqli_error($connect);
    }
}
?>
