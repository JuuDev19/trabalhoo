<?php
//Operador ternario
// (condição)?true;false
$peso = ["$_REQUEST_METHOD"] == "POST"
    && !empty($_POST['peso'])) ? $_POST['peso'] : null;

$peso = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST))
$resposta = 0
if($peso && $altura){
    $resposta = $peso / ($altura * $altura);
    }
var_dump($resposta);die;
?>