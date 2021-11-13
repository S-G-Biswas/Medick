<?php
  require('connect.php');
   session_start();

  $pid = $_SESSION['patient_id'];
  $query= "select * from patient_tbl where patient_id='$pid'";
//   echo $query;
  
  $res = mysql_query($query, $con);
  $data = mysql_fetch_assoc($res);
  
  $pid=$data['patient_id']; 
 
?>






<!DOCTYPE HTML>
<html>
    <head>
      
      <title>Profile-Setting</title>

      <link href="css/profile.css" rel='stylesheet'>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel='stylesheet'>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </head>

    <body style="background:#BAB3BB  ">

        <div class="container rounded bg-white mt-5 mb-5">
    
            <div class="row">
       
    
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                          <img class="rounded-circle mt-5" width="150px" src="images/<?php echo $data['patient_image'] ?>" >
                          <span class="font-weight-bold">
                         
                         <?php
                         
                          echo"
                            <p>".$data['patient_name']."</p>
                           ";
                          ?>
                          
                          </span>
                          
                          <span class="text-black-50">
                          <?php
                         
                         echo"
                           <p>".$data['patient_email']."</p>
                          ";
                         ?>


                          </span>
                          <span> </span>
                        </div>
                    </div>
        
        
                <div class="col-md-5 border-right">
                  

                      <form  action="update_profile.php" method="POST" enctype="multipart/form-data">
        
                    <div class="p-3 py-5">
                
                        <div class="d-flex justify-content-between align-items-center mb-3">
                           <h4 class="text-right">Profile</h4>
                        </div>
               
               
                        <!-- <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" name="patient_name" value=""></div>
                            
                        </div> -->
               
               
                        <div class="row mt-3">
                             <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" name="patient_name" value="<?php echo $data['patient_name'] ?>"></div>
                             <div class="col-md-12"><label class="labels"></label><input type="hidden" class="form-control" name="patient_id" value="<?php echo $data['patient_id'] ?>"></div> 
                             <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" name="patient_phone" value="<?php echo $data['patient_phone'] ?>"></div>
                             <div class="col-md-12"><label class="labels">Email Address</label><input type="text" class="form-control"name="patient_email"  value="<?php echo $data['patient_email'] ?>"></div>
                             <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" name="patient_password" value="<?php echo $data['patient_password'] ?>"></div>
                             <div class="col-md-12"><label class="labels">City</label><input type="text" class="form-control" name="patient_city" value="<?php echo $data['patient_city'] ?>"></div>
                             <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" name="patient_state" value="<?php echo $data['patient_state'] ?>"></div>
                             <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" name="patient_address" value="<?php echo $data['patient_address'] ?>"></div>
                             <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" name="patient_gender" value="<?php echo $data['patient_gender'] ?>"></div>
                             <div class="col-md-12"><label class="labels">Age</label><input type="text" class="form-control" name="patient_age" value="<?php echo $data['patient_age'] ?>"></div>
                        </div>
               
               
               
                        
               
                                <div class="mt-5 text-center">
                                   <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                                </div>
            
            
                    </div>
                </div>
        
        
                            <div class="col-md-4">
            
                                <div class="p-3 py-5">
                                   <!-- <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span>
                                      <span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span>
                                    </div>
                                    <br> -->
                
                                   <div class="col-md-12"><label class="labels">Profile Photo</label>
                                       <input type="file" class="form-control" name="patient_image" value="">
                                    </div> 
                                    <br>
                
                                   <!-- <div class="col-md-12"><label class="labels">Additional Details</label>
                                       <input type="text" class="form-control" placeholder="additional details" value="">
                                    </div> -->
            
                                </div>
        
                            </div>
    
    
            </div>
        </div>

    </body>



</html>