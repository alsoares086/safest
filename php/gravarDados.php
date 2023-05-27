<?php
session_start();
require_once "IdentificacaoRisco.php";

try{
  
    //recebendo os dados da seção
 
    $nomeInve = $_SESSION['nomeInve'] ;
    $data =  $_SESSION['data'];
    $rua = $_SESSION['rua'];
    $bairro = $_SESSION['bairro'];
    $numero = $_SESSION['numero'];
    $cep = $_SESSION['cep'];
    $cidade = $_SESSION['cidade'];
    $estado = $_SESSION['estado'] ;
    $complemento = $_SESSION['complemento'];
                          
    $conn = new PDO("mysql:host=localhost;dbname=safest_v1","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /* linha de captura erro  */
    
    $sql = "INSERT INTO inventarios(nome,data) VALUES ('$nomeInve','$data')";
    $conn->exec($sql);
    $inventario_id = $conn->lastInsertId();
    $sql = "INSERT INTO enderecos(rua,bairro,numero,cep,cidade,estado,
    id_inventarios,complemento) VALUES ('$rua','$bairro','$numero','$cep','$cidade','$estado','$inventario_id','$complemento')";
    $conn->exec($sql);

    //adicionar os outros dados da seção
    $identificacoes = unserialize($_SESSION['identificacoes']);

    $sql = "INSERT INTO identificacaorisco (descricao,equipamento,tipoRisco,AgenteCondicao,fonte,consequenciaExposicao,probabilidade,
    consequencia,medidasAdministrativas,probabilidadeReferencia,consequenciaReferencia,matrizAvaliacaofuncao,idInve)
    VALUES (:descricao,:equipamento,:tipoRisco,:AgenteCondicao,:fonte,:consequenciaExposicao,:probabilidade,
    :consequencia,:medidasAdministrativas,:probabilidadeReferencia,:consequenciaReferencia,:matrizAvaliacao,:funcao,:id)";
    $stmt = $conn->prepare($sql);
    foreach ($identificacoes as $identificacao) {
        $stmt->bindValue(':descricao', $identificacao->getDescricao());
        $stmt->bindValue(':equipamento', $identificacao->getEquipamento());
        $stmt->bindValue(':tipoRisco', $identificacao->getFuncaoTipoRisco());
        $stmt->bindValue(':AgenteCondicao', $identificacao->getAgenteCondicao());
        $stmt->bindValue(':consequenciaExposicao', $identificacao->getConsequenciaExposicao());
        $stmt->bindValue(':probabilidade', $identificacao->getProbabilidade());
        $stmt->bindValue(':consequencia', $identificacao->getConsequencia());
        $stmt->bindValue(':medidasAdministrativas', $identificacao->getMedidasAdministrativas());
        $stmt->bindValue(':probabilidadeReferencia', $identificacao->getProbabilidadeReferencia());
        $stmt->bindValue(':consequenciaReferencia', $identificacao->getConsequenciaReferencia());
        $stmt->bindValue(':matrizAvaliacao', $identificacao->getMatrizAvaliacao());
        $stmt->bindValue(':funcao', $identificacao->getFuncao());
        $stmt->bindValue(':id',$inventario_id);
        $stmt->execute(); // Executa a declaração preparada
    }

}catch(PDOException $erro){
    echo "Erro no cadastro do Inventário. Tente novamente!".$erro->getMessage();
}    
    echo "Inventário foi Cadastrado com sucesso!"; 
    session_destroy();
?>