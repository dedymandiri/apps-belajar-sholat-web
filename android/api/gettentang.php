<?php

header("Content-type:application/json");

include 'koneksi.php';


	$response = [];//data response

	//cek username didalam database
	$userQuery = $connection->prepare("SELECT * FROM  `tbl_tentangkami` ");
	$userQuery->execute();

		while($row = $userQuery->fetch(PDO::FETCH_ASSOC)){
			$response[] = [
				'id' => $row['id'],
				'judul' => $row['judul'],
				'deskripsi' => $row['deskripsi']
				
			];
		}


	//data json
	$json = json_encode($response, JSON_PRETTY_PRINT);

	echo $json;	


?>