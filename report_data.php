
<?php

print_r($_POST);
// var_dump_r($_POST);

require('connect.php');

 
 $name=$_POST['report_title'];
 $addedon=$_POST['report_addedon'];
//  $image=$_POST['record_image'];



 $target_dir = "images/";
 $target_file = $target_dir . basename($_FILES["report_image"]["name"]);
 move_uploaded_file($_FILES["report_image"]["tmp_name"], $target_file);
 $reportimg= basename($_FILES["report_image"]["name"]);

 
 $sql="insert into report_tbl(report_title,report_addedon,report_file) values('$name','$addedon','$reportimg')";
   echo $sql;
  mysql_query($sql,$con);

//   header('location:all_test.php');

 ?>
