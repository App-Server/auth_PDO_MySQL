<?php

    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

        require 'conexao.php';
        require 'Usuario.class.php';

        $u = new Usuario();

        $login = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

    }else{
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Olá</p>
</body>
</html>