<?php
require('connect.php');
  $record_id = $_POST['record_id'];
  $record_name = $_POST['record_title'];
  $addedon = $_POST['record_addedon'];
  $record_image = $_POST['record_image'];

  

 if(!empty($_FILES ["record_image"]["name"])){
 $target_dir = "images/";
 $target_file = $target_dir . basename($_FILES["record_image"]["name"]);
 $image=$_FILES ["record_image"]["name"];
 move_uploaded_file($_FILES["record_image"]["tmp_name"], $target_file);
 }
 else{
  $image=$_POST ["record_image"];
 }

  $query = "update record_tbl set record_title='$record_name', record_addedon = '$addedon', record_file='$record_image' where record_id= '$record_id'";
  //echo $sql;
  mysql_query($query, $con);
    // echo $query;
    header('location:all_records.php');
?>