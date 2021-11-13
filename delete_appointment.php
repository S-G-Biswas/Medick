<?php
require('connect.php');
  $appointment_id = $_GET['user'];

  $query = "delete from appointment_tbl where appointment_id='$appointment_id'";
  mysql_query($query, $con);

   header('location:all_appointments.php');
?>