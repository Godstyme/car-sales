<?php
require_once('dbconnection.php');

class update extends DbConnection{
    
    public function adminUpdate($id,$newUsername,$newPassword){
        $sql = "UPDATE admin SET username = :newUsername, password = :newPassword WHERE id = '$id'";

        $query = $this->connection->prepare($sql);
        $exec = $query->execute(array(':newUsername'=>$newUsername,':newPassword'=>$newPassword));
        
        if ($query->errorCode() == 0) {
            return array('status'=>1);
            
        } else {
            return array('status'=>0, 'message'=>$query->errorInfo());
        }
    }

    public function updatePin($newpin2, $pin){
        $sql = "UPDATE customers SET password = :newpin2 WHERE password = '$pin'";

        $query = $this->connection->prepare($sql);
         $exec = $query->execute(array(':newpin2'=>$newpin2));
        
        if ($query->errorCode() == 0) {
            return array('status'=>1);
            
        } else {
            return array('status'=>0, 'message'=>$query->errorInfo());
        }
    }
    public function updateBalance($newBalance, $pin){
        $sql = "UPDATE customers SET balance = :newBalance WHERE password = '$pin'";

        $query = $this->connection->prepare($sql);
         $exec = $query->execute(array(':newBalance'=>$newBalance));
        
        if ($query->errorCode() == 0) {
            return array('status'=>1);
            
        } else {
            return array('status'=>0, 'message'=>$query->errorInfo());
        }
    }
    public function updateCustomer($id,$name,$product,$price,$date){
        $sql = "UPDATE customers SET name = :name,  product = :product, price = :price, date = :date WHERE id = '$id'";

        $query = $this->connection->prepare($sql);
         $exec = $query->execute(array(':name'=>$name,':product'=>$product,':price'=>$price,':date'=>$date));
        
        if ($query->errorCode() == 0) {
            return array('status'=>1);
            
        } else {
            return array('status'=>0, 'message'=>$query->errorInfo());
        }
    }
    public function updateAccount($id,$newBalance){
        $sql = "UPDATE customers SET balance = :newBalance WHERE id = '$id'";

        $query = $this->connection->prepare($sql);
         $exec = $query->execute(array(':newBalance'=>$newBalance));
        
        if ($query->errorCode() == 0) {
            return array('status'=>1);
            
        } else {
            return array('status'=>0, 'message'=>$query->errorInfo());
        }
    }
}
$update = new update;
?>