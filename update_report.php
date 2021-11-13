<?php
require('connect.php');
  $report_id = $_POST['report_id'];
  $report_name = $_POST['report_title'];
  $addedon = $_POST['report_addedon'];
  $report_image = $_POST['report_image'];

  

 if(!empty($_FILES ["report_image"]["name"])){
 $target_dir = "images/";
 $target_file = $target_dir . basename($_FILES["report_image"]["name"]);
 $image=$_FILES ["report_image"]["name"];
 move_uploaded_file($_FILES["report_image"]["tmp_name"], $target_file);
 }
 else{
  $image=$_POST ["report_image"];
 }

  $query = "update report_tbl set report_title='$report_name', report_addedon = '$addedon', report_file='$report_image' where report_id= '$report_id'";
  //echo $sql;
  mysql_query($query, $con);
    // echo $query;
    header('location:all_test.php');
?>