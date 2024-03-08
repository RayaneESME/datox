<?php 
 include 'include/connection.php'; 
 include 'include/session.php';
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Users | Moaki Paris - Datox</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/icons/favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
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
    <link rel="stylesheet" href="assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    <style type="text/css">
      .buttons-collection {
        display: none !important;
      }

      .add-new {
        display: none !important;
      }
    </style>
  </head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu --> <?php include 'include/sidebar.php'; ?>
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar --> <?php include 'include/header.php'; ?>
          <!-- / Navbar -->
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Dashboards /</span> Users
              </h4>
              
              <!-- Users List Table -->
              <div class="card">
                <div class="card-header p-3">
                  <!-- <h5 class="card-title">Users</h5> -->
                </div>
                <div class="card-datatable table-responsive">
                  <table class="datatables-users table border-top">
                    <thead>
                      <tr>
                        <th>View</th>
                        <th>User</th>
                        <th>Phone No.</th>
                        <th>Gender</th>
                        <th class="text-truncate">Date of Birth</th>
                        <th class="text-truncate">Looking for</th>
                        <th>Interest</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>Bio</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $query="SELECT * FROM `users`";
                        $result=mysqli_query($connect,$query);
                        if (mysqli_num_rows($result)>0) {
                          while ($row=mysqli_fetch_assoc($result)) {

                       ?>
                      <tr>
                        <td class="" >
                            <a href="javascript:;" class="text-body delete-record" data-bs-toggle="modal" data-bs-target="#userDetail">
                              <i class="ti ti-eye ti-sm"></i>
                            </a>
                        </td>
                        <td class="sorting_1">
                          <div class="d-flex justify-content-start align-items-center user-name">
                            <div class="avatar-wrapper">
                              <div class="avatar avatar-md me-3">
                                <img src="<?php echo $row['pic1'] ?>"  alt="Avatar" class="rounded-circle">
                                <!-- <span class="avatar-initial rounded-circle bg-label-danger">VK</span> -->
                              </div>
                            </div>
                            <div class="d-flex flex-column">
                              <a class="text-body text-truncate">
                                <span class="fw-semibold"><?php echo $row['fullName'] ?></span>
                              </a>
                              <small class="text-muted"><?php echo $row['email'] ?></small>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">
                          <span class="me-1"><?php echo $row['countryCode'] ?></span>
                          <span class="text-truncate"><?php echo $row['phone'] ?></span>
                        </td>
                        <td>
                          <span><?php echo $row['gender'] ?></span>
                        </td>
                        <td>
                          <span><?php echo $row['dateBirth'] ?></span>
                        </td>
                        <td class="text-truncate"><?php echo $row['lookfor'] ?></td>
                        <td class="text-truncate"><?php echo $row['interest'] ?></td>
                        <td ><?php echo $row['password'] ?></td>
                        <td >
                          <span class="me-1"><?php echo $row['address'] ?></span>
                          <span><?php echo $row['country'] ?></span>
                        </td>
                        <td ><?php echo $row['bio'] ?></td>
                        <td >
                          <label class="switch switch-primary pb-1">
                            <input type="checkbox" class="switch-input" required />
                            <span class="switch-toggle-slider">
                              <span class="switch-on"></span>
                              <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Send me related emails</span>
                          </label>
                        </td>
                      </tr>
                      <?php }
                        } ?>
                    </tbody>
                  </table>
                </div>
                <!-- Offcanvas to add new user -->
              </div>
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
    <script src="assets/vendor/libs/moment/moment.js"></script>
    <script src="assets/vendor/libs/datatables/jquery.dataTables.js"></script>
    <script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="assets/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
    <script src="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
    <script src="assets/vendor/libs/datatables-buttons/datatables-buttons.js"></script>
    <script src="assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"></script>
    <script src="assets/vendor/libs/jszip/jszip.js"></script>
    <script src="assets/vendor/libs/pdfmake/pdfmake.js"></script>
    <script src="assets/vendor/libs/datatables-buttons/buttons.html5.js"></script>
    <script src="assets/vendor/libs/datatables-buttons/buttons.print.js"></script>
    <script src="assets/vendor/libs/select2/select2.js"></script>
    <script src="assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
    <script src="assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- Page JS -->
    <script src="assets/js/users.js"></script>
  </body>
</html>