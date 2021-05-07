<?php
require_once('dbconnection.php');
class insertData extends DbConnection {
	
    public function registerCustomer($name,$product,$price,$date) {
        $sql = "INSERT INTO customers(name, product, price, date) VALUES(:name, :product, :price, :date)";

        $query = $this->connection->prepare($sql);
        $exec = $query->execute(array(':name'=>$name, ':product'=>$product, ':price'=>$price, ':date'=>$date));
        
        if ($query->errorCode() == 0) {
            return array('status'=>1);
        } else {
            return array('status'=>0, 'message'=>$query->errorInfo());
        }
        
    }
    
}
?>