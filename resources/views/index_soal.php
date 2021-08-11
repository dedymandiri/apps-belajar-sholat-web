<?php 
	
	require_once '../include/getsoal.php';
	$response = array();  
	
	// $target_dir = "uploads/";

	if(isset($_GET['apicall'])){
		
		switch($_GET['apicall']){	



			case 'getpanggilan':
				$db = new getsoal();
				$getNomor = $db->getNomor();
				if(count($getNomor)<=0){
					$response['code'] = 302;
					$response['message'] = 'Nothing found in the database';
				}else{
					$response['code'] = 200;
					$response['message'] = 'Sukses';
					$response['response'] = $getNomor;
				}
			break;

			default:
				$response['error'] = true;
				$response['message'] = 'No operation to perform';
			
		}
		
	}else{
		$response['error'] = false; 
		$response['message'] = 'Invalid Request';
	}
	
	//displaying the data in json 
	echo json_encode($response);
	function isTheseParametersAvailable($params){
		foreach ($params as $param) {
			if (!isset($_POST[$param])) {
				return false;
			}
		}
	
		return true;
	}

	function getBaseURL(){
        $url  = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
        $url .= $_SERVER['SERVER_NAME'];
        $url .= $_SERVER['REQUEST_URI'];
        return dirname($url) . '/';
	}
?>