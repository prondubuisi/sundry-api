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
    <link rel="stylesheet" href="vendor/summernote/summernote-bs4.css">

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
                            <!-- <h2>Recruitment Portal</h2> -->
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
                                        <h3>New Update</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->


            <section>
                <form role="form" id="updateForm">
                    <div class="form-group">
                        <label for="title">Email Title:</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Email Title" />
                    </div>
                    <div class="form-group">
                        <label for="from">From:</label>
                        <input type="email" name="from"  id="from" class="form-control" placeholder="you@yourdomain.com" />
                    </div>
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea class="summernote form-control" id="content" name="content"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-lg btn-primary" />
                    </div>
                </form>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.5/umd/popper.js"></script>
    <script type="text/javascript" src="vendor/summernote/summernote-bs4.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script>
        $('.summernote').summernote({
            height: 400,
        });
    </script>
</body>

</html>
<!-- end document-->