<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">
  <link rel="stylesheet" type="text/css" href="css/tema.css">
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="css/xiaomi.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <title>Cadastre-se</title>
</head>
 <body>
  <!--Script Jquery para API do CEP-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <section style="background-color: #ffc107;">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php"><img src="assets/logomercado.png" height="80px" width="80px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado3" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
               <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado3">
              <form id="form" class="form-inline my-2 my-lg-0">
                <div id="search">
                  <input type="search" placeholder="O que você procura?" id="input">
                    <button  type="submit" id="button"> <i class="fas fa-search"></i> </button>
                </div>      

                    <!--div id="label">
                        Login/Cadastro <button id="btn-user"><a href="login.php"> <i class="fas fa-user"></i> Entrar </a></button>
                    </div-->
              </form>
           </div>
        </nav>
     </div>
  </section>

  <section class="div-navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light text-light">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
             <span class="navbar-toggler-icon"></span>
           </button>

          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
             <ul class="navbar-nav mr-auto">
                 <li class="col-md-2">
                   <a><i class="fas fa-utensils"></i>  <i class="fas fa-wine-bottle"></i><br> Alimentos/Bebidas </a>
                 </li>

                 <li class="col-md-2">
                    <a><i class="fas fa-paw"></i><br> Pets </a>
                 </li>

                 <li class="col-md-2">
                   <a><i class="fas fa-tv"></i><br> Eletrodomésticos </a>               
                 </li>

                 <li class="col-md-2">
                   <a><i class="fas fa-tshirt"></i><br> Vestimentas </a>
                 </li>

                 <li class="col-md-2">
                   <a><i class="fas fa-dice"></i><br> Brinquedos </a>
                 </li>

                 <li class="col-md-2">
                   <a href="carrinho.php"><i class="fas fa-cart-plus"></i><br> Carrinho </a>
                 </li>
                 <!769 - 992> <!992 - 1226>
            </ul>
          </div>

        </nav>
    </div>
  </section>
    
  <section class="sec-cadastro">
      <div class="container">
        <h2 class="tit-cadastro">Cadastre-se já!</h2>

        <?php
              if(isset($_SESSION['status_cadastro'])):
             ?>
             <div class="notification2" style="background-color: green;">
                 <span>Cadastro efetuado!</span><br>
                 <span>Faça o login clicando <a href="login.php">aqui</a></span> 
             </div>

             <?php
              endif;
              unset($_SESSION['status_cadastro']);        
             ?>

             <?php 
              if(isset($_SESSION['usuario_existe'])):
             ?>                     
             <div class="notification2" style="background-color: red">
               <p>Usuário já existe. Cheque novamente os dados!</p>
             </div>

             <?php
              endif;           
              unset($_SESSION['usuario_existe']);
             ?>

        <div class="interface-cad">          
          <form method="POST" action="cadastrar.php">
            <div class="row">
              <div class="col-lg-5 mb-4">
                <label for="user">*Informe seu nome</label>
                <input type="text" name="usuario" id="user" autofocus required>
              </div>

              <div class="col-lg-5 mb-4">
                <label for="sb">*Informe sobrenome</label>
                <input type="text" name="sobrenome" id="sb" autofocus required>
              </div>
            </div>

            <div class="row" style="margin-bottom: 5%">
              <div class="col-lg-5 mb-4">
                <label for="senha">*Crie uma senha para o cadastro</label>
                <input type="password" name="senha" id="senha" autofocus required>
              </div>

              <div class="col-lg-5 mb-4">
                <label for="senha">*Repita a senha</label>
                <input type="password" name="senha2" id="senha2" required>
              </div>           
            </div>

             <?php 
              if(isset($_SESSION['senhas_diferentes'])):
             ?>                     
             <div class="notification2" style="background-color: red">
               <p> As senhas inseridas são diferentes </p>
             </div>

             <script src="js/ScriptSite.js"></script>          

             <?php
              endif;           
              unset($_SESSION['senhas_diferentes']);
             ?>
         
            <h3 class="info">Informações Adicionais</h3>

            <div class="row">
              <div class="col-lg-5 mb-4">
                <label for="tel">*Telefone para contato</label>
                <input type="tel" name="telefone" id="tel" onkeypress="$(this).mask('(00) 00000-00000')" maxlength="15" required>
              </div>

              <div class="col-lg-5 mb-4">
                <label for="email">*Informe seu E-mail</label>
                <input type="email" name="email" id="email" required>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-5 mb-4">
                <label for="cpf">*Digite seu CPF</label>
                <input type="text" name="cpf" id="cpf" onkeypress="$(this).mask('000.000.000-00');" maxlength="14" required>
              </div>

              <div class="col-lg-5 mb-4">                
                <label for="nasc">*Ano de nascimento</label>
                <input id="nasc" type="date" name="nasc" required>
              </div>
            </div>

            <div class="row" style="margin-bottom: 5%">
              <div class="col-lg-5 mb-4">                             
                <label for="genero">*Genêro</label>
                <select id="genero" name="genero" required>
                  <option value="H">Homem</option>
                  <option value="M">Mulher</option>
                </select>              
              </div>

              <div class="col-lg-5 mb-4">                
                <label for="nasc">*Informe seu CEP</label>
                <input id="cep" type="text" name="cep" onkeypress="$(this).mask('00.000-000')" maxlength="10" required>
                <a target="_blank" href="http://www.buscacep.correios.com.br/sistemas/buscacep/resultadoBuscaCepEndereco.cfm">Não sei meu CEP</a>
              </div>
            </div>

              <h3 class="info">Informações de Endereço</h3>

            <div class="row">  
              <div class="col-lg-5 mb-4">                
                <label for="ender">*Informe seu endereço</label>
                <input id="ender" type="text" name="ender" required>
              </div> 
              
              <div class="col-lg-5 mb-4">                
                <label for="num">*Informe o numero</label>
                <input id="num" type="text" name="num" required>
              </div>     
            </div>

            <div class="row">  
              <div class="col-lg-5 mb-4">                
                <label for="bairro">*Informe o Bairro</label>
                <input id="bairro" type="text" name="bairro" required>
              </div> 
              
              <div class="col-lg-5 mb-4">                
                <label for="cid">*Informe a cidade</label>
                <input id="cid" type="text" name="cid" required>
              </div>     
            </div>

            <div class="row">  
              <div class="col-lg-5 mb-4">                
                <label for="estado">*Estado</label>
                <input id="estado" type="text" name="estado" maxlength="2" readonly="readonly" required>
              </div> 
              
              <div class="col-lg-5 mb-4">                
                <label for="comp">*Complemento</label>
                <input id="comp" type="text" name="comp" required>
              </div>     
            </div>

            <button type="submit">CONCLUIR CADASTRO</button>           
          </form>             
        </div>
      </div>
  </section>

 <section id="rodape">
      <div class="container">
        <div class="row">
          <div class="col-4" style="text-align: center;">
             <h5>Dúvidas</h5>
             <a href="#"><p>Central de Atendimento</p></a>
             <a href="#"><p>Sobre a Entrega</p></a>
             <a href="#"><p>Troca e Devolução</p></a>
             <a href="#"><p>Cancelamento</p></a>
             <a href="#"><p>Política de Privacidade</p></a>
          </div>

          <div class="col-4" style="text-align: center;">
            <h5>Serviços</h5>
            <a href="#"><p>Marketplace</p></a>
            <a href="#"><p>Baixe nosso App</p></a>
            <a href="#"><p>Garantia Estendida e Original</p></a>
            <a href="#"><p>Instalações e Assistências</p></a>
            <a href="#"><p>Cartão de Crédito</p></a>
          </div> 

          <div class="col-4" style="text-align: center;" id="RS-icons">
            <h5>Redes Sociais e Contato</h5>
            <a href="#"><p><i class="fab fa-facebook-square"></i></p></a>
            <a href="#"><p><i class="fab fa-instagram"></i></p></a>
            <a href="#"><p><i class="fab fa-twitter-square"></i></p></a>
            <a href="https://github.com/SidSan97"><p><i class="fab fa-github-square"></i></p></a>                   
          </div>
        </div>
      </div>
  </section>

    <div id="rodape-inf" style="background-color: rgb(231, 230, 228);"> 
        <article class="inf-text">
          <h3>Loja do SidSan</h3>
          <p>Sidnei Santiago - Todos os direitos reservados</p>
          <p>Salvador, 06/03/2019</p>
          <p><i class="far fa-envelope" style="font-size: 14pt;"></i> sidnei1.8santiago@hotmail.com </p> 
        </article>
    </div>   

    <script src="js/API-CEP.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>

