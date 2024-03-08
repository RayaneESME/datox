<?php 
  include 'include/connection.php'; 
  include 'include/session.php';  
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Moaki Paris - Datox</title>
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
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/vendor/css/pages/cards-advance.css" />
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
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
              <div class="row">
                <!-- View sales -->
                <div class="col-lg-6 mb-4">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-7">
                        <div class="card-body text-nowrap">
                          <h5 class="card-title mb-1">Welcome to the admin ! 🎉</h5>
                          <p class="mb-3">Best seller of the month</p>
                          <a href="users.php" class="btn btn-primary">View Users</a>
                        </div>
                      </div>
                      <div class="col-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img src="assets/img/illustrations/card-advance-sale.png" height="140" alt="view sales" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- View sales -->
                <!-- Sales Overview -->
                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                  <div class="card">
                    <div class="card-body">
                      <div class="badge p-2 bg-label-success mb-2 rounded">
                        <i class="ti ti-users ti-sm"></i>
                      </div>
                      <h5 class="card-title mb-1 pt-1">Total Users</h5> <?php 
                        $query="SELECT COUNT(*) AS total FROM users";
                        $result=mysqli_query($connect,$query);
                        if (mysqli_num_rows($result)>0) {
                          $row=mysqli_fetch_assoc($result)
                        
                       ?> <h4 class="mb-0"> <?php echo $row['total'] ?> </h4> <?php } ?>
                    </div>
                  </div>
                </div>
                <!--/ Sales Overview -->
                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                  <div class="card">
                    <div class="card-body">
                      <div class="badge p-2 bg-label-primary mb-2 rounded">
                        <i class="ti ti-layout-grid-add ti-sm"></i>
                      </div>
                      <h5 class="card-title mb-1 pt-1">Total Groups</h5> <?php 
                        $query="SELECT COUNT(*) AS total FROM groups";
                        $result=mysqli_query($connect,$query);
                        if (mysqli_num_rows($result)>0) {
                          $row=mysqli_fetch_assoc($result)
                        
                       ?> <h4 class="mb-0"> <?php echo $row['total'] ?> </h4> <?php } ?>
                    </div>
                  </div>
                </div>
                <!-- Earning Reports -->
                <div class="col-lg-6 mb-4">
                  <div class="card h-100">
                    <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
                      <div class="card-title mb-0">
                        <h5 class="mb-0">Users Reports</h5>
                        <small class="text-muted">Last Month</small>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="earningReportsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                      <!-- </div> -->
                    </div>
                    <div class="card-body">
                      <div class="mb-5"></div>
                      <div class="row">
                        <div class="col-12 col-md-3 d-flex flex-column align-self-end">
                          <div class=" gap-2 align-items-center mb-2 pb-1 flex-wrap"> <?php 
                                $query="SELECT COUNT(*) AS total FROM users";
                                $result=mysqli_query($connect,$query);
                                if (mysqli_num_rows($result)>0) {
                                  $row=mysqli_fetch_assoc($result)
                                
                               ?> <h1 class="mb-0"> <?php echo $row['total'] ?> </h1> <?php } ?> <p class="mb-2">Total Users</p>
                            <div class="badge rounded bg-label-success">+4.2%</div>
                          </div>
                          <small class="text-muted">You informed of this month compared to last month</small>
                        </div>
                        <div class="col-12 col-md-9">
                          <div id="weeklyEarningReports"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Earning Reports -->
                <!-- Support Tracker -->
                <div class="col-md-6 mb-4">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="mb-0">Groups Status</h5>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="supportTrackerMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-sm-4 col-md-12 col-lg-4">
                          <div class="mt-lg-4 mt-lg-2 mb-lg-4 mb-2 pt-1"> <?php 
                              $query="SELECT COUNT(*) AS total FROM groups";
                              $result=mysqli_query($connect,$query);
                              if (mysqli_num_rows($result)>0) {
                                $row=mysqli_fetch_assoc($result)
                              
                             ?> <h1 class="mb-0"> <?php echo $row['total'] ?> </h1> <?php } ?> <p class="mb-0">Total Groups</p>
                          </div>
                          <ul class="p-0 m-0">
                            <li class="d-flex gap-3 align-items-center mb-lg-3 pt-2 pb-1">
                              <div class="badge rounded bg-label-primary p-1">
                                <i class="ti ti-ticket ti-sm"></i>
                              </div>
                              <div>
                                <h6 class="mb-0 text-nowrap">Mens</h6>
                                <small class="text-muted">142</small>
                              </div>
                            </li>
                            <li class="d-flex gap-3 align-items-center mb-lg-3 pb-1">
                              <div class="badge rounded bg-label-info p-1">
                                <i class="ti ti-circle-check ti-sm"></i>
                              </div>
                              <div>
                                <h6 class="mb-0 text-nowrap">Womens</h6>
                                <small class="text-muted">28</small>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="col-12 col-sm-8 col-md-12 col-lg-8">
                          <div id="supportTracker"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Support Tracker -->
                <!-- Sales By Country -->
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Popular Groups</h5>
                        <small class="text-muted">Last Month</small>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="salesByCountry" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
                          <a class="dropdown-item" href="javascript:void(0);">Download</a>
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0"> <?php 
                $lastMonth = date('Y-m-d', strtotime('first day of last month'));

                $query = "SELECT groups.id, groups.groupName, groups.groupImage, COUNT(usergroup.usergroupId) AS totalConnections 
                          FROM `groups` 
                          LEFT JOIN `usergroup` ON groups.id = usergroup.usergroupId
                          WHERE usergroup.published >= '$lastMonth' AND usergroup.published < CURDATE()
                          GROUP BY groups.id
                          ORDER BY totalConnections DESC
                          LIMIT 6";

                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $groupId = $row['id'];
                        $groupName = $row['groupName'];
                        $groupImage = $row['groupImage'];
                        $totalConnections = $row['totalConnections'];
                ?> <li class="d-flex align-items-center mb-4">
                          <div class="avatar avatar-md  me-3">
                            <img src="
                              <?php echo $groupImage; ?>" alt="User" class="rounded-circle" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1"> <?php echo $groupName; ?> </h6>
                              </div>
                            </div>
                            <div class="user-progress text-center">
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1">Total User</h6>
                              </div>
                              <span class="text-muted"> <?php echo $totalConnections; ?> </span>
                            </div>
                          </div>
                        </li> <?php
                    }
                } else {
                    echo "No groups found.";
                }
                ?> </ul>
                    </div>
                  </div>
                </div>
                <!--/ Sales By Country -->
                <!-- Projects table -->
                <div class="col-8 col-xl-8 col-sm-12 order-1 order-lg-2 mb-4 mb-lg-0">
                  <div class="card">
                    <div class="card-datatable table-responsive">
                      <table class="datatables-projects table border-top">
                        <thead>
                          <tr>
                            <th></th>
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
                        <tbody> <?php 
                        $query="SELECT * FROM `users` ORDER BY id ASC LIMIT 5 ";
                        $result=mysqli_query($connect,$query);
                        if (mysqli_num_rows($result)>0) {
                          while ($row=mysqli_fetch_assoc($result)) {

                       ?> <tr>
                            <td class="">
                              <a href="javascript:;" class="text-body delete-record" data-bs-toggle="modal" data-bs-target="#userDetail">
                                <i class="ti ti-eye ti-sm"></i>
                              </a>
                            </td>
                            <td class="sorting_1">
                              <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                  <div class="avatar avatar-md me-3">
                                    <img src="
                                        <?php echo $row['pic1'] ?>" alt="Avatar" class="rounded-circle">
                                    <!-- <span class="avatar-initial rounded-circle bg-label-danger">VK</span> -->
                                  </div>
                                </div>
                                <div class="d-flex flex-column">
                                  <a class="text-body text-truncate">
                                    <span class="fw-semibold"> <?php echo $row['fullName'] ?> </span>
                                  </a>
                                  <small class="text-muted"> <?php echo $row['email'] ?> </small>
                                </div>
                              </div>
                            </td>
                            <td class="text-truncate">
                              <span class="me-1"> <?php echo $row['countryCode'] ?> </span>
                              <span class="text-truncate"> <?php echo $row['phone'] ?> </span>
                            </td>
                            <td>
                              <span> <?php echo $row['gender'] ?> </span>
                            </td>
                            <td>
                              <span> <?php echo $row['dateBirth'] ?> </span>
                            </td>
                            <td class="text-truncate"> <?php echo $row['lookfor'] ?> </td>
                            <td class="text-truncate"> <?php echo $row['interest'] ?> </td>
                            <td> <?php echo $row['password'] ?> </td>
                            <td>
                              <span class="me-1"> <?php echo $row['address'] ?> </span>
                              <span> <?php echo $row['country'] ?> </span>
                            </td>
                            <td> <?php echo $row['bio'] ?> </td>
                            <td>
                              <label class="switch switch-primary pb-1">
                                <input type="checkbox" class="switch-input" required />
                                <span class="switch-toggle-slider">
                                  <span class="switch-on"></span>
                                  <span class="switch-off"></span>
                                </span>
                                <span class="switch-label">Send me related emails</span>
                              </label>
                            </td>
                          </tr> <?php }
                        } ?> </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!--/ Projects table -->
              </div>
            </div>
            <!-- / Content -->
            <!-- Footer --> <?php include 'include/footer.php'; ?>
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
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="assets/vendor/libs/swiper/swiper.js"></script>
    <script src="assets/vendor/libs/datatables/jquery.dataTables.js"></script>
    <script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="assets/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
    <script src="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
    <script src="assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>
    <script>
      const weeklyEarningReportsEl = document.querySelector('#weeklyEarningReports'); < ? php
      $data = [];
      $query = "SELECT COUNT(*) AS total FROM users GROUP BY MONTH(created_at)";
      $result = mysqli_query($connect, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $data[] = $row['total'];
        }
      } ? >
      const userCounts = < ? php echo json_encode($data); ? > ;
      const weeklyEarningReportsConfig = {
        chart: {
          height: 202,
          parentHeightOffset: 0,
          type: 'bar',
          toolbar: {
            show: false
          }
        },
        plotOptions: {
          bar: {
            barHeight: '60%',
            columnWidth: '38%',
            startingShape: 'rounded',
            endingShape: 'rounded',
            borderRadius: 4,
            distributed: true
          }
        },
        grid: {
          show: false,
          padding: {
            top: -30,
            bottom: 0,
            left: -10,
            right: -10
          }
        },
        colors: [
          config.colors_label.primary,
          config.colors_label.primary,
          config.colors_label.primary,
          config.colors_label.primary,
          config.colors.primary,
          config.colors_label.primary,
          config.colors_label.primary
        ],
        dataLabels: {
          enabled: false
        },
        series: [{
          data: userCounts
        }],
        legend: {
          show: false
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          labels: {
            style: {
              colors: labelColor,
              fontSize: '13px',
              fontFamily: 'Public Sans'
            }
          }
        },
        yaxis: {
          labels: {
            show: false
          }
        },
        tooltip: {
          enabled: false
        },
        responsive: [{
          breakpoint: 1025,
          options: {
            chart: {
              height: 199
            }
          }
        }]
      };
      if (typeof weeklyEarningReportsEl !== undefined && weeklyEarningReportsEl !== null) {
        const weeklyEarningReports = new ApexCharts(weeklyEarningReportsEl, weeklyEarningReportsConfig);
        weeklyEarningReports.render();
      }
    </script>
  </body>
</html>