<?php
  class Fotos{
    private $id;
    private $nome;
    private $tipo;
    private $conteudo;
    private $idInventario;
    private Imagem $imagem;

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }

    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome = $nome;
    }
    function getTipo(){
        return $this->tipo;
    }
    function setTipo($tipo){
        $this->tipo = $tipo;
    }
    function getConteudo(){
        return $this->conteudo;
    }
    function setConteudo($conteudo){
        $this->conteudo = $conteudo;
    }

    function getIdInventario(){
        return $this->idInventario;
    }
    function setIdInventario($idInventario){
        $this->idInventario = $idInventario;
    }

    function Imagem(){
        return $this->imagem;
    }
    function setImagem($imagem){
        $this->imagem = $imagem;
    }

}
?>