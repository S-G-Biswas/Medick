<?php
require('connect.php');

$id=$_POST['patient_id'];  
$name = $_POST['patient_name'];
$phone = $_POST['patient_phone'];
$email = $_POST['patient_email'];
$password = $_POST['patient_password'];
$city = $_POST['patient_city'];
$state = $_POST['patient_state'];
$address = $_POST['patient_address'];
$gender = $_POST['patient_gender'];
$age = $_POST['patient_age'];
// $image = $_POST['patient_image'];

 if(!empty($_FILES ["patient_image"]["name"])){
 $target_dir = "images/";
 $target_file = $target_dir . basename($_FILES["patient_image"]["name"]);
 $image=$_FILES ["patient_image"]["name"];
 move_uploaded_file($_FILES["patient_image"]["tmp_name"], $target_file);
 }
 else{
  $image=$_POST ["patient_image"];
 }

  $query = "update patient_tbl set patient_name='$name', patient_phone = '$phone', patient_email='$email', patient_password='$password', patient_city='$city', patient_state='$state', patient_address='$address', patient_gender='$gender', patient_age='$age', patient_image='$image' where patient_id= '$id'";

  mysql_query($query, $con);
    // echo $query;
    header('location:index.php');
?>