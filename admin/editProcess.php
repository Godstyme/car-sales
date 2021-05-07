<?php
    require_once 'header.php';
?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Update</a>
        </li>
        <li class="breadcrumb-item active">Update Record</li>
      </ol>
      <div>
<?php

    require_once '../server/classes/updateData.php';

    if (isset($_POST['submit'])) {
        $id= $_POST['id'];
    	$name = $_POST['name'];
        $product = $_POST['product'];
        $price = $_POST['price'];
        $date = $_POST['date'];
       

        $updateResponse = $update->updateCustomer($id,$name,$product,$price,$date);
        echo '<h1 style="color:green;margin-top:150px;margin-bottom:150px;text-align:center"> Update Successfull <br> Thank You !!.</h1>';
        //header("location:".SITEURL."adminDashboard/successful.php");
    } else {
        echo '<h1 style="color:red;margin-top:150px;margin-bottom:150px;text-align:center">  There was an error Updating the Transaction Data  <br> Please go back and try again.</h1>';;
    }
?>

<?php 
    require_once 'footer.php';
?>
