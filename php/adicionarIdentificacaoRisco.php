<?php

require_once "IdentificacaoRisco.php"; //colocar o caminho correto.

session_start();
$funcao = $_POST['funcao']; 
$descricao = $_POST['descricao'];
$equipamento =  $_POST['epi'];
$tipoRisco = $_POST['tipoRisco'];
$agenteCondicao = $_POST['agente'];
$fonte = $_POST['fonte'];
$consequenciaExposicao = $_POST['exposicao'];
$probabilidade = $_POST['classificacao-probabilidade'];
$consequencia = $_POST['classificacao-cosequencia'];
$medidasAdministrativas = $_POST['medidasprevencao'];
$probabilidadeReferencia = $_POST['classificacao-probabilidade-referencia'];
$consequenciaReferencia = $_POST['classificacao-cosequencia-referencia'];
$matrizAvaliacao = $_POST['matrix'];

$identificao = new IdentificacaoRisco(); //objeto que guarda os dados no array 

$identificao -> setFuncao( $funcao); 
$identificao -> setDescricaoAtividade ($descricao); 
$identificao -> setEquipamento($equipamento);
$identificao -> setTipoRisco($tipoRisco);
$identificao ->setAgenteCondicao($agenteCondicao);
$identificao-> setConsequenciaExposicao($consequenciaExposicao);
$identificao-> setProbabilidade($probabilidade);
$identificao -> setConsequencia($consequencia);
$identificao -> setMedidasAdministrativas($medidasAdministrativas);
$identificao -> setProbabilidadeReferencia($probabilidadeReferencia);
$identificao ->setConsequenciaReferencia($consequenciaReferencia);
$identificao ->setMatrizAvaliacao($matrizAvaliacao);

$identificacoes = array();

array_push($identificacoes,$identificao);

$_SESSION['identificacoes'] = $identificacoes;
var_dump ($_SESSION['identificacoes']);

header('Location:gravarDados.php');
echo ("hello);

?>