<?php
  require('connect.php');
  $appointment_id = $_GET['user'];

  $query= "select * from appointment_tbl where appointment_id = '$appointment_id'";
  $res = mysql_query($query, $con);

  $usr = mysql_fetch_assoc($res);

?>

<?php include('topheader.php') ?>


<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
        <?php include('sidebar.php') ?>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
	<?php include('header.php') ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Appointment</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Edit Appointment :</h4>
						</div>
						<div class="form-body">
							
                            <form  action="update_appointment.php" method="POST" enctype="multipart/form-data"> 
                                
                            <div class="form-group"> 
                                    <label for="exampleInputEmail1">Appointment Id</label> 
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $usr['appointment_id'] ?>" name="appointment_id"> 
                                </div> 
                                <br>    
                                                    
                            
                            <div class="form-group"> 
                                    <label for="exampleInputEmail1">Appointment Title</label> 
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $usr['appointment_title'] ?>" name="appointment_title"> 
                                </div> 
                                <br>
                                
                                <div class="form-group"> 
                                    <label for="exampleInputPassword1">Appointment Date</label> 
                                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $usr['appointment_on'] ?>" name="appointment_date">
                                 </div>
                                 <br> 
                                 
                                 
                                 <div class="form-group"> 
                                     <label for="exampleInputFile">Appointment Time</label> 
                                    <input type="text" class="form-control" id="exampleInputFile" value="<?php echo $usr['appointment_time'] ?>" name="appointment_time">  
                                 </div> 
                                <br>

                                <div class="form-group"> 
                                    <label for="exampleInputPassword1">Appoint Doctor</label> 
                                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $usr['appoint_doctor'] ?>" name="appoint_doctor">
                                 </div>
                                 <br> 

                                 <div class="form-group"> 
                                    <label for="exampleInputPassword1">Appointment Address</label> 
                                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $usr['appointment_address'] ?>" name="appointment_address">
                                 </div>
                                 <br> 

                                <br>
                             
                            
                               <button type="submit" class="btn btn-default">Update</button> 
                            
                            </form> 
						
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	   </div>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>