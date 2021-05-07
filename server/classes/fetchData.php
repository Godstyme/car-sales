<?php


require_once('dbconnection.php');


class fetchData extends DbConnection {
	public function fetchAllCustomers() {
		$sql = "SELECT * FROM customers ORDER BY id ";
        $query = $this->connection->prepare($sql);
        $exec = $query->execute();
        
        if($query->errorCode() == 0){
            if ($query->rowCount() > 0) {
                return $query->fetchAll(PDO::FETCH_ASSOC);    
            }else{
                return 0;
            } 
        }else{
            return array('status'=>0, 'message'=>$query->errorInfo()); 
        }
		
	}

    public function enquiry($pin) {
        $sql = "SELECT balance FROM customers WHERE password = $pin";
        $query = $this->connection->prepare($sql);
        $exec = $query->execute(array(':password'=>$pin));
        
        if($query->errorCode() == 0){
            if ($query->rowCount() > 0) {
                $data=$query->fetchAll(PDO::FETCH_ASSOC);
                foreach($data as $row){
                    $balance= $row['balance'];
                    return array('status'=>1,'data'=>$balance);
                }
            }else{
                return array('status'=>0);
            } 
        }else{
            return array('status'=>0, 'message'=>$query->errorInfo()); 
        }
        
    }


    

    public function adminLogin($username, $password) {
        $sql = "SELECT username, password FROM admin WHERE username = :username and password =:password";
        $query = $this->connection->prepare($sql);
        $exec = $query->execute(array(':username'=>$username, ':password'=>$password));
        
        if($query->errorCode() == 0){
            if ($query->rowCount() > 0) {
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
                return array('status'=>1,'data'=>$data);
            }else{
                return array('status'=>0);
            } 
        }else{
            return array('status'=>0, 'message'=>$query->errorInfo()); 
        }
        
    }

    public function checkPin($password) {
        $sql = "SELECT password FROM customers WHERE password = :password";
        $query = $this->connection->prepare($sql);
        $exec = $query->execute(array(':password'=>$password));
        
        if($query->errorCode() == 0){
            if ($query->rowCount() > 0) {
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
                return array('status'=>1,'data'=>$data);
            }else{
                return array('status'=>0);
            } 
        }else{
            return array('status'=>0, 'message'=>$query->errorInfo()); 
        }
        
    }

    public function fetchSingleCustomer($id) {
        $sql = "SELECT * FROM customers WHERE id ='$id' ";
        $query = $this->connection->prepare($sql);
        $exec = $query->execute();
        
        if($query->errorCode() == 0){
            if ($query->rowCount() > 0) {
                return $query->fetchAll(PDO::FETCH_ASSOC);    
            }else{
                return 0;
            } 
        }else{
            return array('status'=>0, 'message'=>$query->errorInfo()); 
        }
        
    }

}
?>