<?php

header("Content-type:application/json");

include 'koneksi.php';


	$response = [];//data response

	//cek username didalam database
	$userQuery = $connection->prepare("SELECT * FROM  `tbl_soal` ");
	$userQuery->execute();

		while($row = $userQuery->fetch(PDO::FETCH_ASSOC)){
			$response[] = [
				'id' => $row['id'],
				'soal' => $row['soal'],
				'a' => $row['a'],
				'b' => $row['b'],
				'c' => $row['c'],
				'jwaban' => $row['jwaban']
				
			];
		}


	//data json
	$json = json_encode($response, JSON_PRETTY_PRINT);

	echo $json;	


?>