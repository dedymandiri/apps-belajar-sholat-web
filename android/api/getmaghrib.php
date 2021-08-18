<?php

header("Content-type:application/json");

include 'koneksi.php';


	$response = [];//data response

	//cek username didalam database
	$userQuery = $connection->prepare("SELECT * FROM  `tbl_sholatmaghrib` ");
	$userQuery->execute();

		while($row = $userQuery->fetch(PDO::FETCH_ASSOC)){
			$response['status'] = true;
            $response['message'] = "data berhasil";
            $response['data'] = [
				'id_maghrib' => $row['id_maghrib'],
				'judul_maghrib' => $row['judul_maghrib'],
				'deskripsi_maghrib' => $row['deskripsi_maghrib']
				
			];
		}


	//data json
	$json = json_encode($response, JSON_PRETTY_PRINT);

	echo $json;	


?>