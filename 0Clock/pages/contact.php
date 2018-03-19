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
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" >

    <title>zer0Clock - Contact us</title>

</head>

<body class="">
    <?php
     require_once('../controller/userController.php');
    ?>

    <div class="page-wrapper"> 
        <!-- incclude menu-->        
        <?php include ("../layout/menu.php") ?>          

        <div class="main">
            <div class="main-inner">
                <div class="content">
                    <div class="mt-150">
                        <div class="hero-image">
                            <div class="hero-image-inner" style="background-image: url('../assets/img/tmp/time-saving.png');background-size: 100% 100%; margin-top: -350px;"> 
                        </div><!--/.mt-150-->
                    </div><!-- / .content-->
                </div><!-- / .main-inner-->   
            </div><!-- / . main-->                        

    <h3 style="padding-left:3%; padding-top: 3%; font-weight: bold;">We’d love to hear from you. Say us hello!</h3>

    <div style="padding-left:3%" class="contact-form-wrapper clearfix background-white p30">
        <form class="contact-form" method="post" action="?">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="contact-form-subject">Subject</label>
                        <input type="text" name="subject" id="contact-form-subject" class="form-control" required>
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="contact-form-email">E-mail</label>
                        <input type="email" name="email" id="contact-form-email" class="form-control" required>
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <div class="form-group">
                <label for="contact-form-message">Message</label>
                <textarea name="message" class="form-control" id="contact-form-message" rows="6" required></textarea>
            </div><!-- /.form-group -->

            <button name="contact" class="btn btn-primary pull-right">Send Message</button>
        </form><!-- /.contact-form -->
    </div><!-- /.contact-form-wrapper -->

    <div style="padding-left:3%; margin-bottom: 5%;" class="row">
        <div class="col-sm-4">
            <h3>Address</h3>
            <p>
                1 University Avenue<br>
                Berekuso, Accra
            </p>
        </div><!-- /.col-sm-4 -->

        <div class="col-sm-4">
            <h3>Contacts</h3>
            <p>
                +233286521524<br>
                +2335432176281
            </p>
        </div><!-- /.col-sm-4 -->

        <div class="col-sm-4">
            <h3>Social Profiles</h3>

            <ul class="social-links nav nav-pills">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
        </div><!-- /.col-sm-4 -->
    </div><!-- /.row -->
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

    <script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing" type="text/javascript"></script>

    <script type="text/javascript" src="../assets/libraries/jquery-google-map/infobox.js"></script>
    <script type="text/javascript" src="../assets/libraries/jquery-google-map/markerclusterer.js"></script>
    <script type="text/javascript" src="../assets/libraries/jquery-google-map/jquery-google-map.js"></script>

    <script type="text/javascript" src="../assets/libraries/owl.carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../assets/libraries/bootstrap-fileinput/fileinput.min.js"></script>

    <script src="../assets/js/superlist.js" type="text/javascript"></script>

</body>
</html>
