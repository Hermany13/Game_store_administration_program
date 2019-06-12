<?php
//include ("../Classes/Cliente.php");
//include ("../../MODEL/PHP files/DAOCadastroGeral.php");




function teste()
{
    $email="";

    $email = $_GET["email"];

    $cg = new DAOCadastroGeral();

    $cg->Email = $email;

    $cg->carregar();

    $cg->readUser();

    echo "FIM :/";
}

function impListCliente($caminho)
{

    include_once($caminho);

    $DAOclientes = new DAOCadastroGeral();

    $result = $DAOclientes->readClientes();

    while ($i = $result->fetch_assoc()) {
        echo "<tr>";

        echo "<td>".$i['cpf']."</td>";
        echo "<td>".$i['nome']."</td>";
        echo "<td>".$i['email']."</td>";
        echo "<td>".$i['telefone']."</td>";

        $dados='"'.$i['email'].'","'.$i['nome'].'"';

        echo "<td>
              <button class='btn btn-success' onclick='addCliente($dados);'>Selecionar</button>
              </td>";

        echo "</tr>";
    }
}

?>