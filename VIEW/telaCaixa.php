<?php
require_once("../CONTROLLER/Outros/cons_quant_prod.php");
require_once("../MODEL/PHP files/DAOCadastroGeral.php");
require_once("../CONTROLLER/Outros/CheckPagina.php"); session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>GameStore - Caixa</title>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
    <script src="https://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="_js/bootstrap.js"></script>
    <script src="_js/interativos.js"></script>
    <script src="_js/dados.js"></script>
    <link rel="stylesheet" href="_css/bootstrap.css">
    <link rel="stylesheet" href="_css/variations.css">
    <link rel="stylesheet" href="_css/forms.css">
    <link rel="icon" href="_img/65343.png" type="image/x-icon">
    <link rel="shortcut icon" href="_img/65343.png" type="image/x-icon">
</head>

<body>
    <div class="linha linhaUser2">
        <div class="contentLine"> <a style="text-align: Left"><strong>Voltar</strong></a> <a style="text-align: center"><strong>Caixa!</strong></a> <?php if(isset($_SESSION['email'])){ $nome = new DAOCadastroGeral(); $nome->Email = $_SESSION['email']; echo "Bem-Vindo ".$nome->readName(); } else { echo "Funcionario Atual"; } ?> <a class="logOutbtn" onclick="modalShowOut()">Log out</a> </div>
    </div>
    <section class="content-site3">
        <div class="blocoPainel">
            <div class="painel1">
                <div class="painelTotal">
                    <h2>R$ TOTAL A PAGAR</h2>
                    <div class="ValorTotal">
                        <h1>1.374,61</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabelinha">
            <div class="parteBaixa">
                <div id="list" class="row">
                    <div class="table-responsive col-md-12">
                        <table id="tabela" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome do Produto</th>
                                    <th>Preço</th>
                                    <th>Quantidade</th>
                                </tr>
                            </thead>
                            <tbody id="listProd">
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagar">
            <div class="blocosa">
                <div class="caixa">
                    <h4 class="tx1 tp">R$ TOTAL A PAGAR</h4>
                    <h1 class="tpp"><label id="totalaPagar">00,00</label></h1>
                </div>
                <div class="caixa">
                    <h4 class="tx1 vp">R$ VALOR PAGO</h4>
                    <h1 class="vpp"><label>00,00</label></h1>
                </div>
            </div>
            <div class="blocosb">
                <div class="caixa">
                    <h4 class="tx1 sp">R$ SALDO A PAGAR</h4>
                    <h1 class="spp"><label>00,00</label></h1>
                </div>
                <div class="caixa">
                    <h4 class="tx1 t">R$ TROCO</h4>
                    <h1 class="tr1"><label>00,00</label></h1>
                </div>
            </div>
        </div> <button type="button" class="btn btn-primary add" onclick="modalShowTabela()">Adicionar</button> <button type="button" class="btn btn-danger cancelaCompra" onclick="modalShowCancelar()">Cancelar Operação</button> <button type="button" class="btn btn-dark Comprador" onclick="modalShowTabelaCliente()">Selecionar Comprador</button> <button type="button" class="btn btn-success finaliza" onclick="modalShowFinalizar()">Finalizar</button>
    </section>
    <section class="footer-site10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="text-center">Copyright &copy; 2019 - by KatStorm</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('input#txt_consulta').quicksearch('table#tabela tbody tr');
    </script>
    <div class="bg-modal-logout">
        <div class="modal-content">
            <div id="close" class="close" onclick="modalCloseOut()">+</div>
            <form>
                <p class="text-center">Deseja Sair de Sua Seção?</p> <a href="../CONTROLLER/Outros/Logout.php" class="btn btn-danger">Sim</a> <a onclick="modalCloseOut()" class="btn btn-primary">Cancelar</a>
            </form>
        </div>
    </div>
    <div class="bg-modal-tabela">
        <div class="modal-content2">
            <h4>Estoque</h4>
            <div id="close" class="close1" onclick="modalCloseTabela()">+</div>
            <div class="form-group input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span> <input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control"> </div>
            <div class="tabelaModalLoka">
                <div id="list" class="row">
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
                            <tbody> <?php impListaProdutos("../MODEL/PHP Files/DAOProdutos.php","../MODEL/PHP Files/DAOMovimento_Geral.php"); ?> </tbody>
                        </table>
                        <script>
                            $('input#txt_consulta').quicksearch('table#tabela tbody tr');
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-modal-tabela-cliente">
        <div class="modal-contentCliente">
            <h4>Clientes</h4>
            <div id="close" class="close1" onclick="modalCloseTabelaCliente()">+</div>
            <div class="form-group input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span> <input name="consulta" id="txt_consulta_cliente" placeholder="Consultar" type="text" class="form-control"> </div>
            <div class="tabelaModalLokaCliente">
                <div id="list" class="row">
                    <div class="table-responsive col-md-12">
                        <table id="tabelaCliente" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>CPF</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th class="actions">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>798.898.669-43</td>
                                    <td>Emanuel Lucca da Paz</td>
                                    <td>emanuelluccadapaz_@vcp.com.br</td>
                                    <td>(82) 2558-3867</td>
                                    <td class="actions"> <a class="btn btn-success btn-xs">Adicionar</a> </td>
                                </tr>
                                <tr>
                                    <td>686.963.233-27</td>
                                    <td>Igor Ruan Cavalcanti</td>
                                    <td>iigorruancavalcanti@sociedadeweb.com.br</td>
                                    <td>(82) 2558-3867</td>
                                    <td class="actions"> <a class="btn btn-success btn-xs">Adicionar</a> </td>
                                </tr>
                                <tr>
                                    <td>686.963.233-27</td>
                                    <td>Luiz Kaique Almada</td>
                                    <td>lluizkaiquealmada@tecvap.com.br</td>
                                    <td>(61) 2539-3838</td>
                                    <td class="actions"> <a class="btn btn-success btn-xs">Adicionar</a> </td>
                                </tr>
                                <tr>
                                    <td>953.602.297-48</td>
                                    <td>Nathan Victor Yuri Barbosa</td>
                                    <td>nnathanvictoryuribarbosa@embraer.com</td>
                                    <td>(53) 3543-3412</td>
                                    <td class="actions"> <a class="btn btn-success btn-xs">Adicionar</a> </td>
                                </tr>
                                <tr>
                                    <td>287.272.888-03</td>
                                    <td>Enzo Edson Rezende</td>
                                    <td>enzoedsonrezende..enzoedsonrezende@carubelli.com.b</td>
                                    <td>(98) 3974-9463</td>
                                    <td class="actions"> <a class="btn btn-success btn-xs">Adicionar</a> </td>
                                </tr>
                            </tbody>
                        </table>
                        <script>
                            $('input#txt_consulta_cliente').quicksearch('table#tabelaCliente tbody tr');
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>