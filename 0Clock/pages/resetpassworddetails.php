<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="../assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" >
    <link href="../assets/libraries/colorbox/example1/colorbox.css" rel="stylesheet" type="text/css" >
    <link href="../assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/superlist.css" rel="stylesheet" type="text/css" >
    <link href="../assets/css/superlist.css" rel="stylesheet" type="text/css" >

    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" >


    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.png">

    <title>OClock - Reset Password Details</title>
</head>

<body>
    <?php
     require_once('../controller/userController.php');
    ?>
    <section>    
        <header class="header header-transparent">
            <div class="container">
                <div class="header-inner">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="../assets/img/logo-white.png" alt="Logo">
                            <span>0Clock</span>
                        </a>
                    </div><!-- /.header-logo -->
                </div> 
            </div>       
        </header>

        <div class="form-container"> 
        <form id="contact" action="" method="post">
        <php 
        <p id="error" name="error" style="color:red;"><?php echo $error; ?></p>
        <h3>Reset Password</h3>
 
        <fieldset>
            <label>Company name</label>
            <input style="color:black" name= "name" type="text" tabindex="1" required value="<?php echo htmlspecialchars ($companyName);?>">
        </fieldset>
        <fieldset>
            <label>Email</label>
            <input style="color:black" name="email" type="email" tabindex="1" required value="<?php echo htmlspecialchars ($email);?>">
        </fieldset>
        <fieldset>
          <button name="resetpassdetails" type="submit" id="contact-submit">Reset Password</button>
        </fieldset>
        <fieldset>
          <p style="font-weight: bold; color:black"> Back to <a href="../index.php"> Home</a></p>
        </fieldset>
      
      </form>
      
    </div>


    <div class="page-wrapper">
        <footer class="footer">
            <?php include("../layout/footer.php") ?>
        </footer><!-- /.footer -->
    </div>  
    </section>  
     
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
