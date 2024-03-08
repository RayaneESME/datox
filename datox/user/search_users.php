<?php
include 'include/connection.php';

$searchQuery = $_GET['searchQuery'];

$query = "SELECT * FROM `users` WHERE `fullName` LIKE '%$searchQuery%'";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        echo '<li class="active">';
        echo '    <a href="chat.php?userId=' . $row['id'] . '">';
        echo '        <div class="media media-60">';
        echo '            <img src="' . $row['pic1'] . '" alt="image">';
        echo '        </div>';
        echo '        <div class="media-content">';
        echo '            <div>';
        echo '                <h6 class="name">' . $row['fullName'] . '</h6>';
        echo '                <p class="last-msg">Would love to!</p>';
        echo '            </div>';
        echo '            <div class="right-content">';
        echo '                <span class="date">Il y a 2min</span>';
        echo '                <div class="seen-btn active dz-flex-box">';
        echo '                    <i class="icon feather icon-check"></i>';
        echo '                </div>';
        echo '            </div>';
        echo '        </div>';
        echo '    </a>';
        echo '</li>';
    }
} else {
    echo 'No users found.';
}
?>
