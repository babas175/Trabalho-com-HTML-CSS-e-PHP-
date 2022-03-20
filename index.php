<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}

section {
  width: 100%;
  display: inline-block;
  background: black;
  height: 60vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
	background: black;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}

</style>
<style>
.your-centered-div {
    width: 900px;
    height: 515px;
    position: center; 
    top: 0; right: 0; 
    bottom: 0; left: 0;
    margin: 500px; 
</style>


<style>
    body {
      background-image: url('condomino.jpg');
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
                    <li><a href="Morador/login1.php"> LOGIN </a></li>
                    <li><a href="https://api.whatsapp.com/message/6ED7OTOT7YPSH1">CONTATO</a></li>
                   
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>Condomino  <br><span>Residencial da Efapi</span> <br>Chapeco</h1>
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
        <iframe class="your-centered-div" width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
    </iframe>
        
    </div>



    <div class="content" >
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <footer>
        <ul>
            <li><a href="https://www.facebook.com/condomino_efapi/"><img src="images.png" alt="Facebook" style="width:20px;height:20px;"></a></li>
            <li><a href="https://www.twitter.com/condomino_efapi/"><img src="twitter.png" alt="Twitter" style="width:20px;height:20px;"></a></li>
        </ul>
    </footer>
    
    </div>
</body>

<footer class="footer-distributed">

			<div class="footer-left">

            <div class="icon">
            <img src="images2.jpeg" alt="HTML5 Icon" style="width:128px;height:128px;">
            </div>

				<p class="footer-links">
					<a href="Morador/login1.php" class="link-1">Login</a>
					
					
				
					<a href="https://api.whatsapp.com/message/6ED7OTOT7YPSH1">Contato</a>
				
					
					
				</p>

				<p class="footer-company-name">Company Name © 2022</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>1049 Rua vinte e cinco de julho </span> Efapi, Chapeco</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>49 98504-8890</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="lubinsebastienlionel@gmail.com">resdencialefapi@chapeco.com.br</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Sobre o condomino</span>
					O Condomínio Residencial da Efapi está localizado a leste de Chapeco, no atual Setor
Habitacional São Bartolomeu.
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/sharer/sharer.php?u=#url" ><i class="fa fa-facebook"></i></a>
					

				</div>

			</div>

		</footer>
</html>