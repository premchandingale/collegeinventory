<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    

    $connection= mysqli_connect('localhost','root','','collegeinventory');
    $msg= "" ;
    
    if(isset($_POST['submit'])){
        $drid= $_POST['drid'];
        $category= $_POST['category'];
        $dname= $_POST['dname'];
        $reason= $_POST['reason'];
        $maint= $_POST['maint'];
        $expenditure= $_POST['expenditure'];
        $info= $_POST['info'];

        
        //image Upload

 
        //move_uploaded_file($_FILES['file']['tmp_name'],"picture/".$_FILES['file']['name']); 
        $res=false;
        $insert_query="INSERT INTO `history`(`dr_id`, `category`, `d_name`, `reason`, `maint`, `expenditure`, `info`) VALUES ('$drid','$category','$dname','$reason','$maint','$expenditure','$info')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
        }
        
    }
    
    //$msg="";

    
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Management History</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
  
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css"> 



</head>
<body>  
 <?php include 'navbar_user.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center; background-color: black; color: white; width: 80%; margin: auto; opacity: 0.65">New Management  History Form</h1>
            <?php echo $msg; ?>
      </div> 
       <div class="col-md-3">
        
         <!--
          <br> 
          <form action="" method="post" enctype="multipart/form-data">
              <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input id="drphoto" type="file" class="form-control" name="file"> 

              </div>
              <input type="submit" name="psubmit" class="btn btn-success btn-small">
              
          </form>
           
         -->  
       </div>
        <div class="col-md-6 animated bounceIn"> 
          
           
            
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Device ID</b></span>
                  <input id="drid" type="text" class="form-control" name="drid" placeholder="Device  registration  number ">
                </div>
                <br> 
                
<!--
                 <div class="input-group">
                  <span class="input-group-addon"><b>Type</b></span>
                  <label class="radio-inline">
                      <input type="category" name="type" value="bus">Bus
                    </label>
                <label class="radio-inline">
                  <input type="radio" name="type" value="car">Car
                </label>
                </div>
-->
                 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Device Category</b></span>
                  <input id="category" type="text" class="form-control" name="category" placeholder="Category">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Name</b></span>
                  <input id="dname" type="text" class="form-control" name="dname" placeholder="Device Name">
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Reason</b></span>
                  <input id="reason" type="text" class="form-control" name="reason" placeholder="Reason  of maintenance">
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Maintenance Date</b></span>
                  <input id="maint" type="text" class="form-control" name="maint" placeholder="Date of maintenance">
                </div>
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><b>Expenditure</b></span>
                  <input id="expenditure" type="text" class="form-control" name="expenditure" placeholder="Amount of expenditure">
                </div>
                <br>
                
              
          <!--
                 <script>
                      $( function() {
                        $( "#vehregdate" ).datepicker();
                      } );
                </script> 
                -->
                
                
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Other Info</b></span>
                     <textarea rows="5" id="info" type="text" class="form-control" name="info" placeholder="Extra information about reason  of maintenance"> </textarea>
                  
                </div>
                <br>
                
                <!--
                 <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input id="vehphoto" type="file" class="form-control" name="file">
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input  type="file" class="form-control" name="file"> 

              </div>
                
                
                 -->
                
                <div class="input-group">
                  <input type="submit" value="Submit" name="submit" class="btn btn-success">
                  
                </div>

              </form>   
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
     
      
    
</body>
</html>
