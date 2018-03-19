
		<?php
			Require_once '../database/Database.php';
			$db = Database::getInstance(); 
		 ?>
        <div class="content-admin">
            <div class="content-admin-wrapper">
                <div class="content-admin-main">
                    <div class="content-admin-main-inner">
                        <div class="container-fluid">
                            <div class="row">
                               	<div class="col-sm-12">
   									<div class="row">
										<div class="col-sm-12 col-lg-6">
										    <h3 style="font-weight: bold;">SUMMARY OF BOOKINGS AND FEEDBACK</h3>

										   	<div class="row">
										        <div class="col-sm-6">
										            <div class="statusbox">
										            <h2 style="font-weight: bold;">#Bookings this Year</h2>
										            	<?php 
										            			$statement = $db->prepare("SELECT COUNT(*) FROM bookings INNER JOIN events on events.id = bookings.event_id WHERE events.user_id=:id");
										            			$statement->execute(
														            array(
														            ':id'  => $_SESSION['id']
														            )
														        );
														        $num = $statement->fetchColumn();    	
										            			echo '<strong style="color:#008B8B; font-size: 30px; margin-left:60px">' . $num . '</strong>' . "\n";
										            	
										            		?>
										    
													</div><!-- /.statusbox -->
										        </div>

										        <div class="col-sm-6">
											        <div class="statusbox">
												        <h2 style="font-weight: bold;">#Feedbacks this year</h2>
												         	<?php 
										            			$statement = $db->prepare("SELECT COUNT(*) FROM feedback where user_id=:id");
										            			$statement->execute(
														            array(
														            ':id'  => $_SESSION['id']
														            )
														        );
														        $num = $statement->fetchColumn();    

										            			echo '<strong style="color:#008B8B; font-size: 30px; margin-left:60px">' . $num . '</strong>' . "\n";
										            	
										            		?>												   

											        </div>
										        </div>
										    </div><!-- /.row -->
										</div><!-- /.col-* -->

										<div class="col-sm-12 col-lg-6">
										    <h3 style="font-weight: bold;">#</h3>
										    <div class="row">
										        <div class="col-sm-6">
										            <div class="statusbox">
										                <h2 style="font-weight: bold;">#Ongoing events</h2>
										                	<?php 
										            			$statement = $db->prepare("SELECT COUNT(*) FROM events where user_id=:id AND end_date > NOW()");
										            			$statement->execute(
														            array(
														            ':id'  => $_SESSION['id']
														            )
														        );
														        $num = $statement->fetchColumn();    

										            			echo '<strong style="color:#008B8B; font-size: 30px; margin-left:60px">' . $num . '</strong>' . "\n";
										            	
										            		?>	
										                   	
										                
										            </div><!-- /.statusbox -->
										        </div><!-- /.col-* -->

										    </div><!-- /.row -->
										</div><!-- /.col-* -->
									</div><!-- /.row -->

								</div><!-- /.col-* -->
								<div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="background-white p20">
                                                <h2 class="page-title">TODAY'S APPOINTMENTS</h2>

                                                <table class="table table-bordered mb0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Purpose</th>
                                                            <th>Start time</th>
                                                            <th>End time</th>
                                                            <th>Email</th>
                                                            <th>phone Number</th>
                                                        </tr>
                                                    </thead>
                                        <?php 
                                            $today = date("Y-m-d");      
                                            $statement = $db->prepare("SELECT * FROM bookings INNER JOIN events on events.id = bookings.event_id WHERE events.user_id=:id AND date(bookings.start_event)=:today");
										           $statement->execute(
													array(
														':id'  => $_SESSION['id'],
														':today'=>$today
														)
													);
										           $counter=0;
                                            while ($row = $statement->fetch()){ 
                                                $counter++; 
                                                echo'<tbody>
                                                        <tr>
                                                            <td>' . $counter . '</td>
                                                            <td>' . $row['fullname'] . '</td>
                                                            <td>' . $row['title'] .'</td>
                                                            <td>' . $row['start_event'] .'</td>
                                                            <td>'. $row ['end_event'] . '</td>
                                                            <td>' . $row['email']. '</td>
                                                            <td>' . $row['phone']. '</td>
                                                        </tr>
                
                                                    </tbody>';
                                            }    

                                        ?> 
                                        </table>
                                        </div> 
                                    </div>    
                                </div><!-- /.container-fluid -->

                            </div>
                        </div><!-- /.container-fluid -->
                    </div><!-- /.content-admin-main-inner -->
                </div><!-- /.content-admin-main -->

                <div class="content-admin-footer">
                  	<div class="container-fluid">
                        <div class="content-admin-footer-inner">
                            &copy; 2015 All rights reserved. Created by <a href="#">Warihana</a>.
                        </div><!-- /.content-admin-footer-inner -->
                    </div><!-- /.container-fluid -->
                </div><!-- /.content-admin-footer  -->
            </div><!-- /.content-admin-wrapper -->
        </div><!-- /.content-admin -->
              