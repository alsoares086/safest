<?php
session_start();
try{
  
    //recebendo os dados da seção
    /* 
    $nomeInve = $_SESSION['nomeInve'] ;
    $data =  $_SESSION['data'];
    $rua = $_SESSION['rua'];
    $bairro = $_SESSION['bairro'];
    $numero = $_SESSION['numero'];
    $cep = $_SESSION['cep'];
    $cidade = $_SESSION['cidade'];
    $estado = $_SESSION['estado'] ;
    $complemento = $_SESSION['complemento'];
             */                             
    $conn = new PDO("mysql:host=localhost;dbname=safest_v1","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /* linha de captura erro  */
    /*
    $sql = "INSERT INTO inventarios(nome,data) VALUES ('$nomeInve','$data')";
    $conn->exec($sql);
    $inventario_id = $conn->lastInsertId();
    $sql = "INSERT INTO enderecos(rua,bairro,numero,cep,cidade,estado,id_inventarios,complemento) VALUES ('$rua','$bairro','$numero','$cep','$cidade','$estado','$inventario_id','$complemento')";
    $conn->exec($sql);
    */

    //adicionar os outros dados da seção
    $identificacoes = $_SESSION['identificacoes']; //recebendo o vetor com os perigos
    $sql = "INSERT INTO identificacaorisco(id,funcao) VALUES ('$funcao)";
    foreach ($identificacoes as $identificacao) {
        $stmt->bindValue('funcao', $identificacao->getfuncao());  //exemplo-chat
        $conn->exec($sql);
    }

    

}catch(PDOException $erro){
    echo "Erro no cadastro do Inventário. Tente novamente!".$erro->getMessage();
}    
    echo "Inventário foi Cadastrado com sucesso!"; 
?>