<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
      
<style>
.button {
  display: inline-block;
  padding: 10px 25px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #58af9b;
  border: none;
  border-radius: 15px;
  box-shadow: 0 0px #999;
}

.button:hover {background-color: }

.button:active {
  background-color: #58af9b;
  box-shadow: 0 6px #666;
  transform: translateY(2px);
}
</style>

<style>
.button1 {
  display: inline-block;
  padding: 10px 25px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #58af9b;
  background-color: white;
  border: none;
  border-radius: 15px;
  box-shadow: 0 0px #999;
}

.button1:hover {background-color: }

.button1:active {
  background-color: #58af9b;
  box-shadow: 0 6px #666;
  transform: translateY(2px);
}

   
</style>


<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Seja Bem Vindo </h2>
                
                <p class="description description-primary">Um outro jeito de morar</p>
                <br>
                <p><a href="../Adm/login1.php" class="button1">Eu sou Administrador clique aqui</a></p>
               
            </div>    
            <div class="second-column">
            
                <h2 class="title title-second">Faça seu login</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">ou utilize seu dados para acessar</p>
                <form class="form" action="login.php" method="POST" id="form_login_morador">
                    <label class="label-input" for="">
                        
                        <input type="text" placeholder="Email" name="email" id="email">
                        <span class='msg-erro msg-email'></span>
                    </label>
                    
                    <label class="label-input" for="">
                        <input type="text" placeholder="Bloco" name="bloco"  id="bloco">
                        <span class='msg-erro msg-bloco'></span>
                    </label>
                    
                    <label class="label-input" for="">
                        <input type="text" placeholder="Apartamento" name="apartamento" id="apartamento">
                        <span class='msg-erro msg-apartamento'></span>
                    </label>
                    
                    <button class="btn btn-second" name="entrar">Entrar</button> 
                    <br>
                    <br>

                     <a href="cadastro1.php" class="button">CADASTRAR-SE</a>
                 
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
      
            
        <script name="script" type="text/javascript" src="../custom.js/validacao_login_morador.js"></script>
</body>
</html>