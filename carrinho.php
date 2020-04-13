<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/booditstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="css/tema.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/carrinho.css">
    <link rel="stylesheet" type="text/css" href="css/xiaomi.css">

    <title> Carrinho </title>
</head>
 <body style="background-color: rgb(231, 230, 228);">
    <section id="div-sup">
        <div class="container">
           <nav class="navbar navbar-expand-lg navbar-light bg-info" id="nav-sup">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                  if(isset($_SESSION['nao_autenticado'])):               
                ?>
                  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="lista-nav-bar" style="width: 100%;">
                      <li class="col"> <i class="far fa-user-circle"></i> Faça seu <a href="login.php">login ou cadastre-se</a> </li>
                      <li class="col"> <a href="#"> ATENDIMENTO </a> </li>
                      <li class="col"> <a href="#" style="color: yellow; font-weight: bold;"> BAIXE NOSSO APP </a> </li>
                    </ul>
                  </div>

                  <?php 
                      else:                      
                  ?>

                    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                      <ul class="lista-nav-bar" style="width: 100%;">
                        <li class="col"> <i class="far fa-user-circle"></i> Olá, <?php echo $_SESSION['usuario'];?> </li>
                        <li class="col"> <a href="#"> ATENDIMENTO </a> </li>
                        <li class="col"> <a href="#" style="color: yellow; font-weight: bold;"> BAIXE NOSSO APP </a> </li>
                      </ul>
                    </div>

                  <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                  ?>         
           </nav>
        </div>
    </section>
    
    <div class="container">
        <div class="row">
          <div class="col-12 mb-2">
            <h3 style="color: rgb(99, 99, 99);"> Carrinho </h3>
          </div>
        </div>
    </div>

        <div class="container" id="tabela-produto">
            <div class="table-responsive-xl">
                <table class="table">
                    <thead class="thead-dark mb-4">
                      <tr>                       
                        <th scope="col">PRODUTO</th>
                        <th scope="col">FRETE</th>
                        <th scope="col">QTD</th>
                        <th scope="col">UNITÁRIO</th>
                        <th scope="col">TOTAL</th>
                        <th scope="col"> </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>                     
                        <td>
                            <img src="assets/xiaomi.jpg" width="64px" height="64px" alt="Xiaomi" align="left">
                               Xiaomi Mi 9 Lite Dual SIM 128 GB Branco-pérola <br>
                               6 GB RAM câmera de 48 megapixel 
                        </td>

                        <td>
                            <p> entregue em até <br><span style="font-weight: bold;"> dia útil R$ 0,00 </span></p>
                        </td>

                        <td>
                            <input type="number" id="quantity" name="quantity" min="1" max="5" value="1">
                        </td>

                        <td>
                            <h5>R$ 999,00</h5>
                        </td>

                        <td>
                            <h5 style="color: red;">R$ 999,00</h5>
                        </td>

                        <td>
                            <button class="btn-del" id="btn-buy"> X </button>
                        </td>
                      </tr>                     
                    </tbody>
                </table>                           
            </div>     
        </div>

        <div class="container">
            <div class="row mt-3 mb-3">
                <div class="col">
                    CONSULTE O FRETE 
                    <input type="text" name="CEP" style="background-color: rgb(167, 167, 167); padding-left: 1%; border: none; border-radius: 2px;">
                    <input type="submit" class="btn-frete" value="OK">
                </div>

                <div class="col">               
                    CUMPOM DE DESCONTO
                    <input type="text" name="desconto" style="background-color: rgb(167, 167, 167); padding-left: 1%; border: none; border-radius: 2px;">
                    <input type="submit" class="btn-frete" value="OK">
                </div>
            </div>
        </div>

        <span align="center" class="artg-comp">
            <h4>Total da sua compra</h4> <br>
            <h2> R$ 999,00 </h2>
        </span>

        <a href="index.php" class="home">Página Inicial</a>

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

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>