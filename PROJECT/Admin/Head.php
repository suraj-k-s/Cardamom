<link rel="shortcut icon" type="image/png" href="../Assets/Template/Admin/Dashboard/images/logos/favicon.png" />
<link rel="stylesheet" href="../Assets/Template/Admin/Dashboard/css/styles.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="../Assets/Template/form.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<style>
  .hlogo {
    font-size: 50px;
    font-weight: 700;
    color: #2a2a2a;
    line-height: 72px;
    font-family: "Audiowide", sans-serif;
  }

  .hlogo>span {
    color: #ff695f;
  }

  .logo {
    margin-top: 15px;
  }
</style>

<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
  <!-- Sidebar Start -->
  <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <div class="logo">
          <div class="item header-text">
           <div style="display: flex;margin-right: 30px;">
          <img src="../Assets/Template/Admin/Dashboard/images/logos/vector-cardamom-ribbon-badge.png"width="70" height="70">
          <h2 class="hlogo">  
            C<span>A</span>M<span>S</span></h2>
          </div>
          </div>
        </div>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./Home.php" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Location</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./State.php" aria-expanded="false">
              <span>
                <i class="bi bi-geo-alt-fill"></i>
              </span>
              <span class="hide-menu">State</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./District.php" aria-expanded="false">
              <span>
                <i class="bi bi-geo-alt-fill"></i>
              </span>
              <span class="hide-menu">District</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./Place.php" aria-expanded="false">
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Place</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">MANAGE AUCTION</span>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="./ViewLotDetails.php" aria-expanded="false">
              <span>
                <i class="ti ti-user-plus"></i>
              </span>
              <span class="hide-menu">View Lot Details</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./AssignAuction.php" aria-expanded="false">
              <span>
                <i class="ti ti-user-plus"></i>
              </span>
              <span class="hide-menu">Assign Auction</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">VERIFICATION</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./CompanyVerification.php" aria-expanded="false">
              <span>
                <i class="ti ti-mood-happy"></i>
              </span>
              <span class="hide-menu">Company Verification</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./TraderVerification.php" aria-expanded="false">
              <span>
                <i class="ti ti-aperture"></i>
              </span>
              <span class="hide-menu">Trader Verification</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Others</span>
          </li>
          <li class="sidebar-item">
          <a class="sidebar-link" href="./TraderComplaint.php" aria-expanded="false">
            <span>
              <i class="ti bi bi-list-ul"></i>
            </span>
            <span class="hide-menu">Trader Complaint</span>
          </a>
        </li>
         <li class="sidebar-item">
          <a class="sidebar-link" href="./CompanyComplaint.php" aria-expanded="false">
            <span>
              <i class="ti bi bi-list-ul"></i>
            </span>
            <span class="hide-menu">Company Complaint</span>
          </a>
        </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./ViewFeedback.php" aria-expanded="false">
              <span>
                <i class="ti ti-aperture"></i>
              </span>
              <span class="hide-menu">View Feedback</span>
            </a>
          </li>

        </ul>

      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
  <!--  Sidebar End -->
  <!--  Main wrapper -->
  <div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item d-block d-xl-none">
            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>

        </ul>
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
          <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

            <li class="nav-item dropdown">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="../Assets/Template/Admin/Dashboard/images/profile/user-1.jpg" alt="" width="35" height="35"
                  class="rounded-circle">
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                <div class="message-body">
                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                    <i class="ti ti-user fs-6"></i>
                    <p class="mb-0 fs-3">My Profile</p>
                  </a>
                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                    <i class="ti ti-mail fs-6"></i>
                    <p class="mb-0 fs-3">My Account</p>
                  </a>
                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                    <i class="ti ti-list-check fs-6"></i>
                    <p class="mb-0 fs-3">My Task</p>
                  </a>
                  <a href="SessionValidator.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="tab" align="center">


      <!--  Header End -->