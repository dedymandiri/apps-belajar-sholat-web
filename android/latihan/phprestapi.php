<?php
require_once "koneksi.php";

	if(function_exists($_GET['function'])) {
			$_GET['function']();
		}	

	// function get_karyawan()
	// {
	// 	global $connect;		
	// 	$query = $connect->query("SELECT * FROM tbl_soal");				
	// 	while($row=mysqli_fetch_object($query))
	// 	{
	// 		$data[] =$row;
	// 	}
	// 	$response=array(
	// 						'status' => 1,
	// 						'message' =>'Success',
	// 						'data' => $data
	// 					);
	// 	header('Content-Type: application/json');
	// 	echo json_encode($response);
	// }	
	
	function get_karyawan_id()
	{
		global $connect;
		if (!empty($_GET["id"])) {
			$id = $_GET["id"];		
		}				
		$query ="SELECT * FROM tbl_soal WHERE id= $id";		
		$result = $connect->query($query);
		while($row = mysqli_fetch_object($result))
		{
			$data[] = $row;
		}				
		if($data)
		{
		$response = array(
							'status' => 1,
							'message' =>'Success',
							'data' => $data
						);					
		}else {
			$response=array(
							'status' => 0,
							'message' =>'No Data Found'
						);
		}

		
		header('Content-Type: application/json');
		echo json_encode($response);
		 
	}

	// function insert_karyawan()
	// 	{
	// 		global $connect;	
	// 		$check = array('id' => '', 'materi' => '', 'soal' => '', 'a', 'b', 'c', 'gambar' => '');
	// 		$check_match = count(array_intersect_key($_POST, $check));
	// 		if($check_match == count($check)){
			
	// 				$result = mysqli_query($connect, "INSERT INTO tbl_soal SET
	// 				id = '$_POST[id]',
	// 				materi = '$_POST[materi]',
	// 				soal = '$_POST[soal]',
	// 				a = '$_POST[a]',
    //                 b = '$_POST[b]',
    //                 c = '$_POST[c]',
    //                 gambar = '$_POST[gambar]'
                    
    //                 ");
					
	// 				if($result)
	// 				{
	// 					$response=array(
	// 						'status' => 1,
	// 						'message' =>'Insert Success'
	// 					);
	// 				}
	// 				else
	// 				{
	// 					$response=array(
	// 						'status' => 0,
	// 						'message' =>'Insert Failed.'
	// 					);
	// 				}
	// 		}else{
	// 			$response=array(
	// 						'status' => 0,
	// 						'message' =>'Wrong Parameter'
	// 					);
	// 		}
	// 		header('Content-Type: application/json');
	// 		echo json_encode($response);
	// 	}

	// function update_karyawan()
	// 	{
	// 		global $connect;
	// 		if (!empty($_GET["id"])) {
	// 		$id = $_GET["id"];		
	// 	}	
	// 		$check = array('id' => '', 'materi' => '', 'soal' => '', 'a', 'b', 'c', 'gambar' => '');
	// 		$check_match = count(array_intersect_key($_POST, $check));			
	// 		if($check_match == count($check)){
			
	// 	        $result = mysqli_query($connect, "UPDATE tbl_soal SET	
    //                 materi = '$_POST[materi]',
	// 				soal = '$_POST[soal]',
	// 				a = '$_POST[a]',
    //                 b = '$_POST[b]',
    //                 c = '$_POST[c]',
	// 				gambar = '$_POST[gambar]' WHERE id = $id");
		   
	// 			if($result)
	// 			{
	// 				$response=array(
	// 					'status' => 1,
	// 					'message' =>'Update Success'						
	// 				);
	// 			}
	// 			else
	// 			{
	// 				$response=array(
	// 					'status' => 0,
	// 					'message' =>'Update Failed'						
	// 				);
	// 			}
	// 		}else{
	// 			$response=array(
	// 						'status' => 0,
	// 						'message' =>'Wrong Parameter',
	// 						'data'=> $id
	// 					);
	// 		}
	// 		header('Content-Type: application/json');
	// 		echo json_encode($response);
	// 	}

	// function delete_karyawan()
	// {
	// 	global $connect;
	// 	$id = $_GET['id'];
	// 	$query = "DELETE FROM tbl_soal WHERE id=".$id;
	// 	if(mysqli_query($connect, $query))
	// 	{
	// 		$response=array(
	// 			'status' => 1,
	// 			'message' =>'Delete Success'
	// 		);
	// 	}
	// 	else
	// 	{
	// 		$response=array(
	// 			'status' => 0,
	// 			'message' =>'Delete Fail.'
	// 		);
	// 	}
	// 	header('Content-Type: application/json');
	// 	echo json_encode($response);
	// }
 ?>