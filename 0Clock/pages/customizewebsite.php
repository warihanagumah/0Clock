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
            require_once('../controller/configurationController.php');

            $company = new ConfigurationClass();
            $id=$_SESSION['id'];
            $company->PopulatePage($id);
        ?>
        <div style="margin-top:-50px;margin-left: -10px;" class="form-container"> 
        <form id="contact" action="" method="post" enctype='multipart/form-data'>
        <h3 style="margin-left: -50px;">Update webpage</h3>
        <p id="error" name="error" style="color:red;"><?php echo $error; ?></p>
 
        <fieldset>
            <label>Company name</label>
            <input style="color:black" name= "Cname" type="text" tabindex="1" required value="<?php echo htmlspecialchars ($_SESSION['company_name']);?>">
        </fieldset>
        <fieldset>
            <label>Email</label>
            <input style="color:black" name="email" type="email" tabindex="1" required value="<?php echo htmlspecialchars ($_SESSION['email']);?>">
        </fieldset>
        <fieldset>
            <label>Phone</label>
            <input style="color:black" name="phone" type="tel" tabindex="1" required value="<?php echo htmlspecialchars ($_SESSION['phone']);?>">
        </fieldset>
         <fieldset>
            <label style="color:black">Business Category</label>
             <select type="checkbox" name="category" tabindex="1" required autofocus>
                <option value=""></option>
                <option value="Health" <?php if($_SESSION['category']=="Health"){echo "selected";}?>>Health</option>

                <option value="Events" <?php if($_SESSION['category']=="Events"){echo "selected";}?>>Events</option>

                <option value="public sector service" <?php if($_SESSION['category']=="public sector service"){echo "selected";}?>>public sector service</option>

                <option value="Meeting Rooms" <?php if($_SESSION['category']=="Meeting Rooms"){echo "selected";}?>>Meeting Rooms</option>

                <option value="Entertainment" <?php if($_SESSION['category']=="Entertainment"){echo "selected";}?>>Entertainment</option>

                <option value="Counselling" <?php if($_SESSION['category']=="Counselling"){echo "selected";}?>>Counselling</option>

                <option value="Education" <?php if($_SESSION['category']=="Education"){echo "selected";}?>>Education</option>

                <option value="Other" <?php if($_SESSION['category']=="Other"){echo "selected";}?>>Other</option>
            </select> 
        </fieldset>
        <fieldset>
            <label>About Company</label>
            <textarea style="color:black" name="description" type="textarea" tabindex="1" rows="5" cols="20" required autofocus><?php echo htmlentities($_SESSION['description']);?></textarea>
        </fieldset>

        <fieldset>
            <label>Image</label>
            <div class="browse">
            <input type="file" accept="image/*" name="image"/>
            <?php 
            echo $_SESSION['image'];
                echo '<img height="90px" width="360px" src="'.$_SESSION['image'].'">';
            ?>

            </div> 
        </fieldset>

   
        <fieldset>
            <label>Logo</label>
            <div class="browse">
            <input type="file" accept="image/*" name="logo"/>
            <?php
                $image= $_SESSION['logo'];
                echo $image;
                echo '<img height="100px" width="360px" src="'.$image.'">';
                ?>
           
            </div>
        </fieldset>     
    
        <fieldset>
            <label>Mission</label>
            <textarea style="color:black" name="mission" type="textarea" tabindex="1" rows="3" cols="10" required autofocus><?php echo htmlentities($_SESSION['mission']);?></textarea>
        </fieldset>
        <fieldset>
            <label>Vision</label>
            <textarea style="color:black" name="vision" type="textarea" tabindex="1" rows="3" cols="10" required autofocus><?php echo htmlentities($_SESSION['vision']);?></textarea>
        </fieldset>
        <fieldset>
          <button name="update" type="submit" id="contact-submit">Update</button>
        </fieldset>

      </form>
      
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
