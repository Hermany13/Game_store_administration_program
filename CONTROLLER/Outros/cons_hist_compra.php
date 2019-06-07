<?php


function IMPlistaCompras($codigoCliente,$camimho, $caminho2)
{
   require_once($camimho);

   $daocG = new DAOMovimento_Geral();
   $result = $daocG->readsCliente($codigoCliente);

   require($caminho2);
   $prod = new DAOProdutos();


   //imprimir em formato tabela depois!

   while ($i = $result->fetch_assoc()) {
       if($i['operacao'] != '2')
       {
           continue;
       }


       echo "Código do produto: ".$i["cod_prod"]."<br>";

      $prod->cod_prod = $i["cod_prod"];
      $result2 = $prod->read();
      while ($g = $result2->fetch_assoc()){
           echo "Nome do produto: ".$g['nome']. "<br>";
      }

      echo "Data de compra: ".$i["data"]."<br>";
      echo "Valor do produto: ".$i["valorP"]."<br>";
      echo "<br>";
  }



}

?>