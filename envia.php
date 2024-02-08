<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $comentario = $_POST['comentario'];

    $para = "lauragois198@gmail.com";
    $assunto = "Comentário portifólio";

    $nome = filter_var($nome, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $telefone = filter_var($telefone, FILTER_SANITIZE_STRING);
    $comentario = filter_var($comentario, FILTER_SANITIZE_STRING);

    $corpo = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nComentário: $comentario";

    $cabeca = "From: teste@teste.com"."\n"."Reply-to: $email"."\n"."X-Mailer: PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("Email enviado com sucesso");
    }else{
        echo("Houve um erro!");
    }
?>
