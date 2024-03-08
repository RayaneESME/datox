<?php 
include 'include/connection.php';
include 'include/session.php';

$userId = $_GET['userId'];

$query = "SELECT * FROM chat WHERE senderId = '$userId' OR receiverId = '$userId' ORDER BY id ASC";
$result = mysqli_query($connect, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $messageSender = $row['senderId'];
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
