<!-- Sidenav Menu Start -->
<div class="sidenav-menu">

  <!-- Brand Logo -->
  <a href="<?php echo $base_url; ?>/home" class="logo">
    <span class="logo logo-light">
      <span class="logo-lg"><img src="<?php echo $base_url ?>/assets/images/logo.png" alt="logo"></span>
      <span class="logo-sm"><img src="<?php echo $base_url ?>/assets/images/logo-sm.png" alt="small logo"></span>
    </span>

    <span class="logo logo-dark">
      <span class="logo-lg"><img src="<?php echo $base_url ?>/assets/images/logo-black.png" alt="dark logo"></span>
      <span class="logo-sm"><img src="<?php echo $base_url ?>/assets/images/logo-sm.png" alt="small logo"></span>
    </span>
  </a>

  <!-- Sidebar Hover Menu Toggle Button -->
  <button class="button-on-hover">
    <i class="ti ti-menu-4 fs-22 align-middle"></i>
  </button>

  <!-- Full Sidebar Menu Close Button -->
  <button class="button-close-offcanvas">
    <i class="ti ti-x align-middle"></i>
  </button>

  <div class="scrollbar" data-simplebar>

    <!-- User -->
    <div class="sidenav-user">

      <div class="d-flex justify-content-between align-items-center">
        <div>
          <a href="users-profile.html" class="link-reset">
            <img src="<?php echo $base_url ?>/assets/images/users/user-3.jpg" alt="user-image" class="rounded-circle mb-2 avatar-md">
            <span class="sidenav-user-name fw-bold">Geneva K.</span>
            <span class="fs-12 fw-semibold" data-lang="user-role">Art Director</span>
          </a>
        </div>
        <div>
          <a class="dropdown-toggle drop-arrow-none link-reset sidenav-user-set-icon" data-bs-toggle="dropdown" data-bs-offset="0,12" href="#!" aria-haspopup="false" aria-expanded="false">
            <i class="ti ti-settings fs-24 align-middle ms-1"></i>
          </a>

          <div class="dropdown-menu">
            <!-- Header -->
            <div class="dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome back!</h6>
            </div>

            <!-- My Profile -->
            <a href="profile.html" class="dropdown-item">
              <i class="ti ti-user-circle me-2 fs-17 align-middle"></i>
              <span class="align-middle">Profile</span>
            </a>

            <!-- Settings -->
            <a href="javascript:void(0);" class="dropdown-item">
              <i class="ti ti-settings-2 me-2 fs-17 align-middle"></i>
              <span class="align-middle">Account Settings</span>
            </a>

            <!-- Support -->
            <a href="javascript:void(0);" class="dropdown-item">
              <i class="ti ti-headset me-2 fs-17 align-middle"></i>
              <span class="align-middle">Support Center</span>
            </a>

            <!-- Divider -->
            <div class="dropdown-divider"></div>

            <!-- Logout -->
            <a href="javascript:void(0);" class="dropdown-item fw-semibold">
              <i class="ti ti-logout-2 me-2 fs-17 align-middle"></i>
              <span class="align-middle">Log Out</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!--- Sidenav Menu -->
    <ul class="side-nav">
      <li class="side-nav-title mt-2" data-lang="menu-title">Navigation</li>

      <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
          <span class="menu-icon"><i data-lucide="circle-gauge"></i></span>
          <span class="menu-text" data-lang="dashboards">Dashboards</span>
        </a>

      </li>

      <li class="side-nav-title" data-lang="apps-title">Apps</li>





      <!-- E-commerce  -->
      <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
          <span class="menu-icon"><i data-lucide="shopping-bag"></i></span>
          <span class="menu-text" data-lang="ecommerce">Hotel Management</span>
          <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarEcommerce">
          <ul class="sub-menu">
            <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarProducts" aria-expanded="false" aria-controls="sidebarProducts" class="side-nav-link">
                <span class="menu-text" data-lang="eco-products">Rooms</span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarProducts">
                <ul class="sub-menu">
                  <li class="side-nav-item">
                    <a href="<?php echo $base_url ?>/guest" class="side-nav-link">
                      <span class="menu-text" data-lang="eco-pro-listing">All Guest</span>
                    </a>
                  </li>

                  <li class="side-nav-item">
                    <a href="<?php echo $base_url ?>/guest/customerDetails" class="side-nav-link">
                      <span class="menu-text" data-lang="eco-pro-details">Guest Profile</span>
                    </a>
                  </li>
                  <li class="side-nav-item">
                    <a href="<?php echo $base_url ?>/guest/addGuest" class="side-nav-link">
                      <span class="menu-text" data-lang="eco-pro-add">Add Booking</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="side-nav-item">
              <a href="<?php echo $base_url ?>/guest/categories" class="side-nav-link">
                <span class="menu-text" data-lang="eco-categories">Room Types</span>
              </a>
            </li>



            <li class="side-nav-item">
              <a href="<?php echo $base_url; ?>/review" class="side-nav-link">
                <span class="menu-text" data-lang="eco-reviews">Feedback</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- User -->
      <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarUsers" aria-expanded="false" aria-controls="sidebarUsers" class="side-nav-link">
          <span class="menu-icon"><i data-lucide="users"></i></span>
          <span class="menu-text" data-lang="users"> Employees </span>
          <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarUsers">
          <ul class="sub-menu">
            <li class="side-nav-item">
              <a href="<?php echo $base_url; ?>/user" class="side-nav-link">
                <span class="menu-text" data-lang="contacts">Employee Contacts</span>
              </a>
            </li>
            <li class="side-nav-item">
              <a href="<?php echo $base_url ?>/user/empProfile" class="side-nav-link">
                <span class="menu-text" data-lang="profile">Employee Profile</span>
              </a>
            </li>
            <li class="side-nav-item">
              <a href="<?php echo $base_url ?>/user/roles" class="side-nav-link">
                <span class="menu-text" data-lang="roles">Job Roles</span>
              </a>
            </li>
            <li class="side-nav-item">
              <a href="<?php echo $base_url ?>/user/userRolesDetails" class="side-nav-link">
                <span class="menu-text" data-lang="role-details">Role Details</span>
              </a>
            </li>
            <li class="side-nav-item">
              <a href="<?php echo $base_url ?>/user/userPermission" class="side-nav-link">
                <span class="menu-text" data-lang="permissions">Access Permissions</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- invoice -->
      <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarInvoice" aria-expanded="false" aria-controls="sidebarInvoice" class="side-nav-link">
          <span class="menu-icon"><i data-lucide="receipt-text"></i></span>
          <span class="menu-text" data-lang="invoice"> Invoice</span>
          <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarInvoice">
          <ul class="sub-menu">
            <li class="side-nav-item">
              <a href="<?php echo $base_url ?>/invoice" class="side-nav-link">
                <span class="menu-text" data-lang="invoices">Invoices</span>
              </a>
            </li>
            <li class="side-nav-item">
              <a href="<?php echo $base_url ?>/invoice/invoiceDetails" class="side-nav-link">
                <span class="menu-text" data-lang="invoice-details">View Invoice</span>
              </a>
            </li>
            <li class="side-nav-item">
              <a href="<?php echo $base_url ?>/invoice/createInvoice" class="side-nav-link">
                <span class="menu-text" data-lang="invoice-create">Create Invoice</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- support center -->
      <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarTickets" aria-expanded="false" aria-controls="sidebarTickets" class="side-nav-link">
          <span class="menu-icon"><i data-lucide="life-buoy"></i></span>
          <span class="menu-text" data-lang="support"> Support Center</span>
          <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarTickets">
          <ul class="sub-menu">
            <li class="side-nav-item">
              <a href="tickets-list.html" class="side-nav-link">
                <span class="menu-text" data-lang="tickets">Tickets</span>
              </a>
            </li>
            <li class="side-nav-item">
              <a href="ticket-details.html" class="side-nav-link">
                <span class="menu-text" data-lang="ticket-details">View Ticket</span>
              </a>
            </li>
            <li class="side-nav-item">
              <a href="ticket-create.html" class="side-nav-link">
                <span class="menu-text" data-lang="ticket-create">Create Ticket</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
<!-- Sidenav Menu End -->