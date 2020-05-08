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

    <?php
    session_start();
    if(!isset($_SESSION['sessao']) || (isset($_SESSION['sessao']) && empty($_SESSION['sessao']))) {
			header("Location: "."login.php");
            exit;
    }

    ?>
    <div id="titulo">Você está logado no site! </div>
    <div id="mostrado"><?php echo $_SESSION['sessao'] ?></div>
    <div id="sair"><a href="logout.php">Deslogar</a></div>



</body>