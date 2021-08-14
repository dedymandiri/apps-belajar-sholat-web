<?php
include("koneksi.php");
$arr = array();
$q = mysqli_query($conn, "select * from tbl_soal order by rand() limit 10");
 while ($row = mysqli_fetch_assoc($q)) {
 $temp = array(
 "soal_id" => $row['id'],
 "soal"=>$row['soal'],
 "a"=>$row['a'],
 "b"=>$row['b'],
 "c" => $row['c'],
 "jawaban" => $row['jwaban'],
 
 );
 array_push($arr, $temp);
 }
 $data = json_encode($arr);
 $data = str_replace("\\", "", $data);
 echo "{\"daftar_soal\":" . $data . "}";
?>