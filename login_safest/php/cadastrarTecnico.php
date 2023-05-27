<?php
    session_start();//iniciando a sessão

    $nome = $_POST['usuario'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try{
        $conn = new PDO("mysql:host=localhost;dbname=safest_v1", "root", "");
        // Armazenando os dados na sessão
    $_SESSION['nome'] = $nome;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha; 
    
    /*   
        $sql = "INSERT INTO Tecnicos(nome,cpf,email,senha) VALUES 
            ('$nome','$cpf','$email','$senha')";
    
        $conn->exec($sql);
    */
    }catch(PDOException $erro){
        echo "Erro. Tente novamente." . $erro->getMessage();
    }
    echo "Usuário cadastrado com sucesso!";

?>