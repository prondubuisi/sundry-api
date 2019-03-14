<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sundry Food HR Recruitment Portal Admin">
    <meta name="author" content="Waje Smart Solutions">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>Sundry Food HR Recruitment Portal Admin</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
    <link href="vendor/DataTables/datatables.css" rel="stylesheet">
    <link href="vendor/bootstrap-toggle-master/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="css/style.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <div class="logo-area">
                    <a href="#">
                        <img src="images/icon/logo.png" alt="Sundry Group" />
                    </a>
                </div>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="images/icon/user.png" alt="System User" />
                    </div>
                    <h4 class="name">System User</h4>
                    <a href="#">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    @include('partials.menu')
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <div class="logo-area">
                                    <a href="#">
                                        <img src="images/icon/logo.png" alt="System User" />
                                    </a>
                                </div>
                            </div>
                            <div class="header-button2 d-lg-none">
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <div class="logo-area">
                        <a href="#">
                            <img src="images/icon/logo.png" alt="System User" />
                        </a>
                    </div>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="images/icon/user.png" alt="John Doe" />
                        </div>
                        <h4 class="name">john doe</h4>
                        <a href="#">Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        @include('partials.menu')
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <h3>All Openings</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->


            <section>
                
                <table id="openingsTable" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">ID</th>
                            <th class="th-sm">Position</th>
                            <th class="th-sm">Applications</th>
                            <th class="th-sm">Date Created</th>
                            <th class="th-sm">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>32132421</td>
                            <td>System Architect</td>
                            <td><a href="applications.php">14</a></td>
                            <td>21/02/2019</td>
                            <td>
                                <a href="#" title="View Opening">
                                    <i class="fa fa-eye"></i>
                                </a>
                                &nbsp;
                                <a href="#" title="Edit Opening">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                &nbsp;
                                <input type="checkbox" name="isActive" checked="checked">
                            </td>
                        </tr>
                        <tr>
                            <td>32132422</td>
                            <td>Software Engineer</td>
                            <td><a href="applications.php">12</a></td>
                            <td>21/02/2019</td>
                            <td>
                                <a href="#" title="View Opening">
                                    <i class="fa fa-eye"></i>
                                </a>
                                &nbsp;
                                <a href="#" title="Edit Opening">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                &nbsp;
                                <input type="checkbox" name="isActive">
                            </td>
                        </tr>
                        <tr>
                            <td>32132422</td>
                            <td>Office Manager</td>
                            <td><a href="applications.php">27</a></td>
                            <td>21/02/2019</td>
                            <td>
                                <a href="#" title="View Opening">
                                    <i class="fa fa-eye"></i>
                                </a>
                                &nbsp;
                                <a href="#" title="Edit Opening">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                &nbsp;
                                <input type="checkbox" name="isActive" checked="checked">
                                &nbsp;
                                <i class="fa fa-share" data-toggle="tooltip" data-html="true" title="<i class='fa fa-facebook-square'></i>"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>32132424</td>
                            <td>Customer Support</td>
                            <td><a href="applications.php">23</a></td>
                            <td>21/02/2019</td>
                            <td>
                                <a href="#" title="View Opening">
                                    <i class="fa fa-eye"></i>
                                </a>
                                &nbsp;
                                <a href="#" title="Edit Opening">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                &nbsp;
                                <input type="checkbox" name="isActive" checked="checked">
                            </td>
                        </tr>
                    </tbody>
                </table>

            </section>



            <!-- <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>
    <script src="vendor/DataTables/datatables.js"></script>
    <script src="vendor/bootstrap-toggle-master/js/bootstrap-toggle.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            //data-size="small" checked="checked" data-on="Active" data-off="Inactive" data-offstyle="warning"
            $('#openingsTable').DataTable();
            $("input[type='checkbox']").bootstrapToggle({
                on: "Active",
                off: "Inactive",
                onstyle: "success",
                offstyle: "info",
                size: "small"
            });
        });
    </script>
</body>

</html>
<!-- end document-->