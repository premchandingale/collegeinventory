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
    <title>college inventory management system</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">


	<style type="text/css">
		
		body{
			background-image:url(inventorynew.jpeg);
			background-size: cover;
			background-attachment: fixed;
		}

		.content{
			background: white;
			width: 50%;
			padding: 30px;
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
 <body  > 

<div>
<?php include 'navbar.php';?>
</div>

 
<div class="content">
   



  
 <section class="vc_section top-banner new-header vc_custom_1576620503669 vc_section-has-fill">
<div class="vc_row wpb_row vc_row-fluid container">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner">
<div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element  header-text-block">
			
</div>
</div></div></div></div>
</section> 
<p>
<p ><h3>Inventory System<h3></p>
<p>Discover Our top-rated
Inventory System and its
benefits.</p>

<h2style="text-align: center"> Inventory Management</h2>
The features of Academics – Our Inventory Stock & Store Management System software module for College and Schools covers indenting of items, Quotation, Purchase Order Generation, Material Receipt and Purchase of materials, Issue of Items to sub stores, kitchen, electrical, furniture, education materials on internal requisition.

<h2><i>Inventory Management Software</i></h2>
It generates certain reports like requisition report, Indent register, Material Receipt report, Purchase register, Department wise issue report, Stock Ledgers etc.

The modular Academics-ERP Software Solution introduces the Inventory/ Store Management Module to keep you on top of all aspects of material management by ensuring that there is round the clock availability of sufficient stock.

<p><h1>Key Features:</h1></p>
<p>* Inventory Stock & Store Management SystemTransactions Related to etc. Purchase and Transfer.</p>
<p>* Inventory Stock & Store Management SystemStock Register , Current Stock Position, and Consumption Details.</p>
<p>* Inventory Stock & Store Management SystemDaily Goods Receipt/ Issue Register.</p>
<p>* Inventory Stock & Store Management SystemPurchase Order.</p>
<p>* Inventory Stock & Store Management SystemPurchase Order Status.</p>
<p>* Inventory Stock & Store Management SystemItem-wise Supplier Details.</p>
<p>* Inventory Stock & Store Management SystemShort Item Details.</p>
<p>* Inventory Stock & Store Management SystemPurchase Status, Item Issue, and Stock Ledge Details.</p>

</p>
  </section>

  </div>
  
</body>
</html>

 
