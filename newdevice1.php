<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect('localhost','root','','collegeinventory');
    $msg= "" ;     


    if(isset($_POST['submit'])){
        $drid=$_POST['drid'];
        $category=$_POST['category'];
        $dname=$_POST['dname'];
        $location=$_POST['location'];
        $brand=$_POST['brand'];
        $instdate=$_POST['instdate'];
        $billdate=$_POST['billdate'];
        $storeno=$_POST['storeno'];
        $other=$_POST['other'];
        $status=$_POST['status'];
        $price=$_POST['price'];
        $assistance=$_POST['assistance'];

        //$drphoto=$_FILES['file']['name'];
   //     $drphoto= $_FILES['file']['name'];
        
        //image Upload
    
     //  move_uploaded_file($_FILES['file']['tmp_name'],"picture/".$_FILES['file']['name']); 
        
        $res=false;
          $insert_query="INSERT INTO `inventory`(`dr_id`, `category`, `d_name`, `location`, `brand`, `inst_date`, `bill_date`, `store_no`, `other`, `status`, `price`, `assistance`) VALUES ('$drid','$category','$dname','$location','$brand','$instdate','$billdate','$storeno','$other','$status','$price','$assistance')";
              
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
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
        
        
    }

    
        
       
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Device</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
  
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">




</head>
<body>  
 <?php include 'navbar_user.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center; background-color: black; color: white; width:80%; margin: auto; opacity: 0.65">New Device Form</h1>
            <?php echo $msg; ?>
                              
                  
      
      </div> 
       <div class="col-md-3">
         
       </div>
        <div class="col-md-6 animated bounceIn"> 
          
           
            
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Device ID</b></span>
                  <input id="drid" type="text" class="form-control" name="drid" placeholder="Device ID">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Category</b></span>
                  <input id="category" type="text" class="form-control" name="category" placeholder="Category">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Device Name</b></span>
                  <input id="dname" type="text" class="form-control" name="dname" placeholder="Name">
                </div>
                <br>
                
              
     <!--           
                 <script>
                      $( function() {
                        $( "#drjoin" ).datepicker();
                      } );
                </script> 
     -->           
                 <div class="input-group">
                  <span class="input-group-addon"><b>Location</b></span>
                  <input id="location" type="text" class="form-control" name="location" placeholder="Location  of device">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Brand</b></span>
                  <input id="brand" type="text" class="form-control" name="brand" placeholder="Brand Name">
                </div>
                <br>


                <div class="input-group">
                  <span class="input-group-addon"><b>Installation Date</b></span>
                  <input id="instdate" type="text" class="form-control" name="instdate" placeholder="Date of installation">
                </div>
                <br>
                
              
   <!--             
                 <script>
                      $( function() {
                        $( "#drlicensevalid" ).datepicker();
                      } );
                </script> 
  -->              
                
                
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Billing Date</b></span>
                  <input id="billdate" type="text" class="form-control" name="billdate" placeholder="Date of billing">
                </div>
                
                <br>
                

                <div class="input-group">
                  <span class="input-group-addon"><b>Store Number</b></span>
                  <input id="storeno" type="text" class="form-control" name="storeno" placeholder="Number">
                </div>
                <br>


                 <div class="input-group">
                  <span class="input-group-addon"><b>Device Information</b></span>
                     <textarea rows="5" id="other" type="text" class="form-control" name="other" placeholder="Specifications"> </textarea>
                  
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Status</b></span>
                  <input id="status" type="text" class="form-control" name="status" placeholder="Working status of device">
                </div>
                <br>

                 <div class="input-group">
                  <span class="input-group-addon"><b>Price</b></span>
                  <input id="price" type="text" class="form-control" name="price" placeholder="Price">
                </div>
                <br>

                 <div class="input-group">
                  <span class="input-group-addon"><b>Assistant Name</b></span>
                  <input id="assistance" type="text" class="form-control" name="assistance" placeholder="Assistant Name">
                </div>
                <br>


<!--
                 <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input  type="file" class="form-control" name="file"> 

              </div>
  -->              
                
                 
                
                <div class="input-group">
                  <input type="submit" name="submit" value="Submit" class="btn btn-success">
                  
                </div>
              </form>   
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
   
    
</body>
</html>
