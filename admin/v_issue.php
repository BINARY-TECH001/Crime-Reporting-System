<?php require_once('includes/session.php');
      require_once('includes/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Crime Reporting | SECURITY - DASHBOARD</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
         <link rel="stylesheet" href="vendors/datatables/datatables.min.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="sammacmedia">
                <div class="sidebar-header">
                    <h3>Crime Reporting</h3>
                    <strong>CCT</strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="dashboard.php">
                            <i class="fa fa-th"></i>
                           Dashboard
                        </a>
                    </li>
                    <?php
                    if($_SESSION['permission']=='ADMIN' or $_SESSION['permission']=='EMPLOYEE' ){
                        
                    
                    ?>
                    <li>
                        <a href="a_employees.php">
                            <i class="fa fa-plus"></i>
                            Add Employees
                        </a>
                      
                    </li>
                    <?php }?>
                    <li>
                        <a href="all_employees.php">
                            <i class="fa fa-table"></i>
                           All Employees
                        </a>
                    </li>
                    <li>
                        <a href="invest.php">
                            <i class="fa fa-link"></i>
                            Report Issues
                        </a>
                    </li>
                              <?php
                    if($_SESSION['permission']=='ADMIN' or $_SESSION['permission']=='EMPLOYEE' ){
                        
                    
                    ?>
                    <li  class="active">
                        <a href="v_issue.php">
                            <i class="fa fa-table"></i>
                            View Issues
                        </a>
                    </li>
                    <?php }?>
                             <?php
                    if($_SESSION['permission']=='ADMIN' or $_SESSION['permission']=='EMPLOYEE' ){
                        
                    
                    ?>
                    <li>
                        <a href="a_users.php">
                            <i class="fa fa-user"></i>
                            Add Users
                        </a>
                    </li>
                    <li >
                        <a href="v_users.php">
                            <i class="fa fa-table"></i>
                            View Users
                        </a>
                    </li>

                    <li>
                        <a href="rules.php">
                            <i class="fa fa-info"></i>
                            View Rules & Penalty
                        </a>
                    </li>

                    <li>
                        <a href="message.php">
                            <i class="fa fa-user"></i>
                            Messages
                        </a>
                    </li>
                    
                    <?php }?>
                    <li>
                        <a href="settings.php">
                            <i class="fa fa-cog"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
             
                <div clas="col-md-12">
                    <img src="assets/image/line.PNG" class="img-thumbnail">
                    </div>
         
                
                <nav class="navbar navbar-default sammacmedia">
                    <div class="container-fluid">

                        <div class="navbar-header" id="sams">
                            <button type="button" id="sidebarCollapse" id="makota" class="btn btn-sam animated tada navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right  makotasamuel">
                                <li><a href="#"><?php require_once('includes/name.php');?></a></li>
                                <li ><a href="logout.php"><i class="fa fa-power-off"> Logout</i></a></li>
           
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="line"></div>
                                           
		<div class="panel panel-default sammacmedia">
            <div class="panel-heading">All Issues</div>
        <div class="panel-body">
                        <table class="table table-striped thead-dark table-bordered table-hover" id="myTable">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Case Number</th>
                    <th>Employee Id</th>
                    <th>Issues</th>
                    <th>FINE</th>
                    <th>Action</th> 

                    
                    
                    </tr>
                </thead>
                    <?php
                                   $a=1;
                    $query=mysqli_query($mysqli,"select *from `cases` ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                          <tr>
                              <td><?php echo $a;?></td> 
                            <td><?php echo $row['case_num'];?></td>
                            <td><?php echo $row['employee_id'];?></td>
                            <td><?php echo $row['notes'];?></td>  
                            <td>
                                
                                <?php
                            if($row['severity']=="LIGHT/SIGN VIOLATION (LSV)"){
                            echo "<p  class='btn btn-success'>2000</p>"; 

                            }elseif($row['severity']=="ROAD OBSTRUCTION (ROB)"){
                            echo "<p  class='btn btn-warning'>3,000</p>";

                            }elseif($row['severity']=="ROUTE VIOLATION (RTV)"){
                            echo "<p  class='btn btn-warning'>5,000</p>";

                            }elseif($row['severity']=="SPEED LIMIT VIOLATION (SLV)"){
                            echo "<p  class='btn btn-warning'>3,000</p>";

                            }elseif($row['severity']=="VEHICLE LICENCE VIOLATION (VLV)"){
                            echo "<p  class='btn btn-warning'>3,000</p>";

                            }elseif($row['severity']=="VEHICLE NUMBER PLATE VIOLATION (NPV)"){
                            echo "<p  class='btn btn-warning'>3,000</p>";

                            }elseif($row['severity']=="DRIVER’S LICENCE VIOLATION (DLV)"){
                            echo "<p  class='btn btn-warning'>10,000</p>";

                            }elseif($row['severity']=="WRONGFUL OVERTAKING (WOV)"){
                            echo "<p  class='btn btn-warning'>3,000</p>";

                            }elseif($row['severity']=="ROAD MARKING VIOLATION (RMV)"){
                            echo "<p  class='btn btn-warning'>5,000</p>";

                            }elseif($row['severity']=="CAUTION SIGN VIOLATION (CSV)"){
                            echo "<p  class='btn btn-warning'>3,000</p>";

                            }elseif($row['severity']=="DANGEROUS DRIVING (DGD)"){
                            echo "<p  class='btn btn-warning'>50,000</p>";

                            }elseif($row['severity']=="DRIVING UNDER ALCOHOL OR DRUG INFLUENCE (DUI)"){
                            echo "<p  class='btn btn-warning'>5,000</p>";

                            }elseif($row['severity']=="OPERATING A VEHICLE WITH FORGED DOCUMENTS (OFD)"){
                                echo "<p  class='btn btn-warning'>20,000</p>";

                            }elseif($row['severity']=="UNAUTHORIZED REMOVAL OF OR TAMPERING WITH ROAD SIGNS (UTS)"){
                                echo "<p  class='btn btn-warning'>5,000</p>";

                            }elseif($row['severity']=="DO NOT MOVE VIOLATION (DNM)"){
                                echo "<p  class='btn btn-warning'>2,000</p>";

                            }elseif($row['severity']=="INADEQUATE CONSTRUCTION WARNING (ICW)"){
                                echo "<p  class='btn btn-warning'>50,000</p>";

                            }elseif($row['severity']=="CONSTRUCTION AREA SPEED LIMIT VIOLATION (CAV)"){
                                echo "<p  class='btn btn-warning'>3,000</p>";

                            }elseif($row['severity']=="FAILURE TO MOVE OVER (FMO)"){
                                echo "<p  class='btn btn-warning'>3,000</p>";

                            }elseif($row['severity']=="FAILURE TO COVER UNSTABLE MATERIALS (FCM)"){
                                echo "<p  class='btn btn-warning'>5,000</p>";

                            }elseif($row['severity']=="OVERLOADING (OVL)"){
                                echo "<p  class='btn btn-warning'>10,000</p>";

                            }elseif($row['severity']=="DRIVING WITH WORN-OUT TYRE OR WITHOUT SPARE TYRE (TTY)"){
                                echo "<p  class='btn btn-warning'>3,000</p>";

                            }elseif($row['severity']=="DRIVING WITHOUT OR WITH SHATTERED WINDSCREEN (VWV)"){
                                echo "<p  class='btn btn-warning'>2,000</p>";

                            }elseif($row['severity']=="FAILURE TO FIX RED FLAG ON PROJECTED LOAD (FFF)"){
                                echo "<p  class='btn btn-warning'>3,000</p>";

                            }elseif($row['severity']=="FAILURE TO REPORT ACCIDENT (FRC)"){
                                echo "<p  class='btn btn-warning'>20,000</p>";

                            }elseif($row['severity']=="MEDICAL PERSONNEL OR HOSPITAL REJECTION OF ROAD ACCIDENT VICTIM (RCV)"){
                            echo "<p  class='btn btn-warning'>50,000</p>";


                            }elseif($row['severity']=="ASSAULTING MARSHAL ON DUTY (AMD)"){
                                echo "<p  class='btn btn-warning'>10,000</p>";

                            }elseif($row['severity']=="OBSTRUCTING MARSHAL ON DUTY (OMD)"){
                                echo "<p  class='btn btn-warning'>2,000</p>";

                            }elseif($row['severity']=="ATTEMPTING TO CORRUPT MARSHAL (ACS)"){
                                echo "<p  class='btn btn-warning'>10,000</p>";

                            }elseif($row['severity']=="DRIVING WITHOUT SPECIFIED FIRE EXTINGUISHER (FEV)"){
                                echo "<p  class='btn btn-warning'>3,000</p>";

                            }elseif($row['severity']=="DRIVING A COMMERCIAL VEHICLE WITHOUT PASSENGER MANIFEST (PMV)"){
                                echo "<p  class='btn btn-warning'>10,000</p>";

                            }elseif($row['severity']=="DRIVING WITHOUT SEAT BELT (SUV)"){
                                echo "<p  class='btn btn-warning'>2,000</p>";

                            }elseif($row['severity']=="USE OF PHONE WHILE DRIVING (UPD)"){
                                echo "<p  class='btn btn-warning'>4,000</p>";

                            }elseif($row['severity']=="DRIVING A VEHICLE WHILE UNDER 18 YEARS (UDR)"){
                                echo "<p  class='btn btn-warning'>2,000</p>";

                            }elseif($row['severity']=="RIDING MOTORCYCLE WITHOUT A CRASH HELMET (RMH)"){
                                echo "<p  class='btn btn-warning'>2,000</p>";

                            }elseif($row['severity']=="EXCESSIVE SMOKE EMISSION (ESE)"){
                                echo "<p  class='btn btn-warning'>5,000</p>";

                            }elseif($row['severity']=="MECHANICALLY DEFICIENT VEHICLE (MDV)"){
                                echo "<p  class='btn btn-warning'>5,000</p>";

                            }elseif($row['severity']=="FAILURE TO INSTALL SPEED LIMITING DEVICE (FSLD)"){
                                echo "<p  class='btn btn-warning'>3,000</p>";

                            }else{
                            echo "<p  class='btn btn-danger'>0</p>";
                            }     
                            ?>  
                              
                              </td>
                            <td>
                            <a  href="deletes.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"><span class="fa fa-pencil" ></span>Delete</a> 
                              </td>
                          </tr>
                          <?php
                         require('userInfos.php');
                            $a++;
                      }
                       

          
                      if (isset($_GET['idx']) && is_numeric($_GET['idx']))
                      {
                          $id = $_GET['idx'];
                          if ($stmt = $mysqli->prepare("DELETE FROM cases WHERE id = ? LIMIT 1"))
                          {
                              $stmt->bind_param("i",$id);
                              $stmt->execute();
                              $stmt->close();
                               ?>
                    <div class="alert alert-success strover" id="sams1">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong> Successfully! </strong><?php echo'Record Successfully deleted please refresh this page';?></div>
               
                    <?php
                          }
                          else
                          {
                    ?>
                    <div class="alert alert-danger samuel" id="sams1">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong> Danger! </strong><?php echo'OOPS please try again something went wrong';?></div>
                    <?php
                          }
                          $mysqli->close();

                      }
                else

                {

                }
                      ?>
              
               
                </table>
            </div>
                </div>
                <div class="line"></div>
                <footer>
            <p class="text-center">
            Designed by Binary Tech &copy<?php echo date("Y ");?>     
            </p>
            </footer>
            </div>
            
        </div>





         <script src="assets/js/jquery-1.10.2.js"></script>
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="vendors/datatables/datatables.min.js"></script>
         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
             $('sams').on('click', function(){
                 $('makota').addClass('animated tada');
             });
         </script>
         <script type="text/javascript">

        $(document).ready(function () {
 
            window.setTimeout(function() {
        $("#sams1").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
        });
            }, 5000);
 
        });
    </script>
         <script type="text/javascript">
             
             $(document).ready( function () {
                 $('#myTable').DataTable();
             } );
         </script>
    </body>
</html>
