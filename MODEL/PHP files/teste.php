<?php
include_once ("DAOMovimento_Geral.php");

$dao = new DAOMovimento_Geral();
$dao->getTodoCaixa("0");
?>