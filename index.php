<?php
$peso = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['peso'])) ? $_POST['peso'] : null;

$altura = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['altura'])) ? $_POST['altura'] : null;

 $resposta = 0;
 

 //*include_once("configuracao.php");
 //*include_once("funcoes.php");
 //*$resposta = calcularImc($peso, $altura);
 
 //*timeZone();
///$data = dataAtual();
//$titulo = "BEM VINDO AO E-BOOK!";
//$subtitulo = "Aqui é onde voce encontra todos os mais novos e modernos livros do seu seu genero preferido. <br>".$data;
var_dump($resposta); 

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
?>