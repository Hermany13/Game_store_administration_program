<?php

function impListaProdutos($caminho,$caminho2){

    require_once($caminho);
    $prod = new DAOProdutos();
    $result = $prod->readsProdutos();

    require_once($caminho2);
    $moviG= new DAOMovimento_Geral();

    while ($i = $result->fetch_assoc()) {

        echo "<tr>";

        echo "<td>" .$i["cod_prod"]. "</td>";
        echo "<td>" .$i["nome"]. "</td>";
        echo "<td>" .$i["valor_venda"]. "</td>";

        echo "<td>".$moviG->countItems($i['cod_prod'])."</td>";

        $dados='"listProd",'.'"'.$i["cod_prod"].'","'.$i["nome"].'","'.$i["valor_venda"].'"';

        echo "<td class='actions'>
             <button class='btn btn-success btn-xs' onclick='addList($dados);'>Adicionar</button>
             </td>";

        echo "</tr>";
    }
}
?>