

<?php
require_once('dbconnection.php');

class delete extends DbConnection{ 
   public function deleteCustomer($id){
        $sql = "DELETE FROM  customers  WHERE id = '$id'";

        $query = $this->connection->prepare($sql);
        $exec = $query->execute();
        
        if ($query->errorCode() == 0) {
            return array('status'=>1);
            
        } else {
            return array('status'=>0, 'message'=>$query->errorInfo());
        }
    }
}
$delete = new delete;
?>