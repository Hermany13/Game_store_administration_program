<?php

require("Funcionario.php");
require("Gerente.php");
require("Movimentacao");

class Caixa{
    private $dataAbertura;
    private $dataFechamento;
    private $cod_caixa;
    private $cod_user;
    private $total;
    private $totalRecolhido;

    function Caixa($cod_user){
        $this->dataAbertura = "";
        $this->dataFechamento = "";
        $this->cod_caixa = "";
        $this->cod_user = "";
        $this->total = "";
        $this->totalRecolhido = "";

        function  getDataAbertura(){
            return $this->dataAbertura;
        }

        function getDataFechamento(){
            return $this->dataFechamento;
        }

        function getCod_caixa(){
            return $this->cod_caixa;
        }

        function getCod_user(){
            return $this->cod_user;
        }

        function getTotal(){
            return $this->total;
        }
        
        function getTotalRecolhido(){
            return $this->totalRecolhido;
        }

    }

}
?>