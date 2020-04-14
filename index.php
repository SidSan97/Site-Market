<?php
session_start();
include('verifica_login.php');
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
    
    <title>home</title>
</head>
 <body>
   <section style="background-color: #ffc107;">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php"><img src="assets/logomercado.png" height="80px" width="80px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado1" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
               <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado1">
              <form id="form" class="form-inline my-2 my-lg-0">
                <div id="search">
                  <input type="search" placeholder="O que você procura?" id="input">
                    <button  type="submit" id="button"> <i class="fas fa-search"></i> </button>
                </div>  
                     
                   <?php
                     if(isset($_SESSION['nao_autenticado'])):               
                   ?>
                   <div id="label">
                    Login/Cadastro <button id="btn-user"><a href="login.php"> <i class="fas fa-user"></i> Entrar </a></button>
                   </div>

                   <?php
                      else:                      
                   ?>
                    <div id="label">
                      Olá, <?php echo $_SESSION['usuario']; ?> <button id="btn-user"><a href="logout.php"> <i class="fas fa-user"></i> Sair </a></button>
                    </div>                                          
                     
                    <?php
                      endif;
                      unset($_SESSION['nao_autenticado']);
                    ?>                                               
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

    <section id="img-sale">
      <img src="assets/ofertas.jpg" width="100%" height="100%">
    </section>

    <section id="ofertas" style="margin-bottom: 2%;">
        <div class="container">
          <h3>Ofertas do dia</h3>
           <div class="row" style="margin-bottom: 2%;">
              <div class="produtos col-sm mr-2 mb-2">
                <a href="xiaomi.php">
                  <img src="assets/xiaomi.jpg">
                    <h6>
                      Xiaomi Mi 9 Lite Dual SIM 128 GB Branco-pérola 6 GB RAM câmera de 48 megapixel
                    </h6>   <br>                                      
                             
                     <article>
                         <strike>de R$ 1.900,00</strike> 
                        <h4>por R$ 1.180,00</h4>
                        <p>ou <span>12x de R$ 100,00</span> sem juros</p>
                    </article>
                </a>
              </div>

              <div class="produtos col-sm mr-2 mb-2">
                <a>
                  <img src="assets/geladeira.png">
                    <h6>
                      Refrigerador | Geladeira Top Freezer Com Dispenser
                      de Água Platinum 400L (DW44S) 
                    </h6> <br>

                    <article>
                        de R$ 3.149,00 
                        <h4>por R$ 2.000,00</h4>
                        <p>ou <span>12x de R$ 169,00</span> sem juros</p>
                    </article>
                </a>
              </div>

              <div class="produtos col-sm mr-2 mb-2">
                <a>
                  <img src="assets/tv.jpg">
                    <h6>
                      Smart TV LED 50" UHD 4K Samsung com  
                      Bluetooth, HDR Premium, HDMI e USB
                    </h6> <br>

                    <article>
                        de R$ 2.699,00 
                        <h4>por R$ 1.899,00</h4>
                        <p>ou <span>12x de R$ 160,00</span> sem juros</p>
                    </article>
                </a>
              </div>

              <div class="produtos col-sm mr-2 mb-2">
                <a>
                  <img src="assets/lenovo.jpg">
                    <h6>
                      Notebook Lenovo Ideapad S145-15IGM - Intel Dual Core 4GB 500GB 15,6” Windows 10
                    </h6> <br>

                    <article>
                        de R$ 1.999,00 
                        <h4>por R$ 1.230,00</h4>
                        <p>ou <span>12x de R$ 105,00</span> sem juros</p>
                    </article>
                </a>
              </div>
           </div>
     <!----------NOVA LINHA---------->
            <div class="row">
              <div class="produtos col-sm mr-2 mb-2">
                <a>
                  <img src="assets/vinho.jpg">
                    <h6>
                      Vinho tinto Lenotti Amarone Delle Valpolicella Clássico 
                   </h6>   <br><br>            
                             
                     <article>
                        de R$ 425,00 
                        <h4>por R$ 384,00</h4>
                        <p>ou <span>12x de R$ 128,25</span> sem juros</p>
                    </article>
                </a>
              </div>

              <div class="produtos col-sm mr-2 mb-2">
                <a>
                  <img src="assets/pneu.jpg">
                    <h6>
                      Pneu Pirelli Aros 15/ 17/ 18/ 20 Scorpion MTR 31X10.5R15 109Q
                    </h6> <br><br>

                    <article>
                        de R$ 749,00 
                        <h4>por R$ 669,00</h4>
                        <p>ou <span>12x de R$ 60,00</span> sem juros</p>
                    </article>
                </a>
              </div>

              <div class="produtos col-sm mr-2 mb-2">
                <a>
                  <img src="assets/ps4.jpg">
                    <h6>
                      Console PS4 1TB Edição Family + 2 controles + 7 jogos
                    </h6> <br><br>

                    <article>
                        de R$ 1.699,00 
                        <h4>por R$ 999,00</h4>
                        <p>ou <span>12x de R$ 105,00</span> sem juros</p>
                    </article>
                </a>
              </div>

              <div class="produtos col-sm mr-2 mb-2">
                <a>
                  <img src="assets/papicat.jpg">
                    <h6>
                      Areia Sanitária Kelco Pipicat Multicat - 12 Kg - 12 Kg
                    </h6> <br><br>

                    <article>
                        de R$ 39,00 
                        <h4>por R$ 29,00</h4>
                        <p>ou <span>2x de R$ 16,50</span> sem juros</p>
                    </article>
                </a>
              </div>
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

  <div id="rodape-inf" style="background-color: rgb(231, 230, 228)"> 
     <article class="inf-text">
       <h3>Loja do SidSan</h3>
       <p>Sidnei Santiago - Todos os direitos reservados</p>
       <p>Salvador, 06/03/2019</p>
       <p><i class="far fa-envelope" style="font-size: 14pt;"></i> sidnei1.8santiago@hotmail.com </p> 
     </article>
  </div>

    <script src="js/ScriptSite.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>
