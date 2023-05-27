<?php
session_start(); //iniciando a sessão

//identificação e descrição dos perígos
$nomeInve = $_POST['nomeInve']; //Colocar somente 'nome' para o banco, o escopo já é definido pela tabela
$data = $_POST['data'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$complemento = $_POST['complemento'];

try{

    // Armazenando os dados na sessão
    $_SESSION['nomeInve'] = $nomeInve;
    $_SESSION['data'] = $data;
    $_SESSION['rua'] = $rua;
    $_SESSION['bairro'] = $bairro;
    $_SESSION['numero'] = $numero;
    $_SESSION['cep'] = $cep;
    $_SESSION['cidade'] = $cidade;
    $_SESSION['estado'] = $estado;
    $_SESSION['complemento'] = $complemento;

    $conn = new PDO("mysql:host=localhost;dbname=safest_v1","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /* linha de captura erro  */
    $sql = "INSERT INTO inventarios(nome,data) VALUES ('$nomeInve','$data')";
    $conn->exec($sql);
    $inventario_id = $conn->lastInsertId();
    $sql = "INSERT INTO enderecos(rua,bairro,numero,cep,cidade,estado,id_inventarios,complemento) VALUES ('$rua','$bairro','$numero','$cep','$cidade','$estado','$inventario_id','$complemento')";
    $conn->exec($sql);


    //adicionar os outros dados da seção
    

}catch(PDOException $erro){
    echo "Erro no cadastro do Inventário. Tente novamente!".$erro->getMessage();
}    
    echo "Inventário foi Cadastrado com sucesso!"; 

    

?>