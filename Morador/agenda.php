<?php

    include("conexao.php");

    $nome =$_POST['nome'];
    $bloco =$_POST['bloco'];
    $apartamento =$_POST['apartamento'];
    $tipo_de_mudancas =$_POST['tipo_de_mudancas'];
    $data_escolhida =$_POST['data_escolhida'];
    
    


    $sql=" INSERT INTO agenda (nome,bloco,apartamento, tipo_de_mudancas,data_escolhida) 
            VALUES ('$nome', '$bloco', '$apartamento', '$tipo_de_mudancas','$data_escolhida')";


    if(mysqli_query($conexao, $sql)){
        echo header('Location: home_usuario.php');
    }
    else{
        echo "Erro".mysqli_connect_error();
    }
    mysqli_close($conexao);


   

?>