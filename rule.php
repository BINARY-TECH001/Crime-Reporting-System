<?php 
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
         <link rel="stylesheet" href="datatables/datatables.min.css">

         <style>
             body{
                 background-image: url("");
                 /* height: 24rem; */
                 /* margin-bottom: 50rem; */
                 margin-top: 3rem;
                 /* width: -90vw; */
                 margin-right: 30%;
                 display: flex;
                 align-items: center;
                 justify-content: center;
             }
             
             .hed{
                 display: flex;
                 align-items: center;
                 justify-content: center;
                 background-color: blue;
                 height: 7rem;
             }
           
             .hed h2{
                 display: flex;
                 align-items: center;
                 justify-content: center;
                 color: #fff;
             }
         </style>
    </head>
    <body>



     
                <div class="line"></div>
                <div class="panel panel-default sammacmedia">
                    <div class="hed">
                    <h2>FRSC RULES AND PENALTY</h2>
                    </div>
                    <!-- <h2 class="ru">RULES AND PENALTY</h2> -->
            <div class="panel-heading">Rules And Penalty</div>
        <div class="panel-body">
                        <table class="table table-striped thead-dark table-bordered table-hover" id="myTable" style="width: 100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>INFRINGEMENTS</th>
                    <th>CODE</th>
                    <th>POINTS</th>
                    <th>PENALTY</th>
                    <th>CATEGORY</th> 
                    </tr>
                </thead>

<!-- rule 1 -->
<tr>
                    <td>1</td> 
                    <td>LIGHT/SIGN VIOLATION</td>
                    <td>LSV</td>
                    <td>2</td>  
                    <td>2,000</td>  
                    <td>CRITICAL</td>  
                    <td>
                </tr>
<!-- rule 2 -->
                <tr>
                    <td>2</td> 
                    <td>ROAD OBSTRUCTION</td>
                    <td>ROB</td>
                    <td></td>  
                    <td>3,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 3 -->
                <tr>
                    <td>3</td> 
                    <td>ROUTE VIOLATION</td>
                    <td>RTV</td>
                    <td>5</td>  
                    <td>5,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 4 -->
                <tr>
                    <td>4</td> 
                    <td>SPEED LIMIT VIOLATION</td>
                    <td>SLV</td>
                    <td>3</td>  
                    <td>3,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 5 -->
                <tr>
                    <td>5</td> 
                    <td>VEHICLE LICENCE VIOLATION</td>
                    <td>VLV</td>
                    <td>3</td>  
                    <td>3,000</td>  
                    <td>CRITICAL</td>  
                    <td>
                </tr>
<!-- rule 6 -->
                <tr>
                    <td>6</td> 
                    <td>VEHICLE NUMBER PLATE VIOLATION</td>
                    <td>NPV</td>
                    <td>3</td>  
                    <td>3,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 7  -->

                <tr>
                    <td>7</td> 
                    <td>DRIVER’S LICENCE VIOLATION</td>
                    <td>DLV</td>
                    <td>10</td>  
                    <td>10,000</td>  
                    <td>CRITICAL</td>  
                    <td>
                </tr>
<!-- rule 8 -->
                <tr>
                    <td>8</td> 
                    <td>WRONGFUL OVERTAKING</td>
                    <td>WOV</td>
                    <td>3</td>  
                    <td>3,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 9 -->
                <tr>
                    <td>9</td> 
                    <td>ROAD MARKING VIOLATION</td>
                    <td>RMV</td>
                    <td>5</td>  
                    <td>5,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 10 -->
                <tr>
                    <td>10</td> 
                    <td>CAUTION SIGN VIOLATION</td>
                    <td>CSV</td>
                    <td>3</td>  
                    <td>3,000</td>  
                    <td>DANGER</td>  
                    <td>
                </tr>
<!-- rule 11 -->
                <tr>
                    <td>11</td> 
                    <td>DANGEROUS DRIVING</td>
                    <td>DGD</td>
                    <td>10</td>  
                    <td>50,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 12 -->
                <tr>
                    <td>12</td> 
                    <td>DRIVING UNDER ALCOHOL OR DRUG INFLUENCE</td>
                    <td>DUI</td>
                    <td>5</td>  
                    <td>5,000</td>  
                    <td>CRITICAL</td>  
                    <td>
                </tr>

<!-- rule 13 -->
                <tr>
                    <td>13</td> 
                    <td>OPERATING A VEHICLE WITH FORGED DOCUMENTS</td>
                    <td>OFD</td>
                    <td>10</td>  
                    <td>20,000</td>  
                    <td>CRITICAL</td>  
                    <td>
                </tr>
<!-- rule 14 -->
                <tr>
                    <td>14</td> 
                    <td>UNAUTHORIZED REMOVAL OF OR TAMPERING WITH ROAD SIGNS</td>
                    <td>UTS</td>
                    <td>5</td>  
                    <td>5,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 15 -->
                <tr>
                    <td>15</td> 
                    <td>DO NOT MOVE VIOLATION</td>
                    <td>DNM</td>
                    <td>2</td>  
                    <td>2,000</td>  
                    <td>CRITICAL</td>  
                    <td>
                </tr>
