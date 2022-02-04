<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<style>
    body {
      background-image: url('images1.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed; 
      background-size: 100% 100%;
    }
    </style>
<style>

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 70%;
  padding: 15px;
  border: 0.5px solid rgb(248, 250, 248);
  border-radius: 4px; 
  resize: vertical;
}

label {
  padding: 12px 12px 0;
  display: inline-block;
}

h1{
    color:white;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type=submit]:hover {
  background-color: #141414;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 30px;
  font-family: Verdana,Tahoma,sans-serif;
    font-size: 15px;
    background-color: #58af9b;
    max-width: 1000px;
    margin-top: 200px;
    margin-bottom: 150px;
    margin-right: 110px;
    margin-left: 100px;
    margin: auto;
    width: 60%;
    border: 3px solid #fffffe;
    padding: 10px;
    height: 80vh;
    border-radius: 20px;
    
     

}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  color: #fffffe;
  text-decoration: black;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 300px) {
  .col-25, .col-75, input[type=submit] {
    width: 100;
    margin-top: 50;
  }
}
</style>
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
</head>
<body>



<div class="container">
  <a href="home_usuario.html"><button>voltar na pagina inicial</button></a>
  <form action="reservacao.php" method= "POST">
  <div class="row">
    <div class="col-25">
      <label for="fname">Nome</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="nome" placeholder="seu nome">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="Bloco">Bloco</label>
    </div>
    <div class="col-75">
      <select id="country" name="bloco">
        <option value="selecione">Selecione</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Apartamento</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="apartamento" placeholder="seu apartamento">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="Bloco">Espaço</label>
    </div>
    <div class="col-75">
      <select id="country" name="espaco">
        <option value="selecione">selecione</option>
        <option value="Salao de festa 1">Salao de festa 1</option>
        <option value="Salao de festa 2">Salao de festa 2</option>
        <option value="Kiosque 1">Kiosque 1</option>
        <option value="Kiosque 2">Kiosque 2</option>
        <option value="Kiosque 3">kiosque 3</option>
        <option value="Kiosque 4">Kiosque 4</option>
        <select>
        </div>
      </div>
      

    <div class="row">
      <div class="col-25">
        <label for="fname">Data Escolhida</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="data_escolhida" placeholder="">
      </div>
    </div>
    
 

  <div class="col-25">
    <label for="Bloco">Hora</label>
  </div>
  <div class="col-75">
    <select id="country" name="hora">
      <option value="selecione">selecione</option>
      <option value="9h">9h</option>
      <option value="10h">10h</option>
      <option value="11h">11h</option>
      <option value="12h">12h</option>
      <option value="13h">13h</option>
      <option value="14h">14h</option>
      <option value="15h">15h</option>
      <option value="16h">16h</option>
      <option value="17h">17h</option>
      <option value="18h">18h</option>
      <option value="19h">19h</option>
      <option value="20h">20h</option>
      <option value="21h">21h</option>
      <option value="22h">22h</option>

      <select>
      </div>
    
  <br>
  <br>

  <div class="row">
    <br>
    <br>
    <br>
    <br>
    <input type="submit" value="Enviar">
  </div>
  <h1> Reservacao feita com succeso ! </h1>
  </form>
</div>
    

</body>
</html>
