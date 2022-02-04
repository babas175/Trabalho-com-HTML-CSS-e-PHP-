<?php

    include("conexao.php");
    $id =$_POST['id'];
    $email =$_POST['email'];
    $apartamento =$_POST['apartamento'];
    $bloco =$_POST['bloco'];
    $nome =$_POST['nome'];
    $celular =$_POST['celular'];
    
    


    $sql=" INSERT INTO cadastro (id,email,apartamento,bloco,nome,celular) 
            VALUES ('$id','$email', '$apartamento', '$bloco', '$nome','$celular')";


    if(mysqli_query($conexao, $sql)){
        echo header('Location: cadastro_sucesso.php');
    }
    else{
        echo "Erro".mysqli_connect_error();
    }
    mysqli_close($conexao);


   

?>