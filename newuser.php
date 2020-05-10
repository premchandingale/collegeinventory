
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect('localhost','root','','collegeinventory');
    $msg= "" ;     


    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        //$drphoto=$_FILES['file']['name'];
   //     $drphoto= $_FILES['file']['name'];
        
        //image Upload
    
     //  move_uploaded_file($_FILES['file']['tmp_name'],"picture/".$_FILES['file']['name']); 
        
        $res=false;
          $insert_query="INSERT INTO `user`(`name`, `username`, `password`) VALUES ('$name','$username','$password')";
              
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
    <title>New User</title> 
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




       <style type="text/css">

                body{
                        background-image:url(myimage3.jpeg);
                        background-size: cover;
			height: auto;
                        background-attachment: fixed;
                }

                .content{
                        
                        width: 100%;
                        padding: 50px;
                        margin: 100px auto;
                        font-family: calibri;
                        border-radius: 10px;
			
                }

                p{
                        font-size: 25px;
                        color: black;
                }

        </style>




</head>
<body>  
 <?php include 'navbar_admin.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center; background-color:black ; color:white; opacity:0.75; width: 80%; margin: auto">New User Form</h1>
            <?php echo $msg; ?>
                              
                  
      
      </div> 
       <div class="col-md-3">
         
       </div>
        <div class="col-md-6 animated bounceIn"> 
          
           
            
                
            <form class="form-horizontal content" action="" method="post" enctype="multipart/form-data" class="content" >
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Name</b></span>
                  <input id="name" type="text" class="form-control" name="name" placeholder="User Name">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Username</b></span>
                  <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Password</b></span>
                  <input id="password" type="text" class="form-control" name="password" placeholder="Password">
                </div>
                <br>
                 
                
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
