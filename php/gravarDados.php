<?php
session_start();
require_once "IdentificacaoRisco.php";
require_once "Fotos.php";

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
    $fotos = unserialize($_SESSION['fotos']);
    

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
    consequencia,medidasAdministrativas,probabilidadeReferencia,consequenciaReferencia,matrizAvaliacao,funcao,idInve)
    VALUES (:descricao,:equipamento,:tipoRisco,:agenteCondicao,:fonte,:consequenciaExposicao,:probabilidade,
    :consequencia,:medidasAdministrativas,:probabilidadeReferencia,:consequenciaReferencia,:matrizAvaliacao,:funcao,:idInve)";
    $stmt = $conn->prepare($sql);
    foreach ($identificacoes as $identificacao) {
        $stmt->bindValue(':descricao', $identificacao->getDescricaoAtividade());
        $stmt->bindValue(':equipamento', $identificacao->getEquipamento());
        $stmt->bindValue(':tipoRisco', $identificacao->getTipoRisco());
        $stmt->bindValue(':agenteCondicao', $identificacao->getAgenteCondicao());
        $stmt->bindValue(':fonte', $identificacao->getFonte());
        $stmt->bindValue(':consequenciaExposicao', $identificacao->getConsequenciaExposicao());
        $stmt->bindValue(':probabilidade', $identificacao->getProbabilidade());
        $stmt->bindValue(':consequencia', $identificacao->getConsequencia());
        $stmt->bindValue(':medidasAdministrativas', $identificacao->getMedidasAdministrativas());
        $stmt->bindValue(':probabilidadeReferencia', $identificacao->getProbabilidadeReferencia());
        $stmt->bindValue(':consequenciaReferencia', $identificacao->getConsequenciaReferencia());
        $stmt->bindValue(':matrizAvaliacao', $identificacao->getMatrizAvaliacao());
        $stmt->bindValue(':funcao', $identificacao->getFuncao());
        $stmt->bindValue(':idInve',$inventario_id);
        $stmt->execute(); // Executa a declaração preparada
    }
  
    
    $sql = "INSERT INTO fotos(nome,tipo,idInventario,conteudo) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    foreach ($fotos as $foto){
        $stmt->bindValue(1, $foto->getnome());
        $stmt->bindValue(2, $foto->getTipo());
        $stmt->bindValue(3, $inventario_id);
        $stmt->bindValue(4, $foto->getconteudo());
        $stmt->execute(); // Executa a declaração preparada
    }
    
}catch(PDOException $erro){
    echo "Erro no cadastro do Inventário. Tente novamente!".$erro->getMessage();
}    
    echo "Inventário foi Cadastrado com sucesso!"; 
    session_destroy();
?>