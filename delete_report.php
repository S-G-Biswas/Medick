<?php
require('connect.php');
  $report_id = $_GET['user'];

  $query = "delete from report_tbl where report_id='$report_id'";
  mysql_query($query, $con);

   header('location:all_test.php');
?>




