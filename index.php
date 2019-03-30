<?php
//checar quantos usuario tem no sistema:

require ("/MODEL/PHP Files/DAOLogin.php");

$daoLogin = new DAOLogin();

//existe usuario cadastrados?
$BoolUser = $daoLogin->checkNBD();
if($BoolUser == false)
{
    header("Location: VIEW/cadastroGerente.html");
}

//importa a classe gerente
require ("/CONTROLLER/Classes/Gerente.php");

//instancia ela;



?>
<html>
    <head>
        <title>Tela do gerente top</title>
    </head>
    <body>

        <ol>
            <li><a href="VIEW/cadastroCliente.html">Cadastrar Cliente</a></li>
            <li><a href="VIEW/cadastroFuncionario.html">Cadastrar Funcionario</a></li>
            <li><a href="VIEW/cadastroGerente.html">Cadastrar Gerente</a></li>
            <li><a href="VIEW/cadastroLoja.html">Cadastrar Loja</a></li>
            <li><a href="VIEW/cadastroProduto.html">Cadastrar Produto</a></li>
            <li><a href="VIEW/esqueciMinhaSenha.html">Esqueci minha senha</a>
            <li><a href="VIEW/login.html">tela de login</a></li>
        </ol>


        <a href="CONTROLLER/Outros/Logout.php">SAIR</a>


    </body>

</html>