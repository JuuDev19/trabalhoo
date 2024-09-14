<?php 
function criarLista(){
    $listaNotícia[0] = array(
        "titulo" => "DEAR JOHN",
        "descricao" => "Quando John Tyree conhece Savannah Lynn Curtis, descobre estar pronto para recomeçar sua vida. Com um futuro sem grandes perspectivas, ele, um jovem rebelde, decide alistar-se no exército, após concluir o ensino médio. Durante sua licença, conhece a garota de seus sonhos, Savannah.",
        "imagem" => "./imagens/pdf1/dear.jpg",
        "href" => "https://localhost/InfoEbooks/?pagina=dear"
    );
}
?>




















<?php
/**
 * TimeZone
 * Retorna o fuso horario local
 * que definira a hora e a data
 */
function timeZone(){
    date_default_timezone_set("America/Recife");
}
/**
 * DataAtual
 * Retorna a data atualizada
 */
function dataAtual(){
    return date("d/m/Y"); 
}
/**
 * horaAtual
 * Retorna a hora atualizada
 */
function horaAtual(){
    return date("h:i:sa");
}

/**
 * @param $texto
 * É o texto que será manupulado
 * Retorna Texto maiúsculo
 */
function textoMaiusculo($texto){
    if($texto){
        return strtoupper($texto);
    }
}
/**
 * @param $texto
 * É o texto que será manupulado
 * @param  $tipo
 * É o Número que indica o tipo de 
 * manipulação da string
 * Tipos:
 * 1 - Quantidade de caracters de um texto
 * 2 - Quantidade de palavras de um texto
 * 3 - Busca Posição da palavra na string
 */
function contar($texto, $tipo){
    if($texto && $tipo === 1){
        return strlen($texto);
    }
    if($texto && $tipo === 2){
        return str_word_count($texto);
    }
    if($texto && $tipo === 3){
        return strpos($texto, "Diogo");
    }
    return false;
}

/**
 * ReduzirStr
 * Reduzir o tamanho de um texto
 * @param $str que representa o texto a ser reduzido
 * @param $quantidade que reprenta quantos caracters vão ser exibidos
 */
function reduzirStr($str,$quantidade){
    $tamanho = strlen($str);
    if($str && $tamanho >= $quantidade){
      return substr($str,0,$quantidade)." [...]";
    }
  }
?>