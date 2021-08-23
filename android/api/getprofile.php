<?php
include 'connection.php';

header("Content-type:application/json");

if ($_POST) {
	
	//data
	$id = $_POST['id'] ?? '';
	$name = $_POST['name'] ?? '';
	$username = $_POST['username'] ?? '';
	

	$response = [];//data response

	$userQuery = $connection->prepare("UPDATE `user` SET `name`=:name,`username`=:username WHERE `id`=:id");
	if ($userQuery->execute(array(":id" => $id,":name" => $name,":username" => $username))) {

		$response['status'] = true;
		$response['message'] = "Berhasil Memperbaharui";
	} else {
		$response['status'] = false;
		$response['message'] = "Gagal Memperbaharui";
	}

	//data json
	$json = json_encode($response, JSON_PRETTY_PRINT);

	echo $json;
	
}

?>