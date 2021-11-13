<?php
require('connect.php');
  $record_id = $_GET['user'];

  $query = "delete from record_tbl where record_id='$record_id'";
  mysql_query($query, $con);

   header('location:all_records.php');
?>




