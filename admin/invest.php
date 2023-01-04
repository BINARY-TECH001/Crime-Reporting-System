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
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="sammacmedia">
                <div class="sidebar-header">
                    <a href="../index.php"><h3>Crime Reporting</h3></a>    
                    <a href="../index.php"><strong>CCT</strong></a>
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
                    <li  >
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
                    <li class="active">
                        <a href="invest.php">
                            <i class="fa fa-link"></i>
                            Report Issues
                        </a>
                    </li>
                              <?php
                    if($_SESSION['permission']=='ADMIN' or $_SESSION['permission']=='EMPLOYEE' ){
                        
                    
                    ?>
                    <li>
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
                    <li>
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

                            <?php
                            if(isset($mysqli,$_POST['submit'])){
                            $employee_id = mysqli_real_escape_string($mysqli,$_POST['employee_id']);
                            $severity = mysqli_real_escape_string($mysqli,$_POST['severity']);
                            $notes = mysqli_real_escape_string($mysqli,$_POST['notes']);
                            $as = rand(1000,9999);     
                            $case_num = date("YmdHis").'.'.$as;
      
                  
                            $sql = "INSERT INTO cases(employee_id,severity,case_num,notes)VALUES('$employee_id','$severity','$case_num','$notes')";
                            $results = mysqli_query($mysqli,$sql);

                        if($results=='ADMIN'){
                              ?>
                        <div class="alert alert-success strover animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully! </strong><?php echo'Case has successfully added';?></div>
                        <?php

                          }else{
                                ?>
                        <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Danger! </strong><?php echo'OOPS something went wrong';?></div>
            
                        <?php    
                          }      
                
            }
                
                ?>
		<div class="panel panel-default sammacmedia">
            <div class="panel-heading">Reports</div>
        <div class="panel-body">
            <form method="post" action="invest.php">
        <div class="row form-group">
          <div class="col-lg-6">
            <label>Select Employee Number</label>
             <?php
                       
                    $query1 = "SELECT * FROM `employees`";
                    $result1 = mysqli_query($mysqli, $query1);
                    ?>
                    <select class="form-control" name="employee_id">
                    <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option><?php echo $row1['employee_id'];?></option>
                        <?php endwhile;?>
                       
                       </select>
            </div>  
            <div class="col-lg-6">
            <label>CRIME</label>
                <select class="form-control" name="severity">
                <option>LIGHT/SIGN VIOLATION (LSV)</option>
                <option>ROAD OBSTRUCTION (ROB)</option>  
                <option>ROUTE VIOLATION (RTV)</option>    
                <option>SPEED LIMIT VIOLATION (SLV)</option>    
                <option>VEHICLE LICENCE VIOLATION (VLV)</option>    
                <option>VEHICLE NUMBER PLATE VIOLATION (NPV)</option>    
                <option>DRIVER’S LICENCE VIOLATION (DLV)</option>    
                <option>ROAD MARKING VIOLATION (RMV)</option>    
                <option>CAUTION SIGN VIOLATION (CSV)</option>    
                <option>RDANGEROUS DRIVING (DGD)</option>    
                <option>DRIVING UNDER ALCOHOL OR DRUG INFLUENCE (DUI)</option>    
                <option>OPERATING A VEHICLE WITH FORGED DOCUMENTS (OFD)</option>    
                <option>UNAUTHORIZED REMOVAL OF OR TAMPERING WITH ROAD SIGNS (UTS)</option>    
                <option>DO NOT MOVE VIOLATION (DNM)</option>    
                <option>INADEQUATE CONSTRUCTION WARNING (ICW)</option>    
                <option>CONSTRUCTION AREA SPEED LIMIT VIOLATION (CAV)</option>    
                <option>FAILURE TO MOVE OVER (FMO)</option>    
                <option>FAILURE TO COVER UNSTABLE MATERIALS (FCM)</option>    
                <option>OVERLOADING (OVL)</option>    
                <option>DRIVING WITH WORN-OUT TYRE OR WITHOUT SPARE TYRE (TTY)</option>    
                <option>LDRIVING WITHOUT OR WITH SHATTERED WINDSCREEN (VWV)</option>    
                <option>FAILURE TO FIX RED FLAG ON PROJECTED LOAD (FFF)</option>    
                <option>FAILURE TO REPORT ACCIDENT (FRC)</option>    
                <option>MEDICAL PERSONNEL OR HOSPITAL REJECTION OF ROAD ACCIDENT VICTIM(RCV)</option>    
                <option>ASSAULTING MARSHAL ON DUTY (AMD)</option>    
                <option>OBSTRUCTING MARSHAL ON DUTY (OMD)</option>    
                <option>ATTEMPTING TO CORRUPT MARSHAL (ACS)</option>    
                <option>DRIVING WITHOUT SPECIFIED FIRE EXTINGUISHER (FEV)</option>    
                <option>DRIVING A COMMERCIAL VEHICLE WITHOUT PASSENGER MANIFEST (PMV)</option>    
                <option>DRIVING WITHOUT SEAT BELT (SUV)</option>    
                <option>USE OF PHONE WHILE DRIVING (UPD)</option>    
                <option>DRIVING A VEHICLE WHILE UNDER 18 YEARS (UDR))</option>    
                <option>RIDING MOTORCYCLE WITHOUT A CRASH HELMET (RMH)</option>    
                <option>EXCESSIVE SMOKE EMISSION (ESE)</option>    
                <option>MECHANICALLY DEFICIENT VEHICLE (MDV)</option>    
                <option>FAILURE TO INSTALL SPEED LIMITING DEVICE (FSLD)</option>    
                </select>
            </div>
           </div>
                <div class="row form-group">
          <div class="col-lg-12">
              <textarea class="form-control" id="editor" name="notes"></textarea>
            </div>  
             
           </div>
                
                <div class="row">
                <div class="col-md-6">
                  <button type="submit" name="submit" class="btn btn-suc btn-block"><span class="fa fa-plus"></span> Process</button>  
                </div>
                     <div class="col-md-6">
                  <button type="reset" class="btn btn-dan btn-block"><span class="fa fa-times"></span> Cancel</button>  
                </div>
                </div>
            </form>

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
        <!-- jQuery CDN -->
         <script src="assets/js/jquery-1.10.2.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="vendors/ckeditor/sammacmedia.js"></script>

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
              ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                console.log( editor );
		} )
                .catch( error => {
                console.error( error );
		} );
    </script>
    </body>
</html>
