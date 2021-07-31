<?php

$connection = null;

try{
    $host = "localhost";
    $username = "root";
    $password ="";
    $dbname = "belajar_sholat";
    $dbms = "mysql";

    $database = "mysql:dbname=$dbname;host=$host";
    $connection = new PDO($database, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// if($connection){
//     echo "koneksi berhasil";
// } else {
//     echo "koneksi gagal";
// }

} catch (PDOException $e){
    echo "error !" . $e->getMessage();
    die;
}

?>