<?php

include_once("../../MODEL/PHP Files/DAOMovimento_Geral.php");

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


AdcEstoque(3,"956995956","emanuelluccadapaz_@vcp.com.br","2019-05-31");

echo "EXIT 12121";

?>