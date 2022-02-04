<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<style>
    body {
      background-image: url('image.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed; 
      background-size: 100% 100%;
    }
    </style>

<style>
    *{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(1.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
}

.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}

.search{
    width: 330px;
    float: left;
    margin-left: 1000px;
}

.srch{
    font-family: 'Times New Roman';
    width: 200px;
    height: 40px;
    background: transparent;
    border: 1px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}

.btn{
    width: 100px;
    height: 40px;
    background: #ff7200;
    border: 2px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}

.btn:focus{
    outline: none;
}

.srch:focus{
    outline: none;
}

.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color: #ff7200;
    font-size: 65px
}

.form{
    width: 250px;
    height: 380px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: #ff7200;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: #ff7200;
}
</style>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <img src="images2.jpeg" alt="HTML5 Icon" style="width:128px;height:128px;">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="cadastro_adm1.php">CADASTRAR ADM</a></li>
                    <li><a href="consultar_morador.php">LISTAR MORADOR </a></li>
                    <li><a href="cadastro2.php">CADASTRAR MORADOR</a></li>
                    <li><a href="listar_agendamento.php">LISTA DE AGENDAMENTO</a></li>
                    <li><a href="remover.php">EXCLUIR MORADOR</a></li>
                    <li><a href="atualizar.php">ATUALIZAR MORADOR</a></li>
                    <li><a href="lista_de_reservacao.php">LISTAR RESERVACAO </a></li>
                    <li><a href="login1.php">SAIR</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div> 
        <div class="content">
        <h1>Condomínio  <br><span>Residencial da Efapi</span> <br></h1>
            <p class="par">O Condomínio Residencial da Efapi está localizado a leste de Chapeco, no atual Setor <br>
                 Habitacional São Bartolomeu. A Fazenda Taboquinha, de onde se originam as terras de nosso<br>
                  Condomínio, tem documentação centenária, remontando ao início do século XIX, quando as <br> transações
                   imobiliárias eram anotadas pelas secretarias das igrejas católicas, por meio de <br> “registros paroquiais”. Nosso Condomínio
                    é resultante do parcelamento da fazenda original, <br> denominado “Quinhão 11”, também conhecido por “Serrinha”, com a área de 218 hectares.<br> A Fazenda
                     Taboquinha, a partir de 1955, pertenceu a Pedro Ferreira Alves e Dona Romualda, <br> ocupando uma área de 1700 alqueires, abrangendo
                      um território que tinha divisas, em termos<br> contemporâneos, próximas à Ermida Dom Bosco, à QI-19 e ao Presídio da Papuda. Seus limites <br> faziam
                      referência ao Córrego da Divisa, à Fazenda Paranoá, ao Córrego<br> Cabeça de Veado, ao Córrego Mata Grande, ao Córrego Santo Antônio da Papuda, ao Córrego<br> Taboca e ao Rio São Bartolomeu. Durante o processo de instalação da capital Federal, uma parte <br> 
                      da Fazenda Taboquinha foi negociada com o Governo, enquanto que vários quinhões foram mantidos,<br>
                       integralmente, sob o domínio e posse de seus proprietários.</p>

                

                
                </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
    <div class="content" >
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <footer>
        <ul>
            <li><a href="https://www.facebook.com/condomino_efapi/"><img src="assets/images/facebook.png" alt="Facebook"></a></li>
            <li><a href="https://www.twitter.com/condomino_efapi/"><img src="assets/images/twitter.png" alt="Twitter"></a></li>
        </ul>
    </footer>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14206.102087635581!2d-52.692080513122775!3d-27.108252865881095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4b5f6b543c193%3A0x84ebb624ff24db56!2sR.%20Vinte%20e%20Cinco%20de%20Julho%2C%201049%20-%20Efapi%2C%20Chapec%C3%B3%20-%20SC%2C%2089809-549!5e0!3m2!1spt-BR!2sbr!4v1630173553410!5m2!1spt-BR!2sbr" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" justify-content= "center"></iframe>
    </div>

</html>