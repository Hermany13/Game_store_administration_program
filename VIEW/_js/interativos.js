function modalShow()
        {
           document.querySelector(".bg-modal").style.display = "flex";             
        }

function modalClose()
        {
            document.querySelector(".bg-modal").style.display = "none";
        }


function modalShowAbrirC()
        {
           document.querySelector(".bg-modal-abrirC").style.display = "flex";             
        }

function modalCloseAbrirC()
        {
            document.querySelector(".bg-modal-abrirC").style.display = "none";
        }


function modalShowFecharC()
        {
           document.querySelector(".bg-modal-fecharC").style.display = "flex";             
        }

function modalCloseFecharC()
        {
            document.querySelector(".bg-modal-fecharC").style.display = "none";
        }

function modalShowOut()
        {
           document.querySelector(".bg-modal-logout").style.display = "flex";             
        }

function modalCloseOut()
        {
            document.querySelector(".bg-modal-logout").style.display = "none";
        }


function modalShowTabela()
        {
           document.querySelector(".bg-modal-tabela").style.display = "flex";             
        }

function modalCloseTabela()
        {
            document.querySelector(".bg-modal-tabela").style.display = "none";
        }

function modalShowTabelaCliente()
        {
           document.querySelector(".bg-modal-tabela-cliente").style.display = "flex";             
        }

function modalCloseTabelaCliente()
        {
            document.querySelector(".bg-modal-tabela-cliente").style.display = "none";
        }

function modalShowCancelar()
        {
           document.querySelector(".bg-modal-cancelar").style.display = "flex";             
        }

function modalCloseCancelar()
        {
            document.querySelector(".bg-modal-cancelar").style.display = "none";
        }

function modalShowConfirmar()
        {
           document.querySelector(".bg-modal-confirmar").style.display = "flex";             
        }

function modalCloseConfirmar()
        {
            document.querySelector(".bg-modal-confirmar").style.display = "none";
        }


function mascara(i, t){
    var v = i.value;
    
    if(isNaN(v[v.length-1])){
        i.value = v.substring(0, v.length-1);
        return;
    }
    
    if(t == "cpf"){
        i.setAttribute("maxlength", "14");
        if(v.length == 3 || v.length == 7) i.value += ".";
        if(v.length == 11) i.value += "-";
    }
    
}
