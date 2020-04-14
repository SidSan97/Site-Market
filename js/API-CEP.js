$("#cep").focusout(function(){
    //Início do Comando AJAX
    $.ajax({
    
        url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
    
        dataType: 'json',
        
        success: function(resposta){
            
            $("#ender").val(resposta.logradouro);
            $("#comp").val(resposta.complemento);
            $("#bairro").val(resposta.bairro);
            $("#cid").val(resposta.localidade);
            $("#estado").val(resposta.uf);
            
            $("#numero").focus();
        }
    });
});
