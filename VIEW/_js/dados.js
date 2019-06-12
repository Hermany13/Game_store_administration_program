var VARS_AMBIENTE = new Array();

VARS_AMBIENTE['lista'] = "";

VARS_AMBIENTE['Total'] = 0;

VARS_AMBIENTE['Nprodutos'] = 0;
VARS_AMBIENTE['Cli_email'] = "";

function addList(idtbody,cod,nome,valor) {
    entrada = cod + "!x!" + valor + ";";

    VARS_AMBIENTE['Total'] = Number(VARS_AMBIENTE['Total']) + Number(valor);
    VARS_AMBIENTE['Nprodutos'] = VARS_AMBIENTE['Nprodutos'] + 1;

    VARS_AMBIENTE['lista'] = VARS_AMBIENTE['lista']+entrada;

    modalCloseTabela();

    document.getElementById('totalaPagar').innerHTML = ""+VARS_AMBIENTE['Total'];
   
    addTable(idtbody,cod,nome,valor);
}

var d = document;

function addTable(idtbody,cod,nome,valor) {

    var newRow = d.createElement('tr');
    newRow.insertCell(0).innerHTML = cod;
    newRow.insertCell(1).innerHTML = nome;
    newRow.insertCell(2).innerHTML = valor;
    newRow.insertCell(3).innerHTML = '1';

    d.getElementById(idtbody).appendChild(newRow);

    return false;
}

function addCliente(email,nome) {
    VARS_AMBIENTE['Cli_email'] = email;
    VARS_AMBIENTE['Cli_nome'] = nome;

    document.getElementById('cli_nome').innerHTML = ""+VARS_AMBIENTE['Cli_nome'];


    modalCloseTabelaCliente();
}

function closeVenda() {
    if(VARS_AMBIENTE['lista'] == "")
    {
        alert("Nem um produto Disponivel!")
        return 0;
    }
    modalShowConfirmar();
    var objetoDados = document.getElementById('pdados');
    objetoDados.value = VARS_AMBIENTE['lista'];

    var emailCliet = document.getElementById('cdados');
    emailCliet.value = VARS_AMBIENTE['Cli_email'];
}