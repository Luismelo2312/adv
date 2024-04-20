<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $mensagem = addcslashes($_POST['mensagem']);

    $para = "luisotavioatm@gmail.com";
    $assunto = "contato -  Maroca";

    $corpo = "Nome: ".$nome."\n"."email ".$email"\n"."telefone ".$telefone"\n"."mensagem ".$mensagem;

    $cabeca = "From: luisotavioatm@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-Mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email");
    }
?>