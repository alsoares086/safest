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

}catch(PDOException $erro){
    echo "Erro no cadastro do Inventário. Tente novamente!".$erro->getMessage();
}    
    header("location: ../formCadastrarRelatorio.php"); 

    

?>