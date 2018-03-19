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
    <link hr ef="../assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/superlist.css" rel="stylesheet" type="text/css" >
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" >
    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.png">
    <title>zer0Clock - Map</title>    

</head>

<body class="">
    <?php
     require_once('../controller/userController.php');
    ?>

    <div class="page-wrapper"> 
        <!-- incclude menu-->        
        <?php 
            include("../unsecure/processevent.php");
        ?>          

        <div class="main">
        <div class="main-inner">
                <div class="content">
                    <div class="mt-80">
                        <div class="hero-video" style="height: 350px">
                        <video preload="metadata" autoplay="" muted="" loop="">
                            <source src="http://preview.byaviators.com/template/superlist/assets/img/tmp/video.mp4" type="video/mp4">
                        </video>

                        <div class="video-overlay"></div>

                        <div class="container"> 
                            <div style="margin-top: -150px; margin-left: 600px;">
                                <?php include ("../layout/menu.php"); ?>
                            </div>           
                            
                        </div><!-- /.container -->
                    </div><!-- /.hero-video -->
                </div>
            </div>  
        </div>
    
        <div class="main-inner" style="margin-top: -120px">
            <div class="container">
                <div class="content">
                    <div class="row">
                    <div class="col-sm-12">

                        <div class="background-white p30 mb30">
                            <h3 class="page-title">Map Location</h3>

                            <input id="pac-input" class="controls form-control mb30" type="text" placeholder="Enter a location">

                            <div id="map-canvas"></div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input class="form-control" type="text" placeholder="Latitude" id="input-latitude">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-* -->

                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input class="form-control" type="text" placeholder="Lontgitude" id="input-longitude">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-* -->
                            </div><!-- /.row -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>    
        <footer class="footer">
            <?php include("../layout/footer.php") ?>
        </footer><!-- /.footer -->
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

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCKMlE4kPX0nujrDdgvNFvjZXswkNcsleE&&libraries=weather,geometry,visualization,places,drawing" type="text/javascript"></script>
<script type="text/javascript" src="../assets/libraries/jquery-google-map/infobox.js"></script>
<script type="text/javascript" src="../assets/libraries/jquery-google-map/markerclusterer.js"></script>
<script type="text/javascript" src="../assets/libraries/jquery-google-map/jquery-google-map.js"></script>

<script type="text/javascript" src="../assets/libraries/owl.carousel/owl.carousel.js"></script>
<script type="text/javascript" src="../assets/libraries/bootstrap-fileinput/fileinput.min.js"></script>

<script src="../assets/js/superlist.js" type="text/javascript"></script>

</body>
</html>
