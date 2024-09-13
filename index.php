<?php
include_once('header.php');
include_once('principal.php');
include_once('footer.php');
?>

<?php
if ($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $pagina = null;
}

include_once("header.php");
    if($paginaIrl === "principal"){
        include_once("principal.php");
    }elseif($paginaUrl ==="contato"){
        include_once("contato.php");
    }elseif($paginaUrl === "login"){
        include_once("login.php");
    }elseif($paginaUrl === "registro"){
        include_once("registro.php");
    }else{
        echo "404 Página não existe!";
    }

include_once("footer.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <div class="container">
        <header class=header>
            <div class="headerBtnGroup">
                <button class="button"><a href="login.php">Login</a><button>
                <button class="button"><a href="reg.php">Registro</a><button>
                <button class="button1"><a href="cont.php">Contato</a><button>
    <div>

    
</body>
</html>
