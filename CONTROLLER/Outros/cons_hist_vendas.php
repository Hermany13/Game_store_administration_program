<?php


function IMPlistaVendas($codigoFun,$camimho, $caminho2)
{
   require_once($camimho);

   $daocG = new DAOMovimento_Geral();

   $result = $daocG->readsFuncionario($codigoFun);

   require_once($caminho2);
   $prod = new DAOProdutos();

   //Imprimir em formato de tabela!

   while ($i = $result->fetch_assoc()) {
      if($i['operacao'] != '2')
      {
          continue;
      }

      echo "Codigo do produto: ".$i["cod_prod"]."<br>";

      $prod->cod_prod = $i["cod_prod"];
      $result2 = $prod->read();

      while ($g = $result2->fetch_assoc()){
          echo "Nomde do produto: ".$g['nome']. "<br>";
      }

      echo "Data de Venda: ".$i["data"]."<br>";
      echo "Valor de Venda: R$".$i["valorP"]."<br>";
      echo "<br>";

  }



}

?>