<?php

include 'connection.php';

if($_POST){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

    $response = [];

    $userQuery = $connection->prepare("SELECT * FROM user where username = ?");
    $userQuery->Execute(array($username));

    if($userQuery->rowCount() != 0){

        $response['status'] =  false;
        $response['message'] = 'akun sudah digunakan';
    } else {
        $insertAccount = 'INSERT INTO user (username, password, name) values (:username, :password, :name)';
        $statemen = $connection->prepare($insertAccount);

        try{

            $statemen->execute([
                ':username' => $username,
                ':password' =>($password),
                ':name' => $name
            ]);

            $response['status'] = true;
            $response['message'] = "akun berhasil terdaftar";
            $response['data'] =[
                'username' => $username,
                'name' => $name
            ];

        } catch (Exception $e){
            die($e->getMessage());
        }

    }

    $json = json_encode($response, JSON_PRETTY_PRINT);

    echo $json;
}

