<?php
    $para = "spinoffclass@gmail.com";
    $assunto = "Cadastro";

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $escola = $_REQUEST['escola'];

    $message = "<strong>Nome: </strong> $nome";
    $message.= "<br/><br/><strong>Email: </strong> $email";
    $message.= "<br/><br/><strong>Escola: </strong> $escola";

    $headers = "Content-Type: text/html; charset= utf-8\n";
    $headers .= "From: $nome\n";

    if(mail ( $para ,  $assunto ,  $message ,  $headers )){
        echo "<script>alert('Mensagem enviada com sucesso! Agradecemos pelo contato.'); window.location= 'index.php'; </script>";
    }
    else{
        echo "<script>alert('Erro! Mensagem não enviada.'); window.location= 'index.php'; </script>";
    }
?>
