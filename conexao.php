<?php

    $localhost = "localhost";
    $user = "root";
    $passw = "1234";
    $banco = "auth";

    try{
        $pdo = new PDO("mysql:ql:dbname=".$banco."; host=".$localhost, $user, $passw, );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo "ERRO: ".$e->getMessage();
        exit;
    }

    

    // $sql = $pdo->query("SELECT * FROM usuarios");
    // $sql->execute();

    // echo $sql->rowCount();

?>