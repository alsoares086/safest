<?php
  class Fotos{
    private $id;
    private $nome;
    private $tipo;
    private $arquivo;
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
    function getArquivo(){
        return $this->arquivo;
    }
    function setArquivo($arquivo){
        $this->arquivo = $arquivo;
    }
    function Imagem(){
        return $this->imagem;
    }
    function setImagem($imagem){
        $this->imagem = $imagem;
    }

}
?>