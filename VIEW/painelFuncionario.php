<?php
require_once("../MODEL/PHP files/DAOCadastroGeral.php");
require_once("../CONTROLLER/Outros/cons_hist_vendas.php");
require_once("../CONTROLLER/Outros/CheckPagina.php"); session_start(); CheckPagina($_SESSION['ni_user'], 1);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>GameStore - Funcionario</title>
    <link rel="stylesheet" href="_css/bootstrap.css">
    <link rel="stylesheet" href="_css/forms.css">
    <link rel="stylesheet" href="_css/variations.css">
    <link rel="icon" href="_img/65343.png" type="image/x-icon">
    <link rel="shortcut icon" href="_img/65343.png" type="image/x-icon">
</head>

<body>
    <script src="https://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="_js/bootstrap.js"></script>
    <script src="_js/interativos.js"></script>
    <section class="header-site">
        <div class="linha linhaUser">
            <div class="contentLine"> <a style="text-align: left">Painel de <strong>Funcionario!</strong></a> <?php $nome = new DAOCadastroGeral(); $nome->Email = $_SESSION['email']; echo "Bem-Vindo ".$nome->readName(); ?> <a class="logOutbtn" onclick="modalShowOut()">Log out</a></div>
        </div>
    </section>
    <section class="content-site">
        <div class="linha linhaPosition">
            <nav class="menuNav">
                <ul>
                    <li><a>Caixa</a>
                        <ul>
                            <li onclick="modalShowAbrirC()"><a>Abrir Caixa</a></li>
                            <li onclick="modalShowFecharC()"><a>Fechar Caixa</a></li>
                        </ul>
                    </li>
                    <li><a>Buscar</a>
                        <ul>
                            <li><a href="#">Cliente</a></li>
                            <li><a href="Estoque.php">Produto</a></li>
                        </ul>
                    </li>
                    <li><a>Cadastro</a>
                        <ul>
                            <li><a href="cadastroCliente.html">Cliente</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Lista de Venda:</h3> <?php IMPlistaVendas($_SESSION['email'],"../MODEL/PHP files/DAOMovimento_Geral.php","../MODEL/PHP files/DAOProdutos.php"); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="thumbnail"> <img src="_img/img-04.jpg"> </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail"> <img src="_img/img-05.jpg"> </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail"> <img src="_img/img-06.jpg"> </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-site">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="text-center">Copyright &copy; 2019 - by KatStorm</p>
                </div>
            </div>
        </div>
    </section> <!-- Um Model para cada!-->
    <div class="bg-modal">
        <div class="modal-content">
            <div id="close" class="close" onclick="modalClose()">+</div>
            <form> <input class="inputModal" type="text" name="valor" placeholder="Entre um Valor" /> <a href="" class="btn btn-dark">Registrar</a> </form>
        </div>
    </div>
    <div class="bg-modal-abrirC">
        <div class="modal-content">
            <div id="close" class="close" onclick="modalCloseAbrirC()">+</div>
            <form> <input class="inputModal" type="text" name="valorAbrir" placeholder="Digite um Valor" /> <a href="telaCaixa.php" class="btn btn-dark">Continuar</a> </form>
        </div>
    </div>
    <div class="bg-modal-fecharC">
        <div class="modal-content">
            <div id="close" class="close" onclick="modalCloseFecharC()">+</div>
            <form> <input class="inputModal" type="text" name="valorFechar" placeholder="Digite um Valor" /> <a href="telaCaixa.php" class="btn btn-dark">Continuar</a> </form>
        </div>
    </div>
    <div class="bg-modal-logout">
        <div class="modal-content">
            <div id="close" class="close" onclick="modalCloseOut()">+</div>
            <form>
                <p class="text-center">Deseja Sair de Sua Seção?</p> <a href="../CONTROLLER/Outros/Logout.php" class="btn btn-danger">Sim</a> <a href="" class="btn btn-dark">Cancelar</a>
            </form>
        </div>
    </div>
</body>

</html>