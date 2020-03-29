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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado1" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
               <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado1">
              <form id="form" class="form-inline my-2 my-lg-0">
                <div id="search">
                  <input type="search" placeholder="O que você procura?" id="input">
                    <button  type="submit" id="button"> <i class="fas fa-search"></i> </button>
                </div>      

                    <div id="label">
                       Login/Cadastro <button id="btn-user"><a href="login.php"> <i class="fas fa-user"></i> Entrar </a></button>
                   </div>
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

    <div id="div-login">
        <h3> Já sou cliente </h3>

        <form class="login-form">           
            <input class="input"type="text" placeholder="Email ou nº telefone"/>          
            <input class="input" type="password" placeholder="Senha"/> 
            
            <label id="checkword"> 
                <input type="checkbox" id="check"> Lembrar Senha 
            </label>

            <button> <a>Entrar</a> </button>             
    
                <table>
                   <th> <p class="message">Não tem uma conta? <a href="#">Registre-se</a></p> </th>
                   <th><h5 class="forget"> <a href="#"> Esqueci Email/Senha </a></h5> </th>
                </table>              
    </div>

    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>