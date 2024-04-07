<?php

    $host = "localhost";
    $dbname = "tarefas";
    $user = "root";
    $pass = "";



    try{

        $conn = new PDO("mysql:host=$host;dbname = $dbname", $user , $pass);

        // ativar o modo de erro 

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    }catch(PDOException $e){
        // erro na coxexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }





?>