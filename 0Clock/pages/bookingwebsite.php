<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" >
    <link href="../assets/libraries/colorbox/example1/colorbox.css" rel="stylesheet" type="text/css" >
    <link href="../assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/superlist.css" rel="stylesheet" type="text/css" >

    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.png">

    <title>zer0Clock - Admin Dashboard</title>
</head>


<body class="">

<div class="page-wrapper">
    
    <header class="header header-minimal">
    <div class="header-wrapper">
        <div class="container-fluid">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="../assets/img/logo.png" alt="Logo">
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">
                    <div class="header-bottom">
                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
    <li >
        <a href="../index.php">Home</a>
    </li>

    <li >
        <a href="contact.php">Contact Us</a>
    </li>

    <li >
        <a href="#">Book Appointment</a>
    </li>

</ul>

<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>


<div class="header-nav-user">
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <div class="user-image">
                <img src="../assets/img/tmp/agent-2.jpg">
                <div class="notification"></div><!-- /.notification-->
            </div><!-- /.user-image -->

            <span class="header-nav-user-name">Natasha Samson</span> <i class="fa fa-chevron-down"></i>
        </button>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="user-profile-edit.html">Edit Profile</a></li>
            <li><a href="listing-submit.html">Submit Listing</a></li>
            <li><a href="change-password.html">Change Password</a></li>
        </ul>
    </div><!-- /.dropdown -->
</div><!-- /.header-nav-user -->

                    </div><!-- /.header-bottom -->
                </div><!-- /.header-content -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->

    <div class="header-statusbar">
        <div class="header-statusbar-inner">
            <div class="header-statusbar-left">
                <h1>Dashboard</h1>
            </div><!-- /.header-statusbar-left -->
        </div><!-- /.header-statusbar-inner -->
    </div><!-- /.header-statusbar -->
</header><!-- /.header -->




    <div class="main">
        <div class="outer-admin">
            <div class="wrapper-admin">
                <div class="sidebar-admin">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-file"></i></a></li>
                        <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                        <li><a href="#"><i class="fa fa-flag-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-folder-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart"></i></a></li>
                        <li><a href="#"><i class="fa fa-cog"></i></a></li>
                    </ul>
                </div><!-- /.sidebar-admin-->

                <div class="sidebar-secondary-admin">
                    <ul>
                        <li class="active">
                            <a href="admin-dashboard.html">
                                <span class="icon"><i class="fa fa-tachometer"></i></span>
                                <span class="title">Dashboard</span>
                                <span class="subtitle">Manage your website</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-forms.html">
                                <span class="icon"><i class="fa fa-i-cursor"></i></span>
                                <span class="title">Customize website</span>
                                <span class="subtitle">Make your site better</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-tables.html">
                                <span class="icon"><i class="fa fa-table"></i></span>
                                <span class="title">Schedule</span>
                                <span class="subtitle">List upcoming activities</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-grid.html">
                                <span class="icon"><i class="fa fa-th"></i></span>
                                <span class="title">Grid</span></span>
                                <span class="subtitle">View Charts</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-notifications.html">
                                <span class="icon"><i class="fa fa-bell"></i></span>
                                <span class="title">Tables</span>
                                <span class="subtitle">Raw data</span>
                            </a>
                        </li>

                        <li >
                            <a href="companywebsite.php">
                                <span class="icon"><i class="fa fa-table"></i></span>
                                <span class="title">Company Website</span>
                                <span class="subtitle">View customized website</span>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.sidebar-secondary-admin -->

                <div class="content-admin">
                    <div class="content-admin-wrapper">
                        <div class="content-admin-main">
                            <div class="content-admin-main-inner">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12">
    <div class="row">
        <div class="col-sm-12">
            <div class="message">
                <h1>Welcome in Dashboard</h1>

                <p>This is a comprehensive dashboard for your registered company. This dashboard shows statistical analysis of bookings monthly as well as clients feedback.</p>
            </div><!-- /.message -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->

    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <h3>Current Balance Status</h3>

            <div class="row">
                <div class="col-sm-6">
                    <div class="statusbox">
                        <h2>Balance</h2>
                        <div class="statusbox-content">
                            <strong>$25,000</strong>
                            <span>Updated 27/04/2015</span>
                        </div><!-- /.statusbox-content -->

                        <div class="statusbox-actions">
                            <a href="#"><i class="fa fa-eye"></i></a>
                            <a href="#"><i class="fa fa-bar-chart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div><!-- /.statusbox-actions -->
                    </div><!-- /.statusbox -->
                </div>

                <div class="col-sm-6">
                    <div class="statusbox">
                        <h2>Progress</h2>
                        <div class="statusbox-content">
                            <strong>$13,200</strong>
                            <span>Updated 27/04/2015</span>
                        </div><!-- /.statusbox-content -->

                        <div class="statusbox-actions">
                            <a href="#"><i class="fa fa-eye"></i></a>
                            <a href="#"><i class="fa fa-bar-chart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div><!-- /.statusbox-actions -->
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.col-* -->

        <div class="col-sm-12 col-lg-6">
            <h3>Monthly Expenses</h3>

            <div class="row">
                <div class="col-sm-6">
                    <div class="statusbox">
                        <h2>Payments</h2>
                        <div class="statusbox-content">
                            <strong>$14,800</strong>
                            <span>Updated 27/04/2015</span>
                        </div><!-- /.statusbox-content -->

                        <div class="statusbox-actions">
                            <a href="#"><i class="fa fa-eye"></i></a>
                            <a href="#"><i class="fa fa-bar-chart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div><!-- /.statusbox-actions -->
                    </div><!-- /.statusbox -->
                </div><!-- /.col-* -->

                <div class="col-sm-6">
                    <div class="statusbox">
                        <h2>Avg. Salary</h2>
                        <div class="statusbox-content">
                            <strong>$12,800</strong>
                            <span>Updated 27/04/2015</span>
                        </div><!-- /.statusbox-content -->

                        <div class="statusbox-actions">
                            <a href="#"><i class="fa fa-eye"></i></a>
                            <a href="#"><i class="fa fa-bar-chart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div><!-- /.statusbox-actions -->
                    </div><!-- /.statusbox -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->
    
