<?php
// Conexao
require_once 'conexao.php';
session_start();
// Botao enviar 
if(isset($_POST['entrar'])):
    $erros = array();
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $apartamento = mysqli_escape_string($conexao, $_POST['apartamento']);

    if(empty($email) or empty($apartamento)):
        $erros[] = "<li> O campo email / senha precisa ser preenchido <li>";
    else:
        $sql ="SELECT email FROM cadastro WHERE email ='$email'";
        $resultado = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado) > 0):
        $sql= "SELECT * FROM cadastro WHERE email='$email' AND apartamento ='$apartamento' ";
        $resultado = mysqli_query($conexao, $sql);

                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    $_SESSION['logado']= true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: home_usuario.php');
               
                else:
                    $erros[] ="<li> Usuario E APARTAMENTO NAO CONFERE </li>";
                endif;

        else:
            $erros[] ="<li> Usuario inexistente </li>";
        endif;

    endif;

endif;



if(!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;
endif;

?>