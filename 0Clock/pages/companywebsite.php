<?php ob_start();
session_start();?>

<!DOCTYPE html>
<html>
<!--
@author Warihana Gumah
-->
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


    <title>Company website</title>
</head>


<body class="">
    <?php
        
        require_once('../model/ConfigurationClass.php');
        $company = new ConfigurationClass();
        include('../unsecure/processevent.php');
    ?>    

    <div class="page-wrapper">
        
        <header class="header header-transparent">
             <div class="header-wrapper">
                <div class="container">
                    <div class="header-inner">
                        <div class="header-logo">
                            <a>
                                <?php
                                    $id=$_SESSION['id'];
                                    $company->PopulatePage($id);

                                    if(isset($_SESSION['logo']) && !empty($_SESSION['logo'])&&($_SESSION['logo']!=null)){
                                        echo '<img height="70" width="70" src="'. $_SESSION['logo'].'">';
                                    }else{
                                        echo '<img src="../assets/img/logo-white.png" alt="Logo">';
                                    }
                                
                                ?>
                                
                            </a>    
                        </div><!-- /.header-logo -->                         
                    </div><!-- /.header-inner -->
                </div><!-- /.container -->
            </div><!-- /.header-wrapper -->
        </header><!-- /.header -->


        <div class="main">
            <div class="main-inner">
                <div class="content">
                    <div class="mt-150">
                        <div class="hero-image">
                        <div class="hero-image-inner" style="background-image: url( <?php echo $_SESSION['image']?>);">

                                <div class="hero-image-content">
                                    <div class="container">                
                                        <a href="events.php" style="border-radius: 12px;" href="#" class="btn btn-primary btn-lg">Back to Schedules</a>
                                    </div><!-- /.container -->
                                </div><!-- /.hero-image-content -->
                            </div><!-- /.hero-image-inner -->
                        </div><!-- /.hero-image -->
                    </div><!--/.mt-150-->
                </div><!-- / .content-->
            </div><!-- / .main-inner-->   
        </div><!-- / . main-->    

        <div style="margin-top:-10%;" class="page-header">
            <p style="color:#009f8b; font-weight: bold;font-size: 30px;">About the Company</p>
            <?php echo '<p style="padding-left:3%; padding-right:3%;">'.$_SESSION['description'].'</p>';?>


            <p style="color:#009f8b; font-weight: bold;font-size: 30px;">Mission</p>
            <?php
                if(isset($_SESSION['mission']) && !empty($_SESSION['mission'])&&($_SESSION['mission']!=null)){
                    echo '<p style="padding-left:3%; padding-right:3%;">'.$_SESSION['mission'].'</p>';
                }else{
                    echo '<p style="padding-left:3%; padding-right:3%;">Our mission is to help</p>';
                }
            ?>    

            <p style="color:#009f8b; font-weight: bold;font-size: 30px;">Vision</p>
            <?php
                if(isset($_SESSION['vision']) && !empty($_SESSION['vision'])&&($_SESSION['vision']!=null)){
                    echo '<p style="padding-left:3%; padding-right:3%;">'.$_SESSION['vision'].'</p>';
                }else{
                    echo '<p style="padding-left:3%; padding-right:3%;">Our Vision is to be the best</p>';
                }
            ?>    


            <p style="color:#009f8b; font-weight: bold;font-size: 30px;">Contact</p>
            <?php
                echo '<p style="padding-left:3%; padding-right:3%;">You can reach ' . $_SESSION['company_name'] . ' on:</p>';   
                echo '<p style="padding-left:3%; padding-right:3%;">Email :' . $_SESSION['email'].'</p>'; 
                echo '<p style="padding-left:3%; padding-right:3%;">Phone :' . $_SESSION['phone'].'</p>';     
            ?>    

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
