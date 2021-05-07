<?php
    require_once 'header.php';
    require_once '../server/classes/fetchData.php';
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
    $id = $_GET['id'];
    $fetchData = new fetchData;
    $fetchResponse = $fetchData->fetchSingleCustomer($id);
    if(is_array($fetchResponse)){
        if(isset($fetchResponse['status'])){
            '<div class="alert alert-danger">'.print_r($fetchResponse['message']).'</div>';
        }else {
            foreach($fetchResponse as $row){

?>
<form action="editProcess.php" method="POST">
    <div class="form-group ">
            <label for="id">Invoice ID:</label>
            <input type="text"  class="form-control" name="id" value="<?php echo $row['id']; ?>">
          </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="firstName">Name:</label>
            <input type="text" class="form-control" name="name"  value="<?php echo $row['name']; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="product">Products Bought:</label>
            <input type="text" class="form-control" name="product" value="<?php echo $row['product']; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="price">Total Price:</label>
            <input type="number" class="form-control" name="price" value="<?php echo $row['price']; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="date">Date:</label>
            <input type="date" class="form-control" name="date" value="<?php echo $row['date']; ?>">
          </div>
          
        </div>
          
          <button type="submit" name="submit" class="btn btn-primary btn-block">Update Transaction Record</button>
        </form>

<?php }}}?>
  </div>

<?php
    require_once 'footer.php';
?>


 