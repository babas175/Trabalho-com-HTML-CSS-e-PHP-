<?php

    include("conexao.php");

    $id =$_POST['id'];
    $senha =$_POST['senha'];
    
    


    $sql=" INSERT INTO adm (id, senha) 
            VALUES ('$id', '$senha')";


    if(mysqli_query($conexao, $sql)){
        echo header('Location: cadastro_adm_sucesso.php');
    }
    else{
        echo "Erro".mysqli_connect_error();
    }
    mysqli_close($conexao);


   

?>