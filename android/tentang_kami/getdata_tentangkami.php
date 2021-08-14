<?php

header("Content-type:application/json");

$servername = "localhost";
$username = "root";
$password = "";

try {
  $connection = new PDO("mysql:host=$servername;dbname=belajar_sholat", $username, $password);
  // set the PDO error mode to exception
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
}catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


	//data

	$response = [];//data response
  $id = "1";
	//cek username didalam database
	$userQuery = $connection->prepare("SELECT * FROM  `tbl_tentangkami` where `id` = :deskripsi ");
	$userQuery->execute(array(":deskripsi" => $id ));

		while($row = $userQuery->fetch(PDO::FETCH_ASSOC)){
			$response['data'] = [
				'judul' => $row['judul'],
				'deskripsi' => $row['deskripsi'],
				'gambar' => $row['gambar']
			];
		}


	//data json
	$json = json_encode($response, JSON_PRETTY_PRINT);

	echo $json;	


?>