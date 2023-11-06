<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="shortcut icon" type="image/png" href="../Assets/Template/Admin/Dashboard/images/logos/favicon.png" />
  <link rel="stylesheet" href="../Assets/Template/Admin/Dashboard/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between ">
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
              <i class="bi bi-map ti"></i>
            </span>
            <span class="hide-menu">State</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="./District.php" aria-expanded="false">
            <span>
              <i class="bi bi-geo-alt ti"></i>
            </span>
            <span class="hide-menu">District</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="./Place.php" aria-expanded="false">
            <span>
              <i class="bi bi-pin-map ti"></i>
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
              <i class="ti bi bi-ticket-detailed"></i>
            </span>
            <span class="hide-menu">View Lot Details</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="./AssignAuction.php" aria-expanded="false">
            <span>
              <i class="ti bi bi-hand-index-thumb"></i>
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
              <i class="ti bi bi-building-check"></i>
            </span>
            <span class="hide-menu">Company Verification</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="./TraderVerification.php" aria-expanded="false">
            <span>
              <i class="ti bi bi-person-check"></i>
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
              <i class="ti bi bi-card-list"></i>
            </span>
            <span class="hide-menu">View Feedback</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="./ViewAuctionDate.php" aria-expanded="false">
            <span>
              <i class="ti bi bi-calendar-event"></i>
            </span>
            <span class="hide-menu">Auction Date</span>
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
      <!--  Header End -->
      <div class="container-fluid">
    <!-- Row 1 -->
    <div class="row">
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Auction Overview</h5>
                        </div>
                        <div>
                            <select class="form-select">
                                <option value="1">July 2023</option>
                                <option value="2">August 2023</option>
                                <option value="3">September 2023</option>
                                <option value="4">October 2023</option>
                            </select>
                        </div>
                    </div>
                    <div id="chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Yearly Breakup -->
                    <div class="card overflow-hidden">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-9 fw-semibold">Yearly Breakup</h5>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="fw-semibold mb-3">₹48,520</h4>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-arrow-up-left text-success"></i>
                                        </span>
                                        <p class="text-dark me-1 fs-3 mb-0">+15%</p>
                                        <p class="fs-3 mb-0">last year</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-4">
                                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                            <span class="fs-2">2023</span>
                                        </div>
                                        <div>
                                            <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                                            <span class="fs-2">2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-center">
                                        <div id="breakup"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Monthly Earnings -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
                                    <h4 class="fw-semibold mb-3">₹12,350</h4>
                                    <div class="d-flex align-items-center pb-1">
                                        <span class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-arrow-down-right text-danger"></i>
                                        </span>
                                        <p class="text-dark me-1 fs-3 mb-0">-5%</p>
                                        <p class="fs-3 mb-0">last month</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-currency-inr fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="earning"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="mb-4">
                        <h5 class="card-title fw-semibold">Recent Auctions</h5>
                    </div>
                    <ul class="timeline-widget mb-0 position-relative mb-n5">
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-3 text-dark mt-n1">Auction completed: Lot #12345 - Sold for ₹385.90</div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
                            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                                <span class="timeline-badge-border d-block flex-shrink-0"></span>
                            </div>
                            <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New auction added: Lot #56789 - Minimum bid ₹50</div>
                        </li>
                        <!-- Add more recent auction entries here -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">ID</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Date</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Description</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Amount</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Status</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2023-08-01</td>
                                    <td>Payment from John Doe for Lot #12345</td>
                                    <td>₹385.90</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2023-08-01</td>
                                    <td>New auction - Lot #56789</td>
                                    <td>₹0.00</td>
                                    <td><span class="badge bg-primary">Active</span></td>
                                </tr>
                                <!-- Add more recent transaction entries here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    </div>
    <script src="../Assets/Template/Admin/Dashboard/libs/jquery/dist/jquery.min.js"></script>
    <script src="../Assets/Template/Admin/Dashboard/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Assets/Template/Admin/Dashboard/js/sidebarmenu.js"></script>
    <script src="../Assets/Template/Admin/Dashboard/js/app.min.js"></script>
    <script src="../Assets/Template/Admin/Dashboard/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../Assets/Template/Admin/Dashboard/libs/simplebar/dist/simplebar.js"></script>
    <script src="../Assets/Template/Admin/Dashboard/js/dashboard.js"></script>
</body>

</html>