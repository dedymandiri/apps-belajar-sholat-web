<?php

header("Content-type:application/json");

include 'koneksi.php';


	$response = [];//data response

	//cek username didalam database
	$userQuery = $connection->prepare("SELECT * FROM  `tbl_tentangkami` ");
	$userQuery->execute();

		while($row = $userQuery->fetch(PDO::FETCH_ASSOC)){
			$response['status'] = true;
            $response['message'] = "data berhasil";
            $response['data'] = [
				'id_tentang' => $row['id_tentang'],
				'judul_tentang' => $row['judul_tentang'],
				'deskripsi_tentang' => $row['deskripsi_tentang']
				
			];
		}


	//data json
	$json = json_encode($response, JSON_PRETTY_PRINT);

	echo $json;	


?>