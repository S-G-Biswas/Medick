
<?php

// print_r($_POST);
// var_dump_r($_POST);

require('connect.php');

 
 $name=$_POST['appointment_title'];
 $date=$_POST['appointment_date'];
 $time=$_POST['appointment_time'];
 $doctor=$_POST['appoint_doctor'];
 $address=$_POST['appointment_address'];


 
 $sql="insert into appointment_tbl(appointment_title,appointment_on,appointment_time,appoint_doctor,appointment_address) values('$name','$date','$time','$doctor','$address')";
  //  echo $sql;
  mysql_query($sql,$con);

  header('location:all_appointments.php');

 ?>
