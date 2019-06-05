<?php
require_once("../MODEL/PHP files/DAOCadastroGeral.php");
require_once("../CONTROLLER/Outros/cons_hist_compra.php");
require_once("../CONTROLLER/Outros/CheckPagina.php");
session_start();
CheckPagina($_SESSION['ni_user'], 0);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1">

        <title>GameStore - Cliente</title>
        
        <link rel="stylesheet" href="_css/bootstrap.css">
        <link rel="stylesheet" href="_css/forms.css">
        <link rel="stylesheet" href="_css/variations.css">
    </head>
    <body>
    <script src="https://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="_js/bootstrap.js"></script>
    <script src="_js/interativos.js"></script>
        
        
    
        <section class="header-site">
            
        
        <div class="linha linhaUser"><div class="contentLine">        
            
        <?php

        $nome = new DAOCadastroGeral();
        $nome->Email = $_SESSION['email'];
        echo "Bem-Vindo ".$nome->readName();    
        
        ?>
        
        <a class="logOutbtn" onclick="modalShowOut()">Log out</a></div>
        </div>
        
        </section>
        
        <section class="content-site">
            <div class="linha linhaPosition">
            <nav class="menuNav">
                <ul>              
                    <li><a>Buscar</a>
                        <ul>
                            <li><a>Produtos</a></li>
                        </ul>
                    </li>
                    <li><a>Encomendar</a></li>
                </ul>
            </nav>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <?php
                        IMPlistaCompras($_SESSION['email'],"../MODEL/PHP files/DAOMovimento_Geral.php","../MODEL/PHP files/DAOProdutos.php");
                        ?>

                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        
                        <div class="thumbnail">
                            
                            <img src="_img/img-04.jpg">
                            <div class="caption text-center">
                                
                            </div>
                        
                        </div>
                        
                    </div>
                    
                     <div class="col-sm-4">
                        
                        <div class="thumbnail">
                            
                            <img src="_img/img-05.jpg">
                            <div class="caption text-center">
                                
                            </div>
                        
                        </div>
                        
                    </div>
                    
                    <div class="col-sm-4">
                        
                        <div class="thumbnail">
                            
                            <img src="_img/img-06.jpg">
                            <div class="caption text-center">
                                
                            </div>
                        
                        </div>
                        
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
        
        </section>
    
        <div class="bg-modal-logout">
        <div class="modal-content">
            <div id="close" class="close" onclick="modalCloseOut()">+</div>
            <form>
                <p class="text-center">Deseja Sair de Sua Seção?</p>
                <a href="../CONTROLLER/Outros/Logout.php" class="btn btn-danger">Sim</a>
                <a href="" class="btn btn-dark" onclick="modalCloseOut()">Cancelar</a>
            </form>
        </div> 
    </div>
    
    
    </body>
</html>