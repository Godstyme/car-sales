<?php
    require_once 'header.php';
?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Add Record</a>
        </li>
        <li class="breadcrumb-item active">Transaction Record</li>
      </ol>
      <!-- Icon Cards-->
      <form action="processRegister.php" method="POST">
        <div class="row">
          <div class="form-group col-md-6">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group col-md-6">
            <label for="product">All Products (seperated by comma):</label>
            <input type="text" class="form-control" name="product">
          </div>
          <div class="form-group col-md-6">
            <label for="price">Total Price:</label>
            <input type="number" class="form-control" name="price">
          </div>
          <div class="form-group col-md-6">
            <label for="date">Date:</label>
            <input type="date" class="form-control" name="date">
          </div>
        </div>
		  
		  <button type="submit" name="submit" class="btn btn-primary btn-block">Add Transaction</button>
		</form>
       
     
        
       
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php
        require_once 'footer.php';
    ?>