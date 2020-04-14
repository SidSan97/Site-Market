//Script para calculos da página do carrinho
function valorTotal()
{                   
    let valorSelect = document.getElementById("quantidade").value;            
    let total   = valorSelect * 999; 
    document.getElementById("total-Qtd").innerHTML = "R$ " + total + ",00";  
    document.getElementById("total-Compra").innerHTML = "R$ " + total + ",00";   
}

//Script que torna inputs de senha da página de cadastro avermelhados em caso de senha incompativeis
const fieldMessage = document.querySelector("#senha");
const fieldMessage2 = document.querySelector("#senha2");

if(fieldMessage !== fieldMessage2) 
{
    fieldMessage.classList.add("alert-input");
    fieldMessage2.classList.add("alert-input");
}  