<!-- rule 16 -->
                <tr>
                    <td>16</td> 
                    <td>INADEQUATE CONSTRUCTION WARNING</td>
                    <td>ICW</td>
                    <td>-</td>  
                    <td>50,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 17 -->
                <tr>
                    <td>17</td> 
                    <td>CONSTRUCTION AREA SPEED LIMIT VIOLATION</td>
                    <td>CAV</td>
                    <td>3</td>  
                    <td>3,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 18 -->
                <tr>
                    <td>18</td> 
                    <td>FAILURE TO MOVE OVER</td>
                    <td>FMO</td>
                    <td>3</td>  
                    <td>3,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 19 -->
                <tr>
                    <td>19</td> 
                    <td>FAILURE TO COVER UNSTABLE MATERIALS</td>
                    <td>FCM</td>
                    <td>5</td>  
                    <td>5,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 20 -->
                <tr>
                    <td>20</td> 
                    <td>OVERLOADING</td>
                    <td>OVL</td>
                    <td>10</td>  
                    <td>10,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>

                <!-- rule 20 -->
                <tr>
                    <td>20</td> 
                    <td>OVERLOADING</td>
                    <td>OVL</td>
                    <td>10</td>  
                    <td>10,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 21 -->
                <tr>
                    <td>21</td> 
                    <td>DRIVING WITH WORN-OUT TYRE OR WITHOUT SPARE TYRE</td>
                    <td>TTY</td>
                    <td>3</td>  
                    <td>3,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 22 -->
                <tr>
                    <td>22</td> 
                    <td>LDRIVING WITHOUT OR WITH SHATTERED WINDSCREEN</td>
                    <td>VWV</td>
                    <td>2</td>  
                    <td>2,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 23 -->
                <tr>
                    <td>23</td> 
                    <td>FAILURE TO FIX RED FLAG ON PROJECTED LOAD</td>
                    <td>FFF</td>
                    <td>3</td>  
                    <td>3,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 24 -->
                <tr>
                    <td>24</td> 
                    <td>FAILURE TO REPORT ACCIDENT</td>
                    <td>FRC</td>
                    <td>10</td>  
                    <td>20,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 25     -->
                <tr>
                    <td>25</td> 
                    <td>MEDICAL PERSONNEL OR HOSPITAL REJECTION OF ROAD ACCIDENT VICTIM</td>
                    <td>RCV</td>
                    <td>-</td>  
                    <td>50,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 26 -->
                <tr>
                    <td>26</td> 
                    <td>ASSAULTING MARSHAL ON DUTY</td>
                    <td>AMD</td>
                    <td>10</td>  
                    <td>10,000</td>  
                    <td>CRITICAL</td>  
                    <td>
                </tr>
<!-- rule 27 -->
                <tr>
                    <td>27</td> 
                    <td>OBSTRUCTING MARSHAL ON DUTY</td>
                    <td>OMD</td>
                    <td>2</td>  
                    <td>2,000</td>  
                    <td>CRITICAL</td>  
                    <td>
                </tr>
<!-- rule 28 -->
                <tr>
                    <td>28</td> 
                    <td>ATTEMPTING TO CORRUPT MARSHAL</td>
                    <td>ACS</td>
                    <td>10</td>  
                    <td>10,000</td>  
                    <td>CRITICAL</td>  
                    <td>
                </tr>
<!-- rule 29 -->
                <tr>
                    <td>29</td> 
                    <td>DRIVING WITHOUT SPECIFIED FIRE EXTINGUISHER</td>
                    <td>FEV</td>
                    <td>3</td>  
                    <td>3,000</td>  
                    <td>DANGER</td>  
                    <td>
                </tr>
<!-- rule 30 -->
                <tr>
                    <td>30</td> 
                    <td>DRIVING A COMMERCIAL VEHICLE WITHOUT PASSENGER MANIFEST</td>
                    <td>PMV</td>
                    <td>10</td>  
                    <td>10,000</td>  
                    <td>CRITICAL</td>  
                    <td>
                </tr>
<!-- rule 31 -->
                <tr>
                    <td>31</td> 
                    <td>DRIVING WITHOUT SEAT BELT</td>
                    <td>SUV</td>
                    <td>2</td>  
                    <td>2,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 32 -->
                <tr>
                    <td>32</td> 
                    <td>LUSE OF PHONE WHILE DRIVING</td>
                    <td>UPD</td>
                    <td>4</td>  
                    <td>4,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>

<!-- rule 33 -->
                <tr>
                    <td>33</td> 
                    <td>DRIVING A VEHICLE WHILE UNDER 18 YEARS</td>
                    <td>UDR</td>
                    <td>-</td>  
                    <td>2,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>

<!-- rule 34 -->
                <tr>
                    <td>34</td> 
                    <td>RIDING MOTORCYCLE WITHOUT A CRASH HELMET</td>
                    <td>RMH</td>
                    <td>2</td>  
                    <td>2,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 35 -->
                <tr>
                    <td>35</td> 
                    <td>EXCESSIVE SMOKE EMISSION</td>
                    <td>ESE</td>
                    <td>5</td>  
                    <td>5,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 36 -->

                <tr>
                    <td>36</td> 
                    <td>MECHANICALLY DEFICIENT VEHICLE</td>
                    <td>MDV</td>
                    <td>5</td>  
                    <td>5,000</td>  
                    <td>NORMAL</td>  
                    <td>
                </tr>
<!-- rule 37 -->
                <tr>
                    <td>37</td> 
                    <td>FAILURE TO INSTALL SPEED LIMITING DEVICE</td>
                    <td>FSLD</td>
                    <td>3</td>  
                    <td>3,000</td>  
                    <td>CRITICAL</td>  
                    <td>
                </tr>


</table>