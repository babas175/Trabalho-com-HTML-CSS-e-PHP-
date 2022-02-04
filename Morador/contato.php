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
</head>
<body>

<h1>Contato</h1>


<div class="container">
<input type="submit" value="Voltar na pagin inicial">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="seu email">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Apartamento</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="seu apartamento">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Bloco">Bloco</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
      </select>
    </div>
    <div class="col-25">
      <label for="fname">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="seu email">
    </div>
  

  <br>
  <div class="row">
    <input type="submit" value="Enviar">
  </div>
  </form>
</div>

</body>
</html>
