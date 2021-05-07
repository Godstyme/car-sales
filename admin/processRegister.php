<?php
	require_once 'header.php';
?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Transaction</a>
        </li>
        <li class="breadcrumb-item active">Add Transaction</li>
      </ol>
      <div>
      	<?php

	require_once '../server/classes/insertData.php';
	if (isset($_POST['submit'])){
		$name = $_POST['name'];
		$product = $_POST['product'];
		$price = $_POST['price'];
		$date = $_POST['date'];
		

		$insertData = new insertData;
		$insertResponse =  $insertData->registerCustomer($name,$product,$price,$date);
		echo '<h1 style="color:green;text-align:center;"> Inventory Adding Successful	</h1>';
			
	

}
	else {
		echo '<h1 style="color:red;text-align:center;"> Sorry The Operation Was Not Successful Please Try Again	</h1>';
	}
?>
      </div>
