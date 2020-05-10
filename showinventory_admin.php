<?php
   
   $drid= $_GET['dr_id'];

   $conn=mysqli_connect('localhost','root','','collegeinventory');
   $sql="SELECT * FROM inventory WHERE dr_id='$drid'";
   $result=mysqli_query($conn,$sql);

   $bill=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="sweetalert2/sweetalert2.css">
<script src="sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">



  </head>
  <body>
    
    <br><br><br>
	 <?php include 'navbar_admin.php';?>
     
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <a class="btn btn-info" href="inventorylist_admin.php">Inventory List</a>
        </div> 
        <div class="col-md-6">
        <h2>Inventory Information</h2>
        <hr>
          
        <table class="table" style="background-color: white; opacity: 0.9" >
           
          <tr>
            <th >Device ID:</th>
            <td><?php echo $bill['dr_id']; ?></td>
          </tr>
          <tr>
            <th >Category:</th>
            <td><?php echo $bill['category']; ?></td>
          </tr>
          <tr>
            <th >Device Name:</th>
            <td><?php echo $bill['d_name']; ?></td>
          </tr>
          <tr>
            <th >Location:</th>
            <td><?php echo $bill['location']; ?></td>
          </tr>
          <tr>
            <th >Brand:</th>
            <td><?php echo $bill['brand']; ?></td>
          </tr>
          <tr>
            <th >Installation Date:</th>
            <td><?php echo $bill['inst_date']; ?></td>
          </tr>
          <tr>
            <th >Billing  Date:</th>
            <td><?php echo $bill['bill_date']; ?></td>
          </tr>
          <tr>
            <th >Store nunber:</th>
            <td><?php echo $bill['store_no']; ?></td>
          </tr>
          <tr>
            <th >Specifications:</th>
            <td><?php echo $bill['other']; ?></td>
          </tr>
          <tr>
            <th >Status:</th>
            <td><?php echo $bill['status']; ?></td>
          </tr>
          <tr>
            <th >Price:</th>
            <td><?php echo $bill['price']; ?></td>
          </tr>
          <tr>
            <th >Assistance:</th>
            <td><?php echo $bill['assistance']; ?></td>
          </tr>

        </table>  

        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 
