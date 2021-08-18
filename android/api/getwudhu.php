<?php

header("Content-type:application/json");

include 'koneksi.php';


	$response = [];//data response

	//cek username didalam database
	$userQuery = $connection->prepare("SELECT * FROM  `tbl_wudhu` ");
	$userQuery->execute();

		while($row = $userQuery->fetch(PDO::FETCH_ASSOC)){
			$response['status'] = true;
            $response['message'] = "data berhasil";
            $response['data'] = [
				'id_wudhu' => $row['id_wudhu'],
				'judul_wudhu' => $row['judul_wudhu'],
				'deskripsi_wudhu' => $row['deskripsi_wudhu']
				
			];
		}


	//data json
	$json = json_encode($response, JSON_PRETTY_PRINT);

	echo $json;	


?>