<?php
   $conn=mysqli_connect('localhost','root','','collegeinventory');
   $sql="SELECT * FROM inventory ";
   $result=mysqli_query($conn,$sql);
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   
?>


<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>Welcome to College  Inventory Management</title>   
<meta name="description" content="Bootstrap.">  
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="sweetalert2/sweetalert2.css">
<script src="sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">



<body> 
 <?php include 'navbar_user.php';?> 
 <br><br>
<div class="container">

<div class="row">
    <div class="page header">
        <h3 style="text-align: center; background-color: black; color: white; opacity:0.75">Inventory List</h3>

    </div>
    
    <table id="myTable" class="table table-bordered" style="background-color: white" >  

        <thead>
              <th>Device ID</th>
              <th >Category</th>
              <th >Name</th>
              <th>Location</th>
              <th>Status</th>
              <th>Assistance</th>
              <th>Action</th>
        </thead>

        <tbody>
            <?php while($row=mysqli_fetch_assoc($result)){?>
              <tr>
                <td> <?php echo $row['dr_id']?> </td>
                <td> <?php echo $row['category']?> </td>
                <td><?php echo $row['d_name']?></td>
                <td><?php echo $row['location']?></td>
                <td><?php echo $row['status']?></td>
                <td><?php echo $row['assistance']?></td>

                <td>
                  <a class="btn btn-info" href="showinventory.php?dr_id=<?php echo $row['dr_id']; ?>">View</a>
				  <!--
                  <a class="btn btn-primary" href="editbill.php?id=<?php echo $row['id']; ?>">Edit</a>
				  -->
                  <a class="btn btn-danger" onclick="return confirm('Are u sure?')" href="deleteinventory.php?dr_id=<?php echo $row['dr_id']; ?>">Delete</a>
                </td>

              </tr>
              <?php }?>
            </tbody>

          </table>

</div>

</div>
</body>  
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>  
