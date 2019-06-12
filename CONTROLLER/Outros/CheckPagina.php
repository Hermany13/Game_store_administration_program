<?php

function CheckPagina($a, $b)
{
    if(!isset($_SESSION['ni_user']))
    {
        header("Location: ../VIEW/inicio.html");
    }

    if ($a>=$b){
    return;    
    }
    
    else if ($a<$b){
        if ($a==0){
            header("Location: ../VIEW/painelCliente.php");
        }
        else if ($a==1){
            header("Location: ../VIEW/painelFuncionario.php");
        }
        else {
            header("Location: ../VIEW/inicio.html");
        }
    }
}
 

?>