<?php
   
   $drid= $_GET['dr_id'];

   $conn=mysqli_connect('localhost','root','','collegeinventory');
   $sql="DELETE FROM inventory WHERE dr_id='$drid'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: inventorylist.php");
   }else{
         echo "Not deleted";
   }
   
?>
