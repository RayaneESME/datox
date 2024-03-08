<?php 
   if (isset($_POST['submitImg'])) {
  $userId=$_GET['userId'];
   if ($_FILES['pic1']['name'] !=='') {
       $pic1 = "../media/" . $_FILES['pic1']['name'];
       move_uploaded_file($_FILES['pic1']['tmp_name'], $pic1);
    }else{
      $query1="SELECT * FROM `users` WHERE id= '$userId' ";
      $result1=mysqli_query($connect,$query1);
      if ($result1) {
        $row1=mysqli_fetch_assoc($result1);
        $pic1= $row1['pic1'];
      }else{
      
      }  
  }
   if ($_FILES['pic2']['name'] !=='') {
       $pic2 = "../media/" . $_FILES['pic2']['name'];
       move_uploaded_file($_FILES['pic2']['tmp_name'], $pic2);
    }else{
      $query2="SELECT * FROM `users` WHERE id= '$userId' ";
      $result2=mysqli_query($connect,$query2);
      if ($result2) {
        $row2=mysqli_fetch_assoc($result2);
        $pic2= $row2['pic2'];
      }else{
      
      }  
  }
     if ($_FILES['pic3']['name'] !=='') {
       $pic3 = "../media/" . $_FILES['pic3']['name'];
       move_uploaded_file($_FILES['pic3']['tmp_name'], $pic3);
    }else{
      $query3="SELECT * FROM `users` WHERE id= '$userId' ";
      $result3=mysqli_query($connect,$query3);
      if ($result3) {
        $row3=mysqli_fetch_assoc($result3);
        $pic3= $row3['pic3'];
      }else{
      
      }  
  }
     if ($_FILES['pic4']['name'] !=='') {
       $pic4 = "../media/" . $_FILES['pic4']['name'];
       move_uploaded_file($_FILES['pic4']['tmp_name'], $pic4);
    }else{
      $query4="SELECT * FROM `users` WHERE id= '$userId' ";
      $result4=mysqli_query($connect,$query4);
      if ($result4) {
        $row4=mysqli_fetch_assoc($result4);
        $pic4= $row4['pic4'];
      }else{
      
      }  
  }
     if ($_FILES['pic5']['name'] !=='') {
       $pic5 = "../media/" . $_FILES['pic5']['name'];
       move_uploaded_file($_FILES['pic5']['tmp_name'], $pic5);
    }else{
      $query5="SELECT * FROM `users` WHERE id= '$userId' ";
      $result5=mysqli_query($connect,$query5);
      if ($result5) {
        $row5=mysqli_fetch_assoc($result5);
        $pic5= $row5['pic5'];
      }else{
      
      }  
  }
    if ($_FILES['pic6']['name'] !=='') {
       $pic6 = "../media/" . $_FILES['pic6']['name'];
       move_uploaded_file($_FILES['pic6']['tmp_name'], $pic6);
    }else{
      $query6="SELECT * FROM `users` WHERE id= '$userId' ";
      $result6=mysqli_query($connect,$query6);
      if ($result6) {
        $row6=mysqli_fetch_assoc($result6);
        $pic6= $row6['pic6'];
      }else{
      
      }  
  }
  $update = "UPDATE `users` SET `pic1`='$pic1',`pic2`='$pic2',`pic3`='$pic3',`pic4`='$pic4',`pic5`='$pic5',`pic6`='$pic6' WHERE id= '$userId' ";
    $result = mysqli_query($connect, $update);
    
 }
 ?>