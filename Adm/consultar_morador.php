<?php
    session_start();
    include_once('conexao.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
    

    }
    
    if(!empty($_GET['search']))
    {
      $data = $_GET['search'];
      $sql = "SELECT * FROM cadastro WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' or bloco LIKE '%$data%' or apartamento LIKE '%$data%'  ORDER BY id DESC ";
    }
    else
    {
    $sql =" SELECT *FROM cadastro ORDER BY id DESC ";
    }

    $result = $conexao->query($sql);
    

    
?>

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

   
      
  table, td, {
  border: 1px solid black;
  padding: 15px;
  border-radius: 15px 15px 0 0;
  text-align: center;
  justify-content: center;
 
  
 
  }
  td{
    padding: 30px;
    border: 1px solid black;
    padding: 15px;
    text-align: center;
    justify-content: center;
    
    
    
  
  }
  th {
  background-color: #58af9b;
  color: white;
  text-align: center;
  padding: 15px;
  justify-content: center;
 
 
 
  
}
tr:nth-child(even) {background-color: #f2f2f2};


}

table {
  
  border-collapse: collapse;
  width: 100%;
  height: 5980px;
  justify-content: center;
  text-align: center;
  margin: 500px; 



}

.box-search{
  display: flex;
  justify-content: center ;
  border-radius: 15px 15px 0 0;
  
}
   
  </style>

</head>
<body>

<br>
<a href="home.php"><button>voltar na pagina inicial</button></a>


<div class="box-search">
  <input type= "search" class= "form-control w-25" placeholder="pesquisar" id ="pesquisar">
  <button class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>
  </button>
</div>


<br>
<br>

    <div>
        <table class = "table">
          <thread>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nome</th>
              <th scope="col">Bloco</th>
              <th scope="col">Apartamento</th>
              <th scope="col">Email</th>
              <th scope="col">Celular</th>
              <th scope="col">Data de Cadastro</th>
              <th scope="col">hora de Cadastro</th>
              
            </tr>
          </thread>
          <tbody>
            <?php
            while($user_data = mysqli_fetch_assoc($result))
            {
              echo "<tr>";
              echo "<td>".$user_data['id']."</td>";
              echo "<td>".$user_data['nome']."</td>";
              echo "<td>".$user_data['bloco']."</td>";
              echo "<td>".$user_data['apartamento']."</td>";
              echo "<td>".$user_data['email']."</td>";
              echo "<td>".$user_data['celular']."</td>";
              echo "<td>".$user_data['Data_de_cadastro']."</td>";
              echo "<td>".$user_data['hora']."</td>";
              echo "</tr>";
            }

            ?>
          <tbody>

        </table>

  </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event){
      if (event.key === "Enter")
      {
        searchData();
      }
    });

    function searchData()
    {
      window.location = 'consultar_morador.php?search='+search.value;
    }
</script>
</html>
