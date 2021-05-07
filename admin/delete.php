<?php
	require_once 'header.php';
	require_once '../server/classes/fetchData.php';
?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Delete</a>
        </li>
        <li class="breadcrumb-item active">Delete Record</li>
      </ol>
      <div class="table-responsive">
      	<h3>Select Record To Delete</h3>
      	<table class="table hoverable ">
			

		    <!--Table head-->
		    <thead class="mdb-color darken-3">
		        <tr class="">
		            <th>s/n</th>
		            <th>Name</th>
		            <th>Products Bought</th>
		            <th>Total Price</th>
		            <th>Date Bought</th>
		            <th>Take Action</th>
		        </tr>
		    
		    </thead>
		    <!--Table head-->

		    <!--Table body-->
		    <tbody>
		    	<?php
		              $fetchData = new fetchData;
		              $fetchResponse = $fetchData->fetchAllCustomers();
		              if(is_array($fetchResponse)){
		                  if(isset($fetchResponse['status'])){
		                      '<div class="alert alert-danger">'.print_r($fetchResponse['message']).'</div>';
		                  }else {
		                      foreach($fetchResponse as $row){

		          ?>
		        <tr class="">
		            <td><?php echo $row['id']?></td>
		            <td><?php echo $row['name']?></td>
		            <td><?php echo $row['product']?></td>
		            <td><?php echo $row['price']?></td>
		            <td><?php echo $row['date']?></td>
		            <td><a href="processDelete.php?id=<?php echo $row['id']?>" class="btn btn-outline-danger">DELETE</a></td>
		        </tr>
		        <?php }}}?>
		        
		        
		    </tbody>
		    <!--Table body-->
		</table>
<!--Table-->
                                    
      </div>
