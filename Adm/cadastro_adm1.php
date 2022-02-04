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
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
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

  <a href="home.php"><button>voltar na pagina inicial</button></a>>
  <form action="cadastro_adm.php" method="POST" id ='form-cadastro'>
  <div class="row">
    <div class="col-25">
      <label for="fname">Id</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="id" placeholder="seu id">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Senha</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="senha" placeholder="sua senha">
    </div>
  </div>
 
    
  <br>
  <br>
  <div class="row">
    <input type="submit" value="Enviar">
  </div>
  </form>
</div>

</body>
</html>