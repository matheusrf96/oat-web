<?php

class Item{
    private $codigo;
    private $nome;
    private $descricao;
    private $foto;
    private $valor;

    public function __construct($codigo, $nome, $descricao, $foto, $valor){
        $this->codigo = $codigo;

        if(strlen($nome) > 50){
            $this->nome = substr($nome, 0, 46)."...";
        }
        else{
            $this->nome = $nome;
        }

        if($descricao > 2000){
            $this->descricao = substr($descricao, 0, 1996)."...";
        }
        else{
            $this->descricao = $descricao;
        }

        $this->foto = $foto;
        
        if($valor < 0){
            $this->valor = 0.0;
        }
        else{
            $this->valor = $valor;
        }
    }    


    //Código
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    //Nome
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        if(strlen($nome) > 50){
            $this->nome = substr($nome, 0, 46)."...";
        }
        else{
            $this->nome = $nome;
        }
    }

    //Descricao
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        if($descricao > 2000){
            $this->descricao = substr($descricao, 0, 1996);
        }
        else{
            $this->descricao = $descricao;
        }
    }

    //Foto
    public function getFoto()
    {
        return $this->foto;
    }
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    //Valor
    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        if($valor < 0){
            $this->valor = 0.0;
        }
        else{
            $this->valor = $valor;
        }
    }

    public function toString(){
        return "
            Código: ".$this->codigo."<br />
            Nome: ".$this->nome."<br />
            Descrição: ".$this->nome."<br />
            Caminho Foto: ".$this->foto."<br />
            Valor: R$".$this->valor."<br /><br />
        ";
    }
}

?>