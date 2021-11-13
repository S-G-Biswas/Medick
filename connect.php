 <?php
 
  $host="localhost";
  $user="root";
  $pass="";
//   $db="";   if new version
  $con=mysql_connect($host,$user,$pass);

//   $con=mysql_connect($host,$user,$pass,$db);

  if($con){

    // echo"coneected";
    mysql_select_db("medick_db");

  }

  else{
      echo"not connected";
  }




?>