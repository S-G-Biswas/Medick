<?php
require('connect.php');
  
  $appointment_id = $_POST['appointment_id'];
  $appointment_name = $_POST['appointment_title'];
  $appointment_date = $_POST['appointment_date'];
  $appointment_time = $_POST['appointment_time'];
  $appoint_doctor = $_POST['appoint_doctor'];
  $appointment_address = $_POST['appointment_address'];


  $query = "update appointment_tbl set appointment_title='$appointment_name', appointment_on = '$appointment_date', appointment_time='$appointment_time', appoint_doctor='$appoint_doctor', appointment_address='$appointment_address' where appointment_id= '$appointment_id'";
  //echo $sql;
  mysql_query($query, $con);
    // echo $query;
    header('location:all_appointments.php');
?>