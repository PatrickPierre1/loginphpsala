<?php 
    $servidor = "localhost";
    $user = "root";
    $password = "";
    $banco = "login";

    try {
        $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=3306;charset-utf8",$user, $password);
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>