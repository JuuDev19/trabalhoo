<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
</body>
</html>


<?php
$titulo = "BEM VINDO AO E-BOOK!";
$subtitulo = "Aqui é onde voce encontra todos os mais novos e modernos livros do seu seu genero preferido.";
?>
    <br>

<section class = "CaixaMaior">
    <div class="CaixaMenor">
            <a class= "link" href="./pdf/dear"> 
                <div class="conteudo">
                <img class="img" src="./imagens/pdf1/dear.jpg" width="320px" height="180px"></img> 
                <br>
                <p class="titulo">DEAR JOHN</p>
                <br>
                <p class="descricao">Quando John Tyree conhece Savannah Lynn Curtis, descobre estar pronto para recomeçar sua vida. Com um futuro sem grandes perspectivas, ele, um jovem rebelde, decide alistar-se no exército, após concluir o ensino médio. Durante sua licença, conhece a garota de seus sonhos, Savannah.</p>
                <br>
                </div>
                
            </a>
        

        <a class= "link" href="./pdf2/estrelas.jp">
            <div class="conteudo">;
            <img class="img" src="./imagens/pdf2/comoeu.jpg" width="320px" height="180px"></img>;
            <br>
            <p class="titulo">COMO EU ERA ANTES DE VOCE</p>;
            <br>
            <p>Will Traynor, de 35 anos, é inteligente, rico e mal-humorado. Preso a uma cadeira de rodas depois de um acidente de moto, o antes ativo e esportivo Will desconta toda a sua amargura em quem estiver por perto e planeja dar um fim ao seu sofrimento. O que Will não sabe é que Lou está prestes a trazer cor a sua vida.</p>;
            <br>
            </div>


               
            </a>
            <a class="link" href="./pdf1/a-culpa-c3a9-das-estrelas-john-green.pdf">
                <div class="conteudo">
                <img class="img" src="./imagens/pdf6/estreasz\.jpg" width="320px" height="180px"></img>
                <p class="titulo ">A CULPA É DAS ESTRELAS</p>
                <br>
                <p> Diagnosticada com câncer, a adolescente Hazel Grace Lancaster (Shailene Woodley) se mantém viva graças a uma droga experimental. Após passar anos lutando com a doença, ela é forçada pelos pais a participar de um grupo de apoio cristão. Lá, conhece Augustus Waters (Ansel Elgort), um rapaz que também sofre com câncer.</p>
                <br>
                </div>
                
            </a>
            <a class="link" href="./pdf3/orgulho-e-preconceito-jane-austen.pdf">
                <div class="conteudo">
                    <img class="img" src="./imagens/pdf3/orgulho.jpg" width="320px" height="180px"></img>
                    <p class="titulo"> ORGULHO E PRECONCEITO</p>
                    <br>
                    <p> A história de Orgulho e Preconceito gira em torno das cinco irmãs Bennet, que viviam na área rural do interior da Inglaterra, no século XVIII. Aborda a questão da sucessão em uma família sem herdeiros homens, dentro de uma sociedade patriarcal, onde o casamento era fundamental para as mulheres.</p>
                    <br>
                </div>
               
            </a>
            <a class="link" href="./pdf4/Tartarugas ate la embaixo - John Green.pdf">
                <div class="conteudo">
                <img class="img" src="./imagens/pdf4/tartarugas.jpg" width="320px" height="180px"></img>
                <p class="titulo">TARTARUGAS ATÉ LÁ EMBAIXO</p>
                <br>
                <p> Aza Holmes luta para ser uma boa filha, amiga e aluna, mas se vê constantemente dominada por pensamentos obsessivos que fogem ao seu controle. O reencontro com Davis, seu amor da infância, traz à tona fundamentalidades sobre o amor, a felicidade e esperança.</p>
                <br>
                </div>
            <a class="link" href="./pdf5/John Green - Quem é Você Alasca.pdf">
                <div class="conteudo">
                    <img class="img" src="./imagens/pdf5/alasca.jpg" with="320px" height="180px"><img>
                    <p class="titulo"> QUEM É VOCE,ALASCA ? </p>
                    <br>
                    <p> Miles Halter leva uma vida sem graça e sem muitas emoções na Flórida. O garoto tem um gosto peculiar: memorizar as últimas palavras de grandes personalidades da história, e uma dessas personalidades, François Rabelais, um escritor do século XV, disse no leito de morte que ia em “busca de um Grande Talvez.</p>
                    <br>
                </div>

            </a>
                
            </a>
        </div>
        <aside class="sidebar">
            <div class ="sidebarContent">
                <div class="IMC">
                <form method="POST" oction="#">
                    <p>ÍNDICE DE MASSA CORPORAL (IMC)</P>
                    <br>
                    <label for="#peso">Peso (KG)</label>
                    <p>
                    <input id="peso" name="peso" type="text"
                    placeholder="Digite seu peso..">
                    <label for="#altura">Altura (M)</label
                    placeholder="Digite a altura..">
                    <input id="altura" name="altura" type="text"
                    placeholder="Digite a altura..">
                    <button type="submit">
                    <button class="BtnCalcular">Calcular</button>
                </form>
                Resultado: <?= $resposta;?>
                </div>
            </div>
        </aside>
</section>
