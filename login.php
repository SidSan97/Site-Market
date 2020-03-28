<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div id="div-login">
        <h1> Login </h1>

        <form class="login-form">           
            <input class="input"type="text" placeholder="Email ou nº telefone"/>          
            <input class="input" type="password" placeholder="Senha"/> 
            
            <label id="checkword"> 
                <input type="checkbox" id="check"> Lembrar Senha 
            </label>

            <button> <a>Entrar</a> </button>             
            <h3 style="text-align: center; font-family: Arial; color: white;"> OU </h3>

        </form>

        <form class="login-altern">
            
                <button class="btn2">
                    <a>
                      <img src="logos/facebook-ico.ico">
                      <span>Entrar com o Facebook</span>
                    </a>
                </button> 
             
                <button class="btn2">
                    <a>
                      <img src="logos/google-ico.ico">
                      <span>Entrar com o Google</span>
                    </a> 
                </button> 
                     
                <button class="btn2">
                    <a>
                      <img src="logos/outlook-ico.ico">
                      <span>Entrar com Outlook</span>
                    </a>
                </button> <br>

                <table>
                   <th> <p class="message">Não tem uma conta? <a href="#">Registre-se</a></p> </th>
                   <th><h5 class="forget"> <a href="#"> Recuperar minha senha </a></h5> </th>
                </table>
        </form>               
    </div>

    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>