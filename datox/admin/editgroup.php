<?php 
  include 'include/connection.php';
  include 'include/session.php';


    $groupName = $_POST['groupName'];
    if ($_FILES['groupImage']['name'] !=='') {
       $groupImage = "../media/" . $_FILES['groupImage']['name'];
       move_uploaded_file($_FILES['groupImage']['tmp_name'], $groupImage);
    }else{
      $query1="SELECT * FROM `groups` WHERE id= '$groupId' ";
      $result1=mysqli_query($connect,$query1);
      if ($result) {
        $row1=mysqli_fetch_assoc($result1);
        $groupImage= $row1['groupImage'];
      }else{
        $msg1="<div class='alert alert-danger'>Group not added</div>";
      }
      
  }
   
    $update = "UPDATE `groups` SET `groupName`='$groupName',`groupImage`='$groupImage' WHERE id= '$groupId' ";
    $result = mysqli_query($connect, $update);
    if ($result) {
        $msg1 = "<div class='alert alert-success'>Group Successfully added</div>";
    } else {
        $msg1 = "<div class='alert alert-danger'>Group not added</div>";
    }

 ?>