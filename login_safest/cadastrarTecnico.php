<?php

    $nome = $_POST['usuario'];
    $cpf = $_POST['cpf'];


    try{
        $conn = new PDO("mysql:host=localhost;dbname=safest_v1", "root", "");    
        $sql = "INSERT INTO Tecnicos(nome,cpf,email,senha) VALUES 
            ('$nome','$cpf','$email','$senha')";
    
        $conn->exec($sql);
    }catch(PDOException $erro){
        echo "Erro. Tente novamente." . $erro->getMessage();
    }
    echo "Usuário cadastrado com sucesso!";

?>