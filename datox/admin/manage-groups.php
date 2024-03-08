<?php
include 'include/connection.php';
include 'include/session.php';
$msg = "";
$msg1 = "";

if (isset($_POST['groupSubmit'])) {
    $groupName = $_POST['groupName'];
    $groupImage = "../media/" . $_FILES['groupImage']['name'];
    move_uploaded_file($_FILES['groupImage']['tmp_name'], $groupImage);
    $insert = "INSERT INTO `groups`(`groupName`, `groupImage`) VALUES ('$groupName','$groupImage')";
    $run = mysqli_query($connect, $insert);
    if ($run) {
        $msg = "<div class='alert alert-success'>Group Successfully added</div>";
    } else {
        $msg = "<div class='alert alert-danger'>Group not added</div>";
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

    <title>User List - Pages | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/icons/favicon.ico" />

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
    <link rel="stylesheet" href="assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    <style type="text/css">
      .buttons-collection{
        display: none !important;
      }
      .add-new{
        display: none !important;
      }
    </style>
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
              <h4 class="fw-bold py-2 "><span class="text-muted fw-light">Dashboards /</span> Groups</h4>
              <div class="text-end mb-4">
                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">Create Group</button>
              </div>

              <div class="row g-4">
                <?php 
$query = "SELECT groups.id, groups.groupName, groups.groupImage, COUNT(usergroup.usergroupId) AS totalConnections 
          FROM `groups` 
          LEFT JOIN `usergroup` ON groups.id = usergroup.usergroupId
          GROUP BY groups.id";

$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $groupId = $row['id'];
        $groupName = $row['groupName'];
        $groupImage = $row['groupImage'];
        $totalConnections = $row['totalConnections'];
?>
<div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
        <div class="card-body text-center">
            <div class="dropdown btn-pinned">
                <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical text-muted"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item d-flex align-items-center edit-group-btn" href="#" data-group-id="<?php echo $groupId; ?>" data-bs-toggle="modal" data-bs-target="#edit-group" onclick="editGroup(<?php echo $groupId; ?>)"><i class="ti ti-edit ti-sm me-1"></i>Edit</a></li>
                    <li><a class="dropdown-item text-danger d-flex align-items-center" href="delete.php?groupId=<?php echo $groupId; ?>"><i class="ti ti-trash ti-sm me-1"></i>Delete</a></li>
                </ul>
            </div>
            <div class="mx-auto text-center my-3">

                <img src="<?php echo $groupImage; ?>" alt="Group Image" class="w-px-280 rounded" width="100%" height="190" />
            </div>
            <h4 class="card-title"><?php echo $groupName; ?></h4>
            <div class="d-flex align-items-center justify-content-around my-3 py-1">
                <div>
                    <h4 class="mb-0"><?php echo $totalConnections; ?></h4>
                    <span>Connections</span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    }
} else {
    echo "No groups found.";
}
?>

              </div>
              <div
                  class="offcanvas offcanvas-end"
                  tabindex="-1"
                  id="offcanvasAddUser"
                  aria-labelledby="offcanvasAddUserLabel"
                >
                  <div class="offcanvas-header">
                    <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add New Group</h5>
                    <button
                      type="button"
                      class="btn-close text-reset"
                      data-bs-dismiss="offcanvas"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                    <form class="add-new-user pt-2"  method="POST" enctype="multipart/form-data">
                      <?php echo $msg; ?>
                      <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Group Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="add-user-fullname"
                          placeholder="Group Name"
                          required
                          name="groupName"
                          aria-label="Group Name"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="add-user-contact">Group Image</label>
                        <input
                          type="file"
                          id="add-user-contact"
                          required
                          class="form-control"
                          placeholder="Group Image"
                          aria-label="john.doe@example.com"
                          name="groupImage"
                        />
                      </div>
                     
                      <button type="submit" name="groupSubmit" class="btn btn-primary me-sm-3 me-1 data-submit">Save</button>
                      <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                    </form>
                  </div>
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
    <!-- / Layout wrapper -->
    <div class="modal fade dtr-bs-modal" id="edit-group" role="dialog" aria-modal="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Group</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4">
            <form method="POST" enctype="multipart/form-data">
              <?php echo $msg1; ?>
                  <?php 
                 $groupId=$_GET['groupId'];
                  $query="SELECT * FROM `groups` WHERE id = '$groupId' ";
                  $result=mysqli_query($connect,$query);
                  if (mysqli_num_rows($result)>0) {
                    $row=mysqli_fetch_assoc($result);
                  
                 ?>
                  <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Group Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="edit-group-name"
                          placeholder="Group Name"
                          value="<?php echo $row['groupName'] ?>"
                          required
                          name="groupName"
                          aria-label="Group Name"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="add-user-contact">Group Image</label>
                        <input
                          type="file"
                          id="edit-group-image"
                          
                          class="form-control"
                          placeholder="Group Image"
                          value="<?php echo $row['groupImage'] ?>"
                          aria-label="john.doe@example.com"
                          name="groupImage"
                        />
                      </div>
                      
                      <button type="submit" name="updateGroup" class="btn btn-primary me-sm-3 me-1 data-submit">Update</button>
                    <?php } ?>
                </form>
          </div>
        </div>
      </div>
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
       <script>
   function editGroup(groupId) {
  $.ajax({
    url: 'editgroup.php',
    method: 'POST',
    data: { groupId: groupId },
    success: function(response) {
      try {
        var data = JSON.parse(response);
        if (data.success) {
          // Update the modal with the fetched group data
          $('#edit-group-name').val(data.groupName);
          $('#edit-group-image').attr('src', data.groupImage);
        } else {
          console.error('Server response indicates failure:', data.error);
          alert('Failed to fetch group data: ' + data.error);
        }
      } catch (error) {
        console.error('Failed to parse JSON response:', error);
        alert('Failed to fetch group data');
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {
      console.error('AJAX request failed:', textStatus, errorThrown);
      alert('Failed to fetch group data');
    }
  });
}

       </script>
  </body>
</html>
