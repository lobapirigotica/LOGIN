<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="screen" />
    <title>sistem de login</title>
</head>
<body>

</body>
<?php
    $mensagem='';
    if (!empty($_POST)){
        $email=addslashes($_POST['email']);
        $senha=addslashes($_POST['senha']);
        $senha2=addslashes($_POST['senha2']);

        $dados = fopen("dados.txt", "a");
        if($senha==$senha2){
            fwrite($dados, $email.md5($senha).';');
            header("Location: "."login.php");
        }
        else{
            echo 'Senhas não conferem!';
        }

    }

    
    

    ?>
     <div id="formulario">
        <form  method="post">
            <div id="criar_conta">Crie sua conta:</div>
            <div id="barra_email_cadastro_externo">
                <input id="barra_email_cadastro" name="email" type="email" placeholder="E-mail">
            </div>
            <div id="barra_senha_cadastro_externo">
                <input id="barra_senha_cadastro" name="senha" type="password" placeholder="Senha">
            </div>
            <div id="barra_senha2_cadastro_externo">
                <input id="barra_senha2_cadastro" name="senha2" type="password" placeholder="Confirme a senha">
            </div> 
            <div id="barra_enviar_cadastro_externo">    
                <input id="barra_enviar_cadastro" name="submit" type="submit">
            </div>    
        </form>
        

    </div>
    
    </div>
