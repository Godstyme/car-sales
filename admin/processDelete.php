<?php
	require_once 'header.php';
?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Delete</a>
        </li>
        <li class="breadcrumb-item active">Delete Record </li>
      </ol>
      <div>
<?php
    require_once '../server/classes/fetchData.php';
    require_once '../server/classes/deleteData.php';

     $id = $_GET['id'];
    $delete= new delete;
    $deleteResponse = $delete->deleteCustomer($id);

    echo '<h1 style="color:green; text-align:center;margin-top:100px; margin-bottom:100px;">The Record Was Deleted Successful</h1>';

    // header("location:".SITEURL."adminDashboard/successful.php");
?>
</div>
</div>
<?php
	require_once 'footer.php';
?>
