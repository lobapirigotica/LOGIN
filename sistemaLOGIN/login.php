<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="screen" />
    <title>login</title>
</head>
<body>

    <?php
    session_start();
    $mensagem='';
    if (!empty($_POST)){
        $email=addslashes($_POST['email']);
        $senha=addslashes($_POST['senha']);

        $dados = file_get_contents("dados.txt");
        
        if($dados){
            $dados_separados = explode(";", $dados);
            foreach($dados_separados as $key => $value)
            if($value==$email.md5($senha)){
           
                $_SESSION['sessao'] = $email;
               
                header("Location: "."index.php");
            }
        }
        $mensagem='Usuário não encontrado!';

    }


    

    ?>
    <div id="formulario">
        <form  method="post">
            <div id="titulo_formulario">Fazer login</div>
            <div id="barra_nome">
                <input id="barra_email" name="email" type="email" placeholder="E-mail">
            </div>
            <div id="barra_senha_externa">
                <input id="barra_senha" name="senha" type="password" placeholder="Senha">
            </div>
            <div id="barra_enviar_externo">        
                <input id="barra_enviar" name="submit" type="submit">
            </div>
                
        </form>
        <div id="nao_cadastrado "><a href="cadastro.php"><br>Criar conta</a></div>

    </div>
    <div id="mensagem1">
        <?php
        if (!empty($mensagem))
        echo $mensagem;
        ?>
    </div>
    

</body>
