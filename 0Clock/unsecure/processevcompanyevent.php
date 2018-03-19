
<?php
session_start();
    require_once '../database/Database.php';
    fetchcompanyevents($_SESSION["id"]);
    


    function fetchcompanyevents($id){
        $db = Database::getInstance();

        try
        {

            $data = array();
             
            $statement = $db->prepare('SELECT events.id, events.event_title, events.end_date, events.start_date, users.company_name, users.logo, events.user_id FROM events INNER  JOIN users
           ON events.user_id = users.id WHERE events.end_date > NOW() AND user_id=:id');

            $statement->execute(

                array(
                    ':id'  => $id
                )
            );

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

?>


