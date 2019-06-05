<?php
require_once("../CONTROLLER/Outros/cons_quant_prod.php");
require_once("../MODEL/PHP files/DAOCadastroGeral.php");
require_once("../CONTROLLER/Outros/CheckPagina.php");

session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
         <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1">

    <title>GameStore - Estoque</title>

    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
    <script src="https://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="_js/bootstrap.js"></script>
    <script src="_js/interativos.js"></script>
    <link rel="stylesheet" href="_css/bootstrap.css">
    <link rel="stylesheet" href="_css/variations.css">
    <link rel="stylesheet" href="_css/forms.css">
    </head>
    <body>
    <script src="https://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="_js/bootstrap.js"></script>
    
        <section class="header-site">

        <div class="linha linhaUser"><div class="contentLine">
                <a style="text-align: Left"><strong>Voltar</strong></a>
                <a style="text-align: center"><strong>Estoque!</strong></a>
                <?php
                if(isset($_SESSION['email'])){
                    $nome = new DAOCadastroGeral();
                    $nome->Email = $_SESSION['email'];
                    echo "Bem-Vindo ".$nome->readName();
                }
                else
                {
                    echo "Funcionario Atual";
                }
                ?>
            <a class="logOutbtn" onclick="modalShowOut()">Log out</a></div>
        </div>

        </section>
        <section class="content-site2">
            <div class="linha linhaPosition"></div>
     
        <div class="teste">
        <script src="js/_jquery.min.js"></script>
        <script src="js/_bootstrap.min.js"></script>
    
 
    <div id="main" class="container-fluid">
     <div id="top" class="row">
 
     </div> 
 
     <hr />
     <div id="list" class="row">
     
     </div> 
 
     <div id="bottom" class="row">
     
     </div> 
 </div>     
    <div id="top" class="row">
    <div class="col-md-3">
        <h2>Estoque</h2>
    </div>
 
    <div class="col-md-6">
        <div class="input-group h2">
            <input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
        </div>
    </div>
 
    <div class="col-md-3">
        <a <?php if($_SESSION['ni_user'] != 2 ){ echo " style=\"color:black; cursor: not-allowed;
  opacity: 0.5; ";} else {echo "href=\"cadastroProduto.html\"";}?> class="btn btn-primary pull-right h2">Novo Item</a>
    </div>
</div> 
  <div id="list" class="row">
  <div class="tabelaToque">
    <div class="table-responsive col-md-12">
        <table id="tabela" class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
            <?php impListaProdutos("../MODEL/PHP Files/DAOProdutos.php","../MODEL/PHP Files/DAOMovimento_Geral.php"); ?>
            </tbody>
        </table>
        <script>
            $('input#txt_consulta').quicksearch('table#tabela tbody tr');
        </script>
     </div>
      </div>
 </div> 
   
    <div class="bg-modal-logout">
        <div class="modal-content">
            <div id="close" class="close" onclick="modalCloseOut()">+</div>
            <form>
                <p>Deseja Sair de Sua Seção?</p>
                <a href="../CONTROLLER/Outros/Logout.php" class="btn btn-danger">Sim</a>
                <a href="" class="btn btn-danger" onclick="modalCloseOut()">Não</a>
            </form>
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
    </body>
</html>