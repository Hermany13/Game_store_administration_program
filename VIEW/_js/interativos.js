function modalShow()
        {
           document.querySelector(".bg-modal").style.display = "flex";             
        }

function modalClose()
        {
            document.querySelector(".bg-modal").style.display = "none";
        }

function modalShowOut()
        {
           document.querySelector(".bg-modal-logout").style.display = "flex";             
        }

function modalCloseOut()
        {
            document.querySelector(".bg-modal-logout").style.display = "none";
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
