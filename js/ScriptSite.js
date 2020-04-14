//Script para calculos da página do carrinho
function valorTotal()
{                   
    let valorSelect = document.getElementById("quantidade").value;            
    let total   = valorSelect * 999; 
    document.getElementById("total-Qtd").innerHTML = "R$ " + total + ",00";  
    document.getElementById("total-Compra").innerHTML = "R$ " + total + ",00";   
}