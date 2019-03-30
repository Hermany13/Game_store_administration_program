<?php

require("Caixa.php");

class Movimentacao{
    private $dataMovimentacao;
    private $tipo;
    private $descricao;
    private $cod_caixa;
    private $valor;

    function Movimentacao(){
        $this->dataMovimentacao = "";
        $this->tipo = "";
        //observação.
        $this->descricao = "";
        $this->cod_caixa = "";
        $this->valor = "";
    }
//tipo seruia: sangria, valor adicional;
    function AdicionarMovimento($data,$tipo,$descricao,$cod_caixa,$valor){
        
    }

}


?>