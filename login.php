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
    <title>Login</title>
</head>

<body>
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
                  <input type="search" placeholder="O que você procura?" id="caixa-pesquisa">
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

  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-1 mb-4" id="div-login">
        <h3 class="h3"> Já sou cliente </h3>

          <form class="login-form" method="POST" action="login_user.php">           
            <input class="input" type="text" placeholder="Email" name="usuario"/>          
            <input class="input" type="password" placeholder="Senha" name="senha"/> 
            
            <label id="checkword"> 
                <input type="checkbox" id="check"> Lembrar Senha 
            </label>

              <?php
                    if(isset($_SESSION['nao_autenticado'])):
                  ?>
                    <div class="notification">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    
                  <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                  ?>

            <button type="submit"> Entrar </button>             
                               
              <h5 class="forget"> <a href="#"> Esqueci Email / Senha </a></h5> 
          </form>                 
      </div>

    <!Div cadastro>
      <div class="col-lg-4 offset-1 mb-4" id="div-cadastro">
        <h3 class="h3"> Não sou cliente </h3>

        <form action="" class="cadastro-form">
           <p class="descricao">
              Faça seu cadastro no site e aproveite as vantagens em ser nosso cliente!
           </p>

           <button class="btn-cad">
            <a href="cadastro.php"> FAZER MEU CADASTRO </a>
           </button>

           <button class="btn-pesJud">
             É PESSOA JURIDICA?
           </button>
        </form>
      </div>
    </div>
  </div>

  <section id="rodape">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-2" style="text-align: center;">
             <h5>Dúvidas</h5>
             <a href="#"><p>Central de Atendimento</p></a>
             <a href="#"><p>Sobre a Entrega</p></a>
             <a href="#"><p>Troca e Devolução</p></a>
             <a href="#"><p>Cancelamento</p></a>
             <a href="#"><p>Política de Privacidade</p></a>
          </div>

          <div class="col-lg-4 mb-2" style="text-align: center;">
            <h5>Serviços</h5>
            <a href="#"><p>Marketplace</p></a>
            <a href="#"><p>Baixe nosso App</p></a>
            <a href="#"><p>Garantia Estendida e Original</p></a>
            <a href="#"><p>Instalações e Assistências</p></a>
            <a href="#"><p>Cartão de Crédito</p></a>
          </div> 

          <div class="col-lg-4 mb-2" style="text-align: center;" id="RS-icons">
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

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>