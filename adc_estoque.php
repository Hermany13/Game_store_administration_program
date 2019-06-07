<?php

include_once("../../MODEL/PHP Files/DAOMovimento_Geral.php");

// op 1
function AdcEstoque($quantidade, $thiscod_prod, $thisfun_email, $thisdata){

    $daomov = new DAOMovimento_Geral();

    for ($i=0; $i < $quantidade; $i++) { 
        
        $daomov->cod_prod = $thiscod_prod;
        $daomov->fun_email = $thisfun_email;
        $daomov->data = $thisdata;
        $daomov->operacao = 1;

        $daomov->create();  
    }
}

//op 2
function RevEstoque($quantidade, $thiscod_prod, $thisfun_email, $thisdata, $preco, $desconto, $thiscli_email)
{
    $daomov = new DAOMovimento_Geral();

    for ($i=0; $i < $quantidade; $i++) { 
        
        $daomov->cod_prod = $thiscod_prod;
        $daomov->fun_email = $thisfun_email;
        $daomov->cli_email = $thiscli_email;
        $daomov->data = $thisdata;
        $daomov->valorP = $preco;
        $daomov->valorM = $desconto;
        $daomov->operacao = 2;

        $daomov->create();  
    }
}

//op 3
function AbrirCaixa($thisvalorA, $thisfun_email,$thisdata)
{
    $daomov = new DAOMovimento_Geral();

    $daomov->valorP = $thisvalorA;
    $daomov->data = $thisdata;
    $daomov->fun_email = $thisfun_email;

    $daomov->operacao = 3;

    $daomov->create();
}

//op 4
function FecharCaixa($thisvalorR, $thisfun_email,$thisdata)
{
    $daomov = new DAOMovimento_Geral();

    $daomov->valorP = $thisvalorR;
    $daomov->data = $thisdata;
    $daomov->fun_email = $thisfun_email;

    $daomov->operacao = 4;

    $daomov->create();
}

//op 5
function EntradaFundos($thisvalorA, $thisfun_email,$thisdata)
{
    $daomov = new DAOMovimento_Geral();

    $daomov->valorP = $thisvalorA;
    $daomov->data = $thisdata;
    $daomov->fun_email = $thisfun_email;

    $daomov->operacao = 5;

    $daomov->create();
}

//op 6
function SaidaFundos($thisvalorR,$thisfun_email,$thisdata)
{
    $daomov = new DAOMovimento_Geral();

    $daomov->valorM = $thisvalorR;
    $daomov->data = $thisdata;
    $daomov->fun_email = $thisfun_email;

    $daomov->operacao = 6;

    $daomov->create();
}

//op 7
function AluItem()
{
    $daomov = new DAOMovimento_Geral();
}

//op 8
function DevolucaoItem()
{
    $daomov = new DAOMovimento_Geral();
}
?>