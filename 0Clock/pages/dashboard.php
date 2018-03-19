<?php ob_start()?>
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

    <?php 
        require_once("../settings/call_init.php");    
        //check user login
        verifyuserlogin();
        include('../layout/admin_menu.php');
    ?>

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
                    <li><a href="#"><i class="fa fa-bar-chart"></i></a></li>                </ul>
            </div><!-- /.sidebar-admin-->
            <?php
                include('../layout/sidebar.php');
                include('../controller/processadmindashboard.php') 
            ?>
        </div><!-- /.page-wrapper -->
    </div>
    </div> 

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
