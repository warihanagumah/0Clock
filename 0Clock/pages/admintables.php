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

    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.png">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">

    <title>zer0Clock - Admin Dashboard</title>


    <style type="text/css">

        .browse {
            width:100%; 
             background-color:#ffffff; 
             padding:1%; 
             border:2px solid #009f8b;
             text-align:center; 
             border-radius:10px;
        }
    </style>
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
                                              <?php
                                                  require_once('../database/Database.php');
                                                  $db = Database::getInstance(); 
                                              ?>
                                              
                                              <div class="background-white p20">
                                                <h2 class="page-title">ALL APPOINTMENTS</h2>

                                                <table class="table table-bordered mb0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Purpose</th>
                                                            <th>Start time</th>
                                                            <th>End time</th>
                                                            <th>Email</th>
                                                            <th>phone Number</th>
                                                        </tr>
                                                    </thead>
                                          <?php     
                                              $statement = $db->prepare("SELECT * FROM bookings INNER JOIN events on events.id = bookings.event_id WHERE events.user_id=:id");
                                               $statement->execute(
                                                  array(
                                                    ':id'  => $_SESSION['id']
                                                    )
                                                );
                                               $counter=0;
                                              while ($row = $statement->fetch()){ 
                                                  $counter++; 
                                                  echo'<tbody>
                                                          <tr>
                                                              <td>' . $counter . '</td>
                                                              <td>' . $row['fullname'] . '</td>
                                                              <td>' . $row['title'] .'</td>
                                                              <td>' . $row['start_event'] .'</td>
                                                              <td>'. $row ['end_event'] . '</td>
                                                              <td>' . $row['email']. '</td>
                                                              <td>' . $row['phone']. '</td>
                                                          </tr>
                  
                                                      </tbody>';
                                              }    

                                          ?> 
                                        </table>
                                        </div>

                                        <div class="background-white p20">
                                                <h2 class="page-title">ALL FEEDBACKS</h2>

                                                <table class="table table-bordered mb0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Comment</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <?php 
                                                $statement = $db->prepare("SELECT * FROM feedback where user_id=:id");
                                                $statement->execute(
                                                  array(
                                                  ':id'  => $_SESSION['id']
                                                  )
                                              );
                                              
                                               $counter=0;
                                              while ($row = $statement->fetch()){ 
                                                  $counter++; 
                                                  echo'<tbody>
                                                          <tr>
                                                              <td>' . $counter . '</td>
                                                              <td>' . $row['comment'] . '</td>
                                                              <td>' . $row['date'] .'</td>
                                                          </tr>
                  
                                                      </tbody>';
                                              }    

                                          ?> 
                                        </table>
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

</body>
</html>
