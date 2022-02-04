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

input[type=submit] {
  background-color:#ff7200;
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
  width: 700px;
    height: 580px;
    background: #58af9b;
    position: absolute;
    top: 200px;
    left: 570px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
    
     

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
</head>
<body>

<br>


<div class="container">

  <a href="home.php"><button>voltar na pagina inicial</button></a>
  <form action="cadastro.php" method="POST" id ='form-cadastro' >
  <div class="row">
    <div class="col-25">
      <label for="fname">Id</label>
    </div>
    <div class="col-75">
      <input type="text" id="id" name="id" placeholder=" id ">
      <span class='msg-erro msg-id'></span>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder=" email">
      <span class='msg-erro msg-email'></span>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Apartamento</label>
    </div>
    <div class="col-75">
      <input type="text" id="apartamento" name="apartamento" placeholder=" apartamento">
      <span class='msg-erro msg-apartamento'></span>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Bloco">Bloco</label>
    </div>
    <div class="col-75">
      <select id="bloco" name="bloco">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
      </select>
      <span class='msg-erro msg-bloco'></span>
    </div>
    
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Nome</label>
    </div>
    <div class="col-75">
      <input type="text" id="nome" name="nome" placeholder=" nome completo">
      <span class='msg-erro msg-nome'></span>
    </div>

  </div>
  

  <div class="row">
    <div class="col-25">
      <label for="lname">celular</label>
    </div>
    <div class="col-75">
      <input type="text" id="celular" name="celular" placeholder="Celular">
      <span class='msg-erro msg-celular'></span>
    </div>
    
  </div>
  <br>
  <br>
  <div class="row">
    <input type="submit" value="Enviar">
  </div>
  </form>
</div>
<script name="script" type="text/javascript" src="../custom.js/validacao_cadastro_adm.js"></script>
</body>
</html>


