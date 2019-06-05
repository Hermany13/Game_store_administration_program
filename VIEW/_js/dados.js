lista = "\n";


Total = 0;

function addList(idtbody,cod,nome,valor) {
    entrada = "codigo: " + cod + " Nome: " + nome + " Valor: " + valor + "\n";

    Total = Number(Total) + Number(valor);
    lista = lista+entrada;

    //alert(lista);
    modalCloseTabela();

    document.getElementById('totalaPagar').innerHTML = ""+Total;

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