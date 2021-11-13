<?php

require('connect.php');
session_start();
$email=$_POST['u_email'];
$password=$_POST['u_password'];

$sql="select * from patient_tbl where patient_email='$email' and patient_password='$password'";

$res= mysql_query($sql,$con);
$numrows=mysql_num_rows($res);
//echo $numrows;

if ($numrows>=1){
    $data=mysql_fetch_assoc($res);
    $_SESSION['patient_id']=$data['patient_id'];
    $_SESSION['patient_name']=$data['patient_name'];
    $_SESSION['patient_login']= 1;
    header('location:index.php');
}

else{
    header('location:login.php?error=1');
}
?>