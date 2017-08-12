<?php
    $para = "spinoffclass@gmail.com";
    $cabecalho = "Contato pelo site";

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $assunto = $_REQUEST['assunto'];
    $mensagem = str_replace("\n","<br/>",$_REQUEST['mensagem']);

    $message = "<strong>Nome: </strong> $nome";
    $message.= "<br/><br/><strong>Email: </strong> $email";
    $message.= "<br/><br/><strong>Assunto: </strong> $assunto";
    $message.= "<br/><br/><strong>Mensagem: </strong> $mensagem";

    $headers = "Content-Type: text/html; charset= utf-8\n";
    $headers .= "From: $nome\n";

    if(mail ( $para ,  $cabecalho ,  $message ,  $headers )){
        echo "<script>alert('Mensagem enviada com sucesso! Agradecemos pelo contato.'); window.location= 'index.php'; </script>";
    }
    else{
        echo "<script>alert('Erro! Mensagem não enviada.'); window.location= 'index.php'; </script>";
    }
?>
