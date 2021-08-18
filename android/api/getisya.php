<?php

header("Content-type:application/json");

include 'koneksi.php';


	$response = [];//data response

	//cek username didalam database
	$userQuery = $connection->prepare("SELECT * FROM  `tbl_sholatisya` ");
	$userQuery->execute();

		while($row = $userQuery->fetch(PDO::FETCH_ASSOC)){
			$response['status'] = true;
            $response['message'] = "data berhasil";
            $response['data'] = [
				'id_isya' => $row['id_isya'],
				'judul_isya' => $row['judul_isya'],
				'deskripsi_isya' => $row['deskripsi_isya']
				
			];
		}


	//data json
	$json = json_encode($response, JSON_PRETTY_PRINT);

	echo $json;	


?>