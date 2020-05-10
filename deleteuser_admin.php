<?php
   
   $username= $_GET['username'];

   $conn=mysqli_connect('localhost','root','','collegeinventory');
   $sql="DELETE FROM user WHERE username='$username'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: userlist_admin.php");
   }else{
         echo "Not deleted";
   }
   
?>
