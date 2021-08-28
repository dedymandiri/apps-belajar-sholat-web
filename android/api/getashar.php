<?php

header("Content-type:application/json");

include 'koneksi.php';


	$response = [];//data response

	//cek username didalam database
	$userQuery = $connection->prepare("SELECT * FROM  `tbl_sholatashar` ");
	$userQuery->execute();

		while($row = $userQuery->fetch(PDO::FETCH_ASSOC)){
			$response['status'] = true;
            $response['message'] = "data berhasil";
            $response['data'] = [
				'id' => $row['id'],
				'judul_ashar' => $row['judul_ashar'],
				'deskripsi_ashar' => $row['deskripsi_ashar']
				
			];
		}


	//data json
	$json = json_encode($response, JSON_PRETTY_PRINT);

	echo $json;	


?>