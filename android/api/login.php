
<?php

include 'connection.php';

if($_POST){
    
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $response = [];

    $userQuery = $connection->prepare("SELECT * FROM user where username = ?");
    $userQuery->Execute(array($username));
    $query = $userQuery->fetch();
    
    if($userQuery->rowCount() == 0){
        $response['status'] = false;
        $response['message'] = "username tidak terdaftar";
    } else {

        $passwordDatabase = $query['password'];

        if(strcmp(($password), $passwordDatabase) === 0){
            $response['status'] = true;
            $response['message'] = "login berhasil";
            $response['data'] = [
                'user_id' => $query['id'],
                'username' => $query['username'],
                'name' => $query['name']
            ];
        } else {
            $response['status'] = false;
            $response['message'] = "password anda salah";
        }
    }

    $json = json_encode($response, JSON_PRETTY_PRINT);

    echo $json;
}

