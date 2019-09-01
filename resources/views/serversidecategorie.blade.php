<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin DashBoard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
 
    <!-- endinject -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="vendors/style.css">
    <!-- endinject -->
    <link href="img/icon.png" rel="shortcut icon" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ url('dashboard') }}">
                    <img src="images/logo/Aa.png" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="{{ url('dashboard') }}">
                    <img src="images/logo/A.png" alt="logo" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">
                            <i class="mdi mdi-elevation-rise"></i>Data Server Side</a>
                    </li>
                    <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
          </li> -->
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                            data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-file-document-box"></i>
                            <span class="count">7</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="messageDropdown">
                            <div class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                                </p>
                                <span class="badge badge-info badge-pill float-right">View all</span>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                                        <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                                        <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        New product launch
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                                        <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        Upcoming board meeting
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <span class="count">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <a class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                                </p>
                                <span class="badge badge-pill badge-warning float-right">View all</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-alert-circle-outline mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                                    <p class="font-weight-light small-text">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-comment-text-outline mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                                    <p class="font-weight-light small-text">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-email-outline mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                                    <p class="font-weight-light small-text">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-xl-inline-block">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <span class="profile-text">Hello, {{ Auth::user()->name }} !</span>
              <img class="img-xs rounded-circle" src="images/faces/3.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <!-- <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a> -->
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div>
          </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('dashboard') }}">
                            <i class="menu-icon mdi mdi-television"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>       
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('serversideblog') }}">
                        <i class="menu-icon mdi mdi-server"></i>
                        <span class="menu-title">Server Side Blog</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('serversidegallery') }}">
                        <i class="menu-icon mdi mdi-server"></i>
                        <span class="menu-title">Server Side Gallery</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('serversidecategorie') }}">
                        <i class="menu-icon mdi mdi-server"></i>
                        <span class="menu-title">Server Side Categorie</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('serversidetags') }}">
                        <i class="menu-icon mdi mdi-server"></i>
                        <span class="menu-title">Server Side Tags</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-content-copy"></i>
                            <span class="menu-title">Project Data</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('projectblog') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('projectgallery') }}">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('projectcategorie') }}">Categorie</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('projecttag') }}">Tags</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Like what you see? Check out our premium version for more.</p>
                <a class="btn ml-auto download-button d-none d-md-block" href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template" target="_blank">Download Free Version</a>
                <a class="btn purchase-button mt-4 mt-md-0" href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank">Upgrade To Pro</a>
                <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
              </span>
            </div>
          </div> -->
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="mdi mdi-cube text-danger icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 text-right">Categorie's</p>
                                            <div class="fluid-container">
                                                <h3 class="font-weight-medium text-right mb-0">
                                                    {{\App\Categorie::count()}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3 mb-0">
                                        <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> The number of
                                        categories on the web
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="mdi mdi-receipt text-warning icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 text-right">Gallery's</p>
                                            <div class="fluid-container">
                                                <h3 class="font-weight-medium text-right mb-0">{{\App\Gallery::count()}}
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3 mb-0">
                                        <i class="mdi mdi-image-filter" aria-hidden="true"></i> The number of gallery's
                                        on the web
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="mdi mdi-poll-box text-success icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 text-right">Post's</p>
                                            <div class="fluid-container">
                                                <h3 class="font-weight-medium text-right mb-0">{{\App\Blog::count()}}
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3 mb-0">
                                        <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> The number of Post's on
                                        the web
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="mdi mdi-account-location text-info icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 text-right">User Contributor's</p>
                                            <div class="fluid-container">
                                                <h3 class="font-weight-medium text-right mb-0">{{\App\User::count()}}
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3 mb-0">
                                        <i class="mdi mdi-account-multiple" aria-hidden="true"></i> These are the people
                                        who contributed to this web
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Data Categorie</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Kategori</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
                <a href="http://luthfialqodri.space" target="_blank">Laok112</a>. All rights reserved.</span>
        </div>
    </footer>
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <script src="//code.jquery.com/jquery.js"></script>
    <!-- DB -->
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script>
        $(function() {
        $('#myTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'categorie/json',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'qty', name: 'qty' }
        ]
    });
});
</script>
</body>
</html>
