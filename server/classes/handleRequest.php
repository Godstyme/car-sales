<?php
session_start();
require_once("processrequest.php");
require_once 'fetchData.php';

$requestingPage = stripslashes($_REQUEST['_mode']);
$processRequest = new processRequest;
$header = "From: hello@mps.org.ng";
$date =  date("Y/m/d");
$response = null;
switch ($requestingPage) {

	case "adminLogin":
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$password = $_POST['password'];
			$username = $_POST['username'];
			$fetchData = new fetchData;
			$fetchResponse = $fetchData->adminLogin($username,$password);
			if(is_array($fetchResponse)){
				if(isset($fetchResponse['status'])){
					if ($fetchResponse['status']=="0") {
						$response =array('status'=>0, 'input'=>"details",'message'=>"incorrect Username Or Password");
					}
					else {
						$_SESSION["pin"] = $password;
						$response =array('status'=>1, 'input'=>"details",'message'=>"successful");
					}
				}
		    }else {
		    	$response = array('details'=>$password);
		    }		
		}
		
	break;

	default:
		$response = array("status"=>0,"message"=>"Invalid Request, please check what you're doing");
	break;
}
 
echo json_encode($response);
?>



