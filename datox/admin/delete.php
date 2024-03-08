<?php 
  include 'include/connection.php';
  include 'include/session.php';
  if (isset($_GET['groupId'])) {
   	$groupId=$_GET['groupId'];
   	mysqli_query($connect, "DELETE FROM `groups` WHERE id = '$groupId' ");
   	header("Location:manage-groups.php");
   } 
 ?>