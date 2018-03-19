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
            <?php
                require_once('../database/Database.php');
                $db = Database::getInstance(); 
                $statement = $db->prepare("SELECT company_name FROM users WHERE id=:id");
                $statement->execute(
                    array(
                        ':id'  => $_SESSION['id']
                        )
                    );
                $row = $statement->fetch();
                echo '<span class="header-nav-user-name">'. $row['company_name'].'</span> <i class="fa fa-chevron-down"></i>';
            ?>

            
        </button>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="logout.php">Logout</a></li>
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