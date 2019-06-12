<?php

include ("../MODEL/PHP files/DAOProdutos.php");
include ("../MODEL/PHP files/DAOCadastroGeral.php");
include ("../MODEL/PHP files/DAOMovimento_Geral.php");


$produts = "15151515!x!152;556656652!x!102;36666525!x!98.65;889988987!x!98.6;55959887!x!109.6;";

if(isset($_POST['produtos_enviar']))
{
    $produts = $_POST['produtos_enviar'];
}


$data = date("d-m-Y");

$emailCliente = "";

if(isset($_POST['cliente_enviar']))
{
    $emailCliente = $_POST['cliente_enviar'];
}

$email_funcionario="";

if(isset($_SESSION['email']))
{
    $emailCliente=$_SESSION['email'];
}

$DOACadastro = new DAOCadastroGeral();
$DOACadastro->Email = $emailCliente;

function makeT($p)
{
    if ($p == "")
    {
        return "";
    }

    $p = explode(";",$p);
    $DOAprod = new DAOProdutos();

    for ($i=0;$i< count($p)-1;$i++)
    {
        $patual = explode("!x!",$p[$i]);

        $DOAprod->cod_prod = $patual[0];

        echo "<tr>";

            echo "<td>".$patual[0]."</td>";
            echo "<td>".$DOAprod->readnome()."</td>";
            echo "<td>1</td>";
            echo "<td>R$".number_format($patual[1],2,',','.')."</td>";

        echo "</tr>";
    }
}

function callSubtotal($p)
{
    if ($p == "")
    {
       return 00.00;}
    $p = explode(";",$p);
    $subtotal=0;
    for ($i=0;$i< count($p)-1 ;$i++)
    {
        $patual = explode("!x!",$p[$i]);

        $subtotal = $subtotal + $patual[1];
    }
    return $subtotal;
}


$subTotal= callSubtotal($produts);

$desconto=0;

$valorPago=0;

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1">

    <title>GameStore - Nota Fiscal</title>

    <link rel="icon" href="_img/65343.png" type="image/x-icon">
    <link rel="shortcut icon" href="_img/65343.png" type="image/x-icon">

    <link rel="stylesheet" href="_css/bootstrap.css">

    <link rel="stylesheet" href="_css/fiscal.css">


</head>

<body>
<div class="posi">
    <table class="printer-ticket" border="1">
        <thead style="text-align: center;">

        <tr>
            <th class="title" colspan="4">Game Store</th>
        </tr>
        <tr>
            <th colspan="4"><?php echo $data; ?></th>
        </tr>
        <tr>
            <th colspan="4"><?php if($emailCliente != ""){ echo $DOACadastro->readName();}else{echo "Sem Cliente";}  ?><br /><?php if($emailCliente != ""){ echo $DOACadastro->readCPF(); }?></th>
        </tr>
        <tr>
            <th class="ttu" colspan="4"> <b>Cupom não fiscal</b> </th>
        </tr>
        </thead>
        <tbody>
        <tr class="sup ttu p--0">
            <td colspan="4" align="center"> <b>Produtos</b> </td>
        </tr>
        <tr class="top">
            <th>Código do produto</th>
            <th>Descrição do produto</th>
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>

        <tr>
            <?php makeT($produts);?>
        </tr>

        </tbody>


        <tfoot>
        <tr class="sup ttu p--0">
            <td colspan="4" align="center"> <b>Totais</b> </td>
        </tr>
        <tr class="ttu">
            <td>Sub-total</td>
            <td>R$<?php echo  number_format($subTotal,2,',','.'); ?></td>
            <td>Desconto</td>
            <td>R$<?php echo number_format($desconto,2,',','.');?></td>
        </tr>
        <tr class="ttu">

        </tr>
        <tr class="ttu">
            <td colspan="3">Total</td>
            <td align="right">R$<?php echo number_format($subTotal - $desconto,2,',','.');?></td>
        </tr>
        <tr></tr>
        <tr class="sup ttu p--0">
            <td colspan="4" align="center"> <b>Pagamentos</b> </td>
        </tr>

        <tr class="ttu">
            <td>Total pago</td>
            <td>R$<?php echo number_format($valorPago,2,',','.');?></td>
            <td> Troco</td>
            <td>R$<?php echo number_format($valorPago - ($subTotal-$desconto),2,',','.');?></td>
        </tr>
        <tr class="ttu">
        <tr class="sup">
            <td colspan="4" align="center">GameStore</td>
        </tr>

        </tr>
        <tr class="sup">
            <td align="center"><a onclick="javascript:history.back()" class="btn btn-block btn-primary">Cancelar</a></td>
            <td align="center"><a onclick="print();" class="btn btn-block btn-warning">Imprimir</a></td>
            <td colspan="2" align="center"><a href="?m=f" class="btn btn-block btn-success">Finalizar</a></td>
        </tr>
        </tfoot>
    </table>
</div>
</body>
</html>
<?php //include ("../CONTROLLER/Outros/adc_estoque.php");

if(isset($_GET['m']) and $_GET['m']=="f")
{
    include_once ("..\CONTROLLER\Outros\adc_estoque.php");

    $xdaomovimento = new DAOMovimento_Geral();
//    $daomovimento_geral,$quantidade, $thiscod_prod, $thisfun_email, $thisdata, $preco, $desconto, $thiscli_email

    if ($produts == "")
    {
        return "";
    }

    $p = explode(";",$produts);

    for ($i=0;$i< count($p)-1;$i++)
    {
        $patual = explode("!x!",$p[$i]);
        RevEstoque($xdaomovimento,1,$patual[0],"cliente@email.com",date("Y-m-d"),$patual[1],00,$emailCliente);
    }

    header("Location: telaCaixa.php");
}
?>
