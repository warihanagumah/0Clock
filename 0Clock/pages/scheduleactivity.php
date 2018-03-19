<?php ob_start()?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/colorbox/example1/colorbox.css" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/superlist.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.png">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">

    <title>zer0Clock - Admin Dashboard</title>
</head>


<body class="">

<div class="page-wrapper">

    <?php 
        require_once("../settings/call_init.php");    
        //check user login
        verifyuserlogin();
        include('../layout/admin_menu.php');
        include('../controller/scheduleController.php');
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
                        <li><a href="#"><i class="fa fa-bar-chart"></i></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart"></i></a></li>
                    </ul>
                </div><!-- /.sidebar-admin-->

                <?php
                    include('../layout/sidebar.php');
                ?>

                <div class="content-admin">
                    <div class="content-admin-wrapper">
                        <div class="content-admin-main">
                            <div class="content-admin-main-inner">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12">
    <div class="row">
        <div style="margin-top:-50px;margin-left: -10px;" class="form-container"> 
        <form id="contact" action="" method="post" enctype='multipart/form-data'>
        <h3 style="margin-left: -50px;">Schedule an Event</h3>
 
        <fieldset>
            <label>Event Title</label>
            <input class="form-control" style="color:black" name= "title" id="title" type="text" tabindex="1" required>
        </fieldset>
        <fieldset>
            <label>Start date and time</label>
            <div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-link-field="dtp_input1">
                <input style="margin-right:300px" class="form-control" name="start" size="35" type="text" readonly required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
            </div>
        </fieldset>
        <fieldset>
            <label>End Date and Time</label>
            <div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                <input style="margin-right:300px" class="form-control" name="end" size="16" type="text" readonly required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
            </div>
        </fieldset>
         <fieldset>
            <label style="color:black">None-working Days</label>
            <input class="form-control" style="color:black" name= "none_working_days" id="none-working" type="text" tabindex="1" placeholder="Sunday, Saturday">             
        </fieldset>
        <fieldset>
            <label style="color:black">None-working Hours</label>
            <input class="form-control" style="color:black" name= "none_working_hours" id="none-working_hours" type="text" tabindex="1"  placeholder="Monday: 12:00pm to 2:pm">             
        </fieldset>
        <fieldset>
            <label>Time Required per Person in Minutes</label>
            <input class="form-control" style="color:black" name= "minutes" id="minutes" type="text" tabindex="1" required>
        </fieldset>
        <fieldset>
          <button name="schedule" type="submit" id="contact-submit">Schedule</button>
        </fieldset>

      </form>

      <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker();
            });
        </script>
      
    </div>
        
    </div><!-- /.row -->
    
</div><!-- /.col-* -->

                                    </div>
                                </div><!-- /.container-fluid -->
                            </div><!-- /.content-admin-main-inner -->
                        </div><!-- /.content-admin-main -->

                        <div class="content-admin-footer">
                            <div class="container-fluid">
                                <div class="content-admin-footer-inner">
                                    &copy; 2015 All rights reserved. Created by <a href="#">0Clock</a>.
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

<script type="text/javascript" src="../assets/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../assets/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        format: 'yyyy-mm-dd hh:ii:ss',
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });

</script>

</body>
</html>
