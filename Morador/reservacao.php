<?php

    include("conexao.php");

    $nome =$_POST['nome'];
    $bloco =$_POST['bloco'];
    $apartamento =$_POST['apartamento'];
    $espaco =$_POST['espaco'];
    $data_escolhida =$_POST['data_escolhida'];
    $hora =$_POST['hora'];
    
    


    $sql=" INSERT INTO reservacao (nome,bloco,apartamento,espaco ,data_escolhida, hora) 
            VALUES ('$nome', '$bloco', '$apartamento', '$espaco','$data_escolhida', '$hora')";


    if(mysqli_query($conexao, $sql)){
        echo header('Location: reservacao_sucesso.php');
    }
    else{
        echo "Erro".mysqli_connect_error();
    }
    mysqli_close($conexao);


   

?>