<?php

    $nome = addslashes($_POST['$nome']);
    $email = addslashes($_POST['$email']);
    $telefone = addslashes($_POST['$telefone']);
    $comentario = addslashes($_POST['$comentario']);

    $para = "lauragois198@gmail.com";
    $assunto = "Comentário portifólio";


    $corpo = "Nome: ".$nome."\nEmail: ".$email."\nTelefone: ".$telefone."\nComentário: ".$comentario;

    $cabeca = "From: teste@teste.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("Email enviado com sucesso");
    }else{
        echo("Houve um erro!");
    }

?>