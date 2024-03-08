<?php 

      $query="SELECT * FROM `users` WHERE id = '$userId' ";
      $result=mysqli_query($connect,$query);
      if (mysqli_num_rows($result)>0) {
      	$row=mysqli_fetch_assoc($result);
     
	 ?>
	<div class="menubar-area style-3 footer-fixed">
		<div class="toolbar-inner menubar-nav">
			<a href="index.php" class="nav-link active">
				<i class="fa-solid fa-house"></i>
			</a>
			<a href="explore.php?emailId=<?php echo $row['email'] ?>" class="nav-link">
				<i class="flaticon flaticon-magnifying-glass"></i>
			</a>
			<a href="wishlist.php?userId=<?php echo $row['id'] ?>" class="nav-link active">
				<i class="flaticon flaticon-sparkle"></i>
			</a>
			<a href="chat-list.php?userId=<?php echo $row['id'] ?>" class="nav-link">
				<i class="flaticon flaticon-chat-2"></i>
			</a>
			<a href="profile.php?userId=<?php echo $row['id'] ?>" class="nav-link">
				<i class="fa-solid fa-user"></i>
			</a>
		</div>
	</div>
<?php } ?>