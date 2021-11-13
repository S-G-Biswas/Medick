<?php include('topheader.php'); ?> 


<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
    <?php include('sidebar.php'); ?>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<?php include('header.php'); ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Appointments</h2>
					<div class="panel-body widget-shadow">
						<h4>Upcoming Appointments:</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>ID</th>
								  <th> Appointment Title</th>
								  <th>Appointment Date</th>
								  <th>Appointment Time</th>
								  <th>Appoint Doctor</th>
                                  <th>Appointment Address</th>
								</tr>
							</thead>
							
							<?php

                                   require('connect.php');

                                   $query= "select  * from appointment_tbl order by appointment_id DESC limit 7";

                                   $data= mysql_query($query,$con);

                                    // $result= mysql_fetch_assoc($data);


                                   while($result=mysql_fetch_assoc($data))
                                   {
	                                 $aid=$result['appointment_id'];  
                                   
									 echo "


                                        <tbody>
                                        
										<tr>
	                                    <td>".$result['appointment_id']."</td>
	                                    <td>".$result['appointment_title']."</td>
	                                    <td>".$result['appointment_on']."</td>
										<td>".$result['appointment_time']."</td>
										<td>".$result['appoint_doctor']."</td>
										<td>".$result['appointment_address']."</td>
                                        </tr>

                                       </tbody>

		                                ";
                                       }

                                       ?>
						
                        </table>
					</div>
					<br>
                    <br>
		<!--footer-->
		<!-- <div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	   </div> -->
        <!--//footer-->
	</div>
	
	<?php include('footer.php'); ?>