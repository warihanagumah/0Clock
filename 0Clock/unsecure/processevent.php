
<?php
    require_once '../database/Database.php';
    if(isset($_POST['view'])){
        $id=$_POST['user_id'];
        $_SESSION["id"]=$id;

    }else if(isset($_POST['book'])){
        $id=$_POST['id'];
        $_SESSION["id"]=$id;
    }else if(isset($_POST['map'])){
        $name=$_POST['company_name'];
        $_SESSION['name']=$name;
    }else if(isset($_POST['read'])){
        $id=$_POST['id'];
        $_SESSION["id"]=$id;
    }

    function showevents(){
        if(isset($_POST['search'])){
            $term=$_POST['searchterm'];
            fetchsearchedevents($term);

        }
        else {
            fetcheventdetails();

        }
    }

    function fetcheventdetails(){
        $db = Database::getInstance();

        try
        {

            $data = array();
             
            $statement = $db->prepare("SELECT events.id, events.event_title, events.end_date, events.start_date, users.company_name, users.logo, events.user_id FROM events INNER  JOIN users
           ON events.user_id = users.id WHERE events.end_date > NOW()");

            $statement->execute();

            $result = $statement->fetchAll();

            foreach($result as $row)
            {
                echo '<div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image='.$row['logo'].'>                    
                            </div>

                            <div class="card-row-body">
                                <a class="card-row-title">'. $row['event_title'].'</a>
                                <div class="card-row-content"><p>'. $row['start_date']. ' - ' . $row['end_date']. '</p></div>
                                <form action="readmore.php" method="post">
                                    <input type="hidden" name="id" value="'.$row["id"].'"/>
                                    <button type ="submit" style="background-color:Transparent; border: none; color:#20B2AA; font-size: 20px; font-weight:bold;" name="read" >Read more ....</button>
                                </form> 
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>                        
                                    <dt>'. $row['company_name'].'</dt>                     
                                    <dt><form action="companywebsite.php" method="post">
                                    <input type="hidden" name="user_id" value="'.$row["user_id"].'"/>
                                    <button type ="submit" style="background-color:Transparent; border: none; color:#20B2AA" name="view" >View company website</button>
                                </form></dt>                        
                                    <dt><form action="map.php" method="post">
                                    <input type="hidden" name="company_name" value="'.$row["company_name"].'"/>
                                    <button type ="submit" style="background-color:Transparent; border: none; color:#20B2AA" style="background-color:#20B2AA" name="map" >pin venue on map</button>
                                </form></dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->
                </div><br>';        
            }
        }catch (PDOException $e){
            echo $e->getMessage();
            return;
        }
    }


    function populatecalenderheader(){
        $db = Database::getInstance();

        try
        {

            $data = array();
             
            $statement = $db->prepare("SELECT events.id, events.event_title, events.end_date, events.start_date, users.company_name, users.logo, events.user_id FROM events INNER  JOIN users
           ON events.user_id = users.id WHERE events.id=:id");

            $statement->execute(
            array(
            ':id'  => $_SESSION['id']
            )
        );

            
        $result = $statement->fetchAll();


            foreach($result as $row)
            {
                $_SESSION['company_name']=$row['company_name'];
                echo '<a href="readmore.php" style="margin-left:5%; font-size:30px; font-weight:bold; color:blue;"><-Back</a>
                <h1 style="text-align:center; color:#00008B">'.$row['company_name'].'</h1>
                <h2 style="text-align:center; color:blue">'.$row['event_title'].'</h2> 
                <p style="text-align:center; color:blue">'.$row['start_date']. ' - '. $row['end_date'] .'</p>';        
            }
        }catch (PDOException $e){
            echo $e->getMessage();
            return;
        }
    } 



    function populatecalenderbuttom(){
        $db = Database::getInstance();
        try
        {

            $data = array();
             
            $statement = $db->prepare("SELECT events.id, events.event_title, events.end_date,events.none_working_days, events.none_working_hours, events.time_per_person, events.start_date, users.company_name, users.logo, events.user_id FROM events INNER  JOIN users
           ON events.user_id = users.id WHERE events.id=:id");

            $statement->execute(
            array(
            ':id'  => $_SESSION['id']
            )
        );

            
        $result = $statement->fetchAll();

        foreach($result as $row)
            {
        echo' 
        <div class="row">
            <div class="col-sm-6">
                <div class="testimonial">
                <div class="testimonial-image">
                    <img src="../assets/img/tmp/agent-1.jpg" alt="">
                </div><!-- /.testimonial-image -->

                <div class="testimonial-inner">
                    <div class="testimonial-title">
                    <h2>About Event</h2>
                    </div><!-- /.testimonial-title -->

                    Venue: '.$row['company_name'] .'<br>
                    Event title: ' . $row['event_title']. '<br>
                    Start date and time of Event : '.$row['start_date'] . '<br>
                    End date and time of event : '.$row['end_date'].'<br>
                    Time required per person : '. $row['time_per_person'] . 'minutes <br>
                </div><!-- /.testimonial-inner -->
            </div><!-- /.testimonial -->

            <div class="testimonial last">
                <div class="testimonial-image">
                    <img src="../assets/img/tmp/agent-3.jpg" alt="">
                </div><!-- /.testimonial-image -->

                <div class="testimonial-inner">
                    <div class="testimonial-title">
                        <h2>About Company</h2>
                    </div><!-- /.testimonial-title -->

                   None Working days: '.$row['none_working_days'] .'<br>
                    None working hours: ' . $row['none_working_hours']. '<br>
                </div><!-- /.testimonial-inner -->
            </div></div></div>
            <div style="margin-top:50px; margin-right:100px;">
                <form action="calender.php" method="post">
                    <input type="hidden" name="id" value="'.$row["id"].'"/>
                    <button type ="submit" class="btn btn-danger btn-block" style="background-color:#20B2AA" name="book" style="font-size: 50px">Book an Appointment</button>
                </form>
            </div><!-- /.testimonial -->
        <!-- /.col-* -->';
    }
    }catch (PDOException $e){
            echo $e->getMessage();
            return;
        }
    }


    function  fetchsearchedevents($term){
        $db = Database::getInstance();

        try
        {

            $data = array();
             
            $statement = $db->prepare("SELECT events.id, events.event_title, events.end_date, events.start_date, users.company_name, users.logo, events.user_id FROM events INNER  JOIN users
           ON events.user_id = users.id WHERE events.event_title LIKE '%$term%' OR users.company_name LIKE '%$term%' AND events.end_date > NOW()");

            $statement->execute();

            $result = $statement->fetchAll();

            foreach($result as $row)
            {
                echo '<div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image='.$row['logo'].'>                    
                            </div>

                            <div class="card-row-body">
                                <a class="card-row-title">'. $row['event_title'].'</a>
                                <div class="card-row-content"><p>'. $row['start_date']. ' - ' . $row['end_date']. '</p></div>
                                <form action="calender.php" method="post">
                                    <input type="hidden" name="id" value="'.$row["id"].'"/>
                                    <button type ="submit" class="btn btn-danger btn-block" style="background-color:#20B2AA" name="book" >Book an Appointment</button>
                                </form> 
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>                        
                                    <dt>'. $row['company_name'].'</dt>                     
                                    <dt><form action="companywebsite.php" method="post">
                                    <input type="hidden" name="user_id" value="'.$row["user_id"].'"/>
                                    <button type ="submit" class="btn btn-danger btn-block" style="background-color:#20B2AA" name="view" >View company Website</button>
                                </form></dt>                        
                                    <dt><a href="map.php">View company on map</a></dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->
                </div><br>';        
            }
        }catch (PDOException $e){
            echo $e->getMessage();
            return;
        }



    }   

?>


