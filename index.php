<?php
if ($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $pagina = null;
}

include_once("header.php");

if($paginaUrl === "principal"){
    include_once("principal.php");
}elseif($paginaUrl ==="contato"){
    include_once("contato.php");
}elseif($paginaUrl === "login"){
    include_once("login.php");
}elseif($paginaUrl === "registro"){
    include_once("reg.php");
}else{
    echo "404 Página não existe!";
}

include_once("footer.php");
var_dump('to aqui');die;