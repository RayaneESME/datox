<?php
  include 'include/connection.php';
  include 'include/session.php';
  $msg="";
  $adminId=$_GET['adminId'];
  if (isset($_POST['submitAdmin'])) {
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    if ($_FILES['adminImage'] ['name'] !=='') {
       $adminImage="../media/".$_FILES['adminImage'] ['name'];
    move_uploaded_file($_FILES['adminImage']['tmp_name'],$adminImage);
    }else{
      $query1="SELECT * FROM `admin_login` WHERE id = '$adminId' ";
      $result1=mysqli_query($connect,$query1);
      if ($result1) {
        $row1=mysqli_fetch_assoc($result1);
        $adminImage= $row1['adminImage'];
      }else{
        $msg="<div class='alert alert-danger'>Profile Image not Fetch</div>";
      }
      
  }
   $update="UPDATE `admin_login` SET `firstName`='$firstName',`lastName`='$lastName',`email`='$email',`adminImage`='$adminImage' WHERE id = '$adminId' ";
   $run=mysqli_query($connect,$update);
   if ($run) {
     header('Location:profile.php');
   }else{
    $msg = "<div class='alert alert-danger'>Profile not edit</div>";
   }
  }
 ?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Account settings - Account | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <link rel="stylesheet" href="assets/vendor/libs/animate-css/animate.css" />
    <link rel="stylesheet" href="assets/vendor/libs/sweetalert2/sweetalert2.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/vendor/js/template-customizer.js"></script>
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php include 'include/sidebar.php'; ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include 'include/header.php'; ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Profile Setting</h4>
               <?php 
                    $adminId=$_GET['adminId'];
                      $query="SELECT * FROM `admin_login` WHERE id = '$adminId' ";
                      $result=mysqli_query($connect,$query);
                      if (mysqli_num_rows($result)>0) {
                        $row=mysqli_fetch_assoc($result);
                     
                     ?>
              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-4">
                    <li class="nav-item">
                      <a class="nav-link active" href="setting.php?adminId=<?php echo $row['id'] ?>"
                        ><i class="ti-xs ti ti-users me-1"></i> Account</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="security.php?adminId=<?php echo $row['id'] ?>"
                        ><i class="ti-xs ti ti-lock me-1"></i> Security</a
                      >
                    </li>
                   
                  </ul>
                  <form id="formAccountSettings" method="POST" enctype="multipart/form-data">
                    
                      <div class="card mb-4">
                        <h5 class="card-header">Profile Setting</h5>
                        <?php echo $msg; ?>
                        <!-- Account -->
                        <div class="card-body">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img
                              src="<?php echo $row['adminImage'] ?>"
                              alt="user-avatar"
                              class="d-block w-px-100 h-px-100 rounded"
                              id="uploadedAvatar"
                            />
                            <div class="button-wrapper">
                              <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="ti ti-upload d-block d-sm-none"></i>
                                <input
                                  type="file"
                                  id="upload"
                                  class="account-file-input"
                                  name="adminImage"
                                  hidden
                                  accept="image/png, image/jpeg"
                                />
                              </label>
                              <button type="button" class="btn btn-label-secondary account-image-reset mb-3">
                                <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                              </button>

                              <div class="text-muted">Allowed JPG, GIF or PNG. Max size of 800K</div>
                            </div>
                          </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                          
                            <div class="row">
                              <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  id="firstName"
                                  name="firstName"
                                  value="<?php echo $row['firstName'] ?>"
                                  autofocus
                                />
                              </div>
                              <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="lastName" id="lastName" value="<?php echo $row['lastName'] ?>" />
                              </div>
                              <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  id="email"
                                  name="email"
                                  value="<?php echo $row['email'] ?>"
                                  placeholder="john.doe@example.com"
                                />
                              </div>
                            </div>
                            <div class="mt-2">
                              <button type="submit" name="submitAdmin" class="btn btn-primary me-2">Save changes</button>
                              <button type="reset" class="btn btn-label-secondary">Cancel</button>
                            </div>
                          
                        </div>
                        <!-- /Account -->
                      </div>
                     
                   </form>
                </div>
              </div>
               <?php  } ?>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include 'include/footer.php'; ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="assets/vendor/libs/hammer/hammer.js"></script>
    <script src="assets/vendor/libs/i18n/i18n.js"></script>
    <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/select2/select2.js"></script>
    <script src="assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
    <script src="assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/pages-account-settings-account.js"></script>
  </body>
</html>
