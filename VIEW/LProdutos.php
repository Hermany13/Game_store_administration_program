<?php

require_once("../CONTROLLER/Outros/cons_quant_prod.php");
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1">

        <title>GameStore - *Não utilizado*</title>

        <link href="_css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="_css/bootstrap.css">
        <link rel="stylesheet" href="_css/variations.css">
        <link rel="stylesheet" href="_css/forms.css">
        <script src="_js/interativos.js"></script>  
    </head>
    <body>
    <script src="https://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="_js/bootstrap.js"></script>
    
        <section class="header-site">
            
    
        <div class="linha linhaUser"><div class="contentLine">

                imprmir nome do nego aqui

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
            <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens no Estoque">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </div>
 
    <div class="col-md-3">
        <a class="btn btn-primary pull-right h2" <?php if($_SESSION['ni_user'] != 2 ){ echo " style=\"color:black; cursor: not-allowed;
  opacity: 0.5; ";} else {echo "href=\"cadastroProduto.html\"";}?>">Novo Item</a>
    </div>
</div> 
  <div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
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

            <?php
            impListaProdutos("../MODEL/PHP Files/DAOProdutos.php","../MODEL/PHP Files/DAOMovimento_Geral.php");
            ?>
                
            </tbody>
         </table>
 
     </div>
 </div> 
    <div id="bottom" class="row">
    <div class="col-md-12">
         
        <ul class="pagination">
            <li class="disabled"><a>&lt; Anterior</a></li>
            <li class="disabled"><a>1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
        </ul>
 
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