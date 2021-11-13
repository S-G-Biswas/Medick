
<?php

// print_r($_POST);
// var_dump_r($_POST);

require('connect.php');

 
 $name=$_POST['record_title'];
 $addedon=$_POST['record_addedon'];
//  $image=$_POST['record_image'];



 $target_dir = "images/";
 $target_file = $target_dir . basename($_FILES["record_image"]["name"]);
 move_uploaded_file($_FILES["record_image"]["tmp_name"], $target_file);
 $recordimg= basename($_FILES["record_image"]["name"]);

 
 $sql="insert into record_tbl(record_title,record_addedon,record_file) values('$name','$addedon','$recordimg')";
  //  echo $sql;
  mysql_query($sql,$con);

  header('location:all_records.php');

 ?>
