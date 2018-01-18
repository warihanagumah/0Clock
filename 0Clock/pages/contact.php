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

    <title>0Clock - Contact us</title>
</head>

<body class="">

    <div class="page-wrapper"> 
        <!-- incclude menu-->        
        <?php include ("../layout/menu.php") ?>          

        <div class="main">
        <div class="main-inner">
            <div class="content">
                <div class="mt-150">
                    <div class="hero-image">
                        <div style="height:30vh" class="hero-image-inner" style="background-image: url('../assets/img/tmp/time-saving.png');"> 
                        <div><!-- /.hero-image-inner -->
                    </div><!-- /.hero-image -->
                </div><!--/.mt-150-->
            </div><!-- / .content-->
        </div><!-- / .main-inner-->   
    </div><!-- / . main-->                        


    <div style="padding-left:3%" class="row">
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

    <div class="background-white p30 mt30 mb30">
        <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Washington+D.C.+white+house&amp;aq=t&amp;sll=37.0625,-95.677068&amp;sspn=60.376022,92.460937&amp;ie=UTF8&amp;hq=Washington+D.C.+white+house&amp;t=m&amp;ll=38.896984,-77.036518&amp;spn=0.006295,0.006295&amp;output=embed" width="100%" height="350" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
    </div>

    <h3 style="padding-left:3%">We’d love to hear from you. Say us hello!</h3>

    <div style="padding-left:3%" class="contact-form-wrapper clearfix background-white p30">
        <form class="contact-form" method="post" action="?">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="contact-form-name">Name</label>
                        <input type="text" name="name" id="contact-form-name" class="form-control">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="contact-form-subject">Subject</label>
                        <input type="text" name="subject" id="contact-form-subject" class="form-control">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="contact-form-email">E-mail</label>
                        <input type="text" name="email" id="contact-form-email" class="form-control">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <div class="form-group">
                <label for="contact-form-message">Message</label>
                <textarea class="form-control" id="contact-form-message" rows="6"></textarea>
            </div><!-- /.form-group -->

            <button class="btn btn-primary pull-right">Post Message</button>
        </form><!-- /.contact-form -->
    </div><!-- /.contact-form-wrapper -->
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
