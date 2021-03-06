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

    <title>Celulares | Xiaomi</title>
</head>
 <body style="background-color: rgb(231, 230, 228);">
    <section style="background-color: #ffc107;">
        <div class="container">
           <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="index.php"><img src="assets/logomercado.png" height="80px" width="80px"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado2" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                 <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="conteudoNavbarSuportado2">
                <form id="form" class="form-inline my-2 my-lg-0">
                  <div id="search">
                    <input type="search" placeholder="O que você procura?" id="caixa-pesquisa">
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

    <section style="margin-bottom: 3%;">
        <div class="container" id="section-venda">
            <div class="row">
                <img src="assets/xiaomi.jpg" alt="Xiaomi Mi 9 Lite" class="col-lg-4 produto">
                    <div class="col-lg-8">
                        <article class="ml-3"> 
                          Xiaomi Mi 9 Lite Dual SIM 128 GB Branco-pérola
                          6 GB RAM câmera de 48 megapixel 
                           <p>Código do produto: 1265019</p>
                        </article>
                           <hr class="ml-3">

                            <span class="precos ml-3">
                              <strike> de R$ 1.699,00 </strike>
                                <h4 class="ml-3">por R$ 999,00 à vista</h4>
                                  <p class="ml-3">
                                     ou <span>12x de R$ 105,00</span> sem juros <br>
                                     total a prazo R$ 2.399,00
                                  </p>

                                  <a href="#" class="ml-3"><h5><i class="far fa-credit-card"></i> Veja outras formas de parcelamento</h5></a>
                                    <hr>

                                    CONSULTE O FRETE 
                                    <input type="text" name="CEP" style="background-color: rgb(167, 167, 167); padding-left: 1%; border: none; border-radius: 2px;">
                                    <input type="submit" id="btn-frete" value="OK">
                                    <!input class="ml-5" type="submit" id="btn-AddCar" value="ADICIONAR AO CARRINHO">
                                    <button class="ml-5 mb-2" id="btn-AddCar">
                                      <i class="fas fa-cart-plus"></i>
                                      ADICIONAR AO CARRINHO                          
                                    </button>
                            </span> 
                    </div>
            </div>
        </div>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-12 mb-2">
          <h3 style="color: rgb(99, 99, 99);"><i class="fas fa-edit"></i> Descrição</h3>
        </div>
      </div>
    </div>

      <div class="container" id="description">
          O Xiaomi Mi 9 Lite é, sem dúvida, um dos smartphones Android mais avançados e abrangentes disponíveis no mercado, 
          graças ao seu rico equipamento e recursos multimídia avançados. 
          Tem um grande <strong> display de 6.39 polegadas </strong> com uma <strong> resolução de 2340x1080 pixels </strong>. 
          As funcionalidades oferecidas pelo Xiaomi Mi 9 Lite são muitas e inovadoras. 
          Começando pelo LTE 4G que permite a transferência de dados e excelente navegação na internet. 
          Enfatizamos a excelente <strong> memória interna de 128 GB </strong> com a possibilidade de expansão. <br><br>

          O Xiaomi Mi 9 Lite é um produto com poucos concorrentes em termos de multimídia graças à câmera de 48 megapixels 
          que permite ao Xiaomi Mi 9 Lite tirar fotos fantásticas com uma resolução de <strong> 8000x6000 pixels </strong> e gravar vídeos 
          em <strong> 4K </strong> a espantosa resolução de <strong> 3840x2160 pixels </strong>.
      </div>
    
    <div class="container">
      <div class="row">
        <div class="col-12 mb-2">
          <h3 style="color: rgb(99, 99, 99);"><i class="fas fa-list-ul"></i> Características</h3>
        </div>
      </div>
    </div>

    <div class="container" id="caracteristica">
      <div class="row" style="background-color: #e4e7ee;">
          <span class="col"><strong> Sistema Operacional </strong></span>
          <span class="col"> Android 9 MIUI 10 Pie </span>
      </div>

      <div class="row">
        <span class="col"><strong>Dimensões </strong></span>
        <span class="col"> 156.8 x 74.5 x 8.67 mm </span>
      </div>

      <div class="row" style="background-color: #e4e7ee;">
        <span class="col"><strong> Peso </strong></span>
        <span class="col"> 179 gramas </span>
      </div>

      <div class="row">
        <span class="col"><strong> Processador </strong></span>
        <span class="col"> 2x 2.2 GHz Kryo 360 + 6x 1.7 GHz Kryo 360 </span>
      </div>

      <div class="row" style="background-color: #e4e7ee;">
        <span class="col"><strong> Chipset </strong></span>
        <span class="col"> Snapdragon 710 Qualcomm SDM710 </span>
      </div>

      <div class="row">
        <span class="col"><strong> Câmera </strong></span>
        <span class="col"> 48 Mp + 8 Mp + 2 Mp </span>
      </div>

      <div class="row" style="background-color: #e4e7ee;">
        <span class="col"><strong> Câmera Frontal </strong></span>
        <span class="col"> 32 Mp F 2 </span>
      </div>

      <div class="row">
        <span class="col"><strong> Resolução da câmera </strong></span>
        <span class="col"> 8000 x 6000 pixiel </span>
      </div>

      <div class="row" style="background-color: #e4e7ee;">
        <span class="col"><strong> Resolução de tela </strong></span>
        <span class="col"> 1080 x 2340 pixel </span>
      </div>

      <div class="row">
        <span class="col"><strong> Polegadas </strong></span>
        <span class="col"> 6.39 </span>
      </div>

      <div class="row" style="background-color: #e4e7ee;">
        <span class="col"><strong> Ano de lançamento </strong></span>
        <span class="col"> 2019/1 </span>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 mb-2">
          <h3 style="color: rgb(99, 99, 99);"><i class="far fa-comments"></i> Comentários</h3>
        </div>
      </div>
    </div>

    <div class="container" id="comentarios">
      <div class="row">
        <div class="col-12" style="text-align: center;">
            <h5>Seja o primeiro a comentar</h5>
            <p>Compartilhe sua experiência com os outros usuários</p>
            <input type="submit" value="AVALIAR ESTE PRODUTO">
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