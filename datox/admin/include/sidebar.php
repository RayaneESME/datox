<?php
function active($curpage){
   $url = explode('/', $_SERVER['REQUEST_URI']);
   $url = end($url);
   if($curpage == $url){
      echo 'active';
   }
}
?>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <img src="assets/img/favicon/moaki.png" width="160">
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item <?php active('index.php'); ?>">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
              </a>
            </li>
            <li class="menu-item <?php active('users.php'); ?>">
              <a href="users.php" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Users">Users</div>
              </a>
            </li>
            <li class="menu-item <?php active('manage-groups.php'); ?>">
              <a href="manage-groups.php" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                <div data-i18n="Groups">Groups</div>
              </a>
            </li>
            <li class="menu-item <?php active('policy.php'); ?>">
              <a href="policy.php" class="menu-link">
                <i class="menu-icon tf-icons ti ti-lock"></i>
                <div data-i18n="Policy">Policy</div>
              </a>
            </li>
          </ul>
        </aside>