</div><!-- /.col-* -->

                                    </div>
                                </div><!-- /.container-fluid -->
                            </div><!-- /.content-admin-main-inner -->
                        </div><!-- /.content-admin-main -->

                        <div class="content-admin-footer">
                            <div class="container-fluid">
                                <div class="content-admin-footer-inner">
                                    &copy; 2015 All rights reserved. Created by <a href="#">    0Clock</a>.
                                </div><!-- /.content-admin-footer-inner -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.content-admin-footer  -->
                    </div><!-- /.content-admin-wrapper -->
                </div><!-- /.content-admin -->
            </div><!-- /.wrapper-admin -->
        </div><!-- /.outer-admin -->
    </div><!-- /.main -->
</div><!-- /.page-wrapper -->

<script src="../assets/js/jquery.js" type="text/javascript"></script>
<script src="../assets/js/map.js" type="text/javascript"></script>

<script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js" type="text/javascript"></script>
<script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js" type="text/javascript"></script>
<script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js" type="text/javascript"></script>
<script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js" type="text/javascript"></script>
<script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js" type="text/javascript"></script>
<script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js" type="text/javascript"></script>
<script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/alert.js" type="text/javascript"></script>

<script src="../assets/libraries/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>

<script src="../assets/libraries/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="../assets/libraries/flot/jquery.flot.spline.js" type="text/javascript"></script>

<script src="../assets/libraries/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

<script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing" type="text/javascript"></script>

<script type="text/javascript" src="../assets/libraries/jquery-google-map/infobox.js"></script>
<script type="text/javascript" src="../assets/libraries/jquery-google-map/markerclusterer.js"></script>
<script type="text/javascript" src="../assets/libraries/jquery-google-map/jquery-google-map.js"></script>

<script type="text/javascript" src="../assets/libraries/owl.carousel/owl.carousel.js"></script>
<script type="text/javascript" src="../assets/libraries/bootstrap-fileinput/fileinput.min.js"></script>

<script src="../assets/js/superlist.js" type="text/javascript"></script>

</body>
</html>
