
<?php
    require_once '../database/Database.php';

    function fetchscheduleheader(){
        $db = Database::getInstance();

        try
        {

            $data = array();
             
            $statement = $db->prepare("SELECT events.event_title, events.end_date, events.start_date, users.company_name, users.logo FROM events INNER  JOIN users
           ON events.user_id = users.id");

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
                                    <button type ="submit" class="btn btn-danger btn-block" style="background-color:#20B2AA" name="view" >Book an Appointment</button>
                                </form> 
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>                        
                                    <dt>'. $row['company_name'].'</dt>                     
                                    <dt><form action="companywebsite.php" method="post">
                                    <input type="hidden" name="id" value="'.$row["id"].'"/>
                                    <button type ="submit" class="btn btn-danger btn-block" style="background-color:#20B2AA" name="view" >View company Website</button>
                                </form></dt>                        
                                    <dt><a href="map.php">View company on map</a></dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->
                </div>';        
            }
        }catch (PDOException $e){
            echo $e->getMessage();
            return;
        }
    }    

?>


