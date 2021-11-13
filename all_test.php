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
					<h2 class="title1">Medical Reports</h2>
					<div class="panel-body widget-shadow">
						<h4>All Test Reports:</h4>
						<table class="table">
						<button style="background:#F1C40F; float:right; width:100px;"><a href="add_report.php" style="color:white;"> Add Report </a> </button>
							<thead>
								<tr>
								  <th>ID</th>
								  <th> Report Title</th>
								  <th>Report Addedon</th>
								  <th>Report File</th>
                                  <th>Operations</th>
								</tr>
							</thead>
							
							<?php

                             require('connect.php');

                               $query= "select  * from report_tbl";

                                $data= mysql_query($query,$con);

                                // $result= mysql_fetch_assoc($data);


                                while($result=mysql_fetch_assoc($data))
                                {
                                	$rid=$result['report_id'];  
                                  echo "


                                    <tbody>
                                      <tr>
	                                  <td>".$result['report_id']."</td>
	                                  <td>".$result['report_title']."</td>
	                                  <td>".$result['report_addedon']."</td>
	                                  <td><img src='images/".$result['report_file']."'></td>
	                                  <td><a href='edit_report.php?user=$rid'>Edit</a> | <a href='delete_report.php?user=$rid'>Delete</a> </td>
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