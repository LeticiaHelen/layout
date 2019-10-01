<?php
require __DIR__."/cabecalho.php";
?>
    <body class="pushable">

        <!-- MENU ROLAGEM -->
        <div class="ui large top fixed menu transition hidden">
            <div class="ui container">
                <a class="active item" href="../views/home.php">Home</a>
                <a class="item">Mercados</a>
<?php
if (!isset($_SESSION['cpf'])) {
    echo '    
                <div class="right menu">
                    <div class="item">
                        <a class="ui" href="usuario_login.php">Logue-se</a>
                    </div>
                    <div class="item">
                        <a class="ui" href="../views/usuario_cadastro.php">Cadastre-se</a>
                    </div>
                </div>
            ';
        }else{
    echo '
    <div class="right menu">
                    <div class="item">
                        <a class="ui" href="../controllers/usuario.php?acao=usuario_deslogar">Deslogar</a>
                    </div>
                    <div class="item">
                        <a class="ui" href="../views/usuario_pagina.php">Minha Página</a>
                    </div>
    </div>
    ';
}
?>
            </div>
        </div> 

        <!-- Page Contents -->
        <div class="pusher">

            <div class="ui inverted vertical masthead center aligned segment bg_primarioIndex ">
                <div class="ui text container letraIndex">
                    <h1 class="ui inverted header">QrList</h1>
                    <h2>Um jeito inovador de fazer suas listas de compras.</h2>
                    <div class="item ">
                        <?php if (!isset($_SESSION['cpf'])) :?>
                        <a class="ui inverted button" href="../views/usuario_login.php">Login</a>
                        <a class="ui inverted button" href="../views/usuario_cadastro.php">Cadastro</a>
                        <?php else: ?>
                         <a class="ui inverted button" href="../controllers/usuario.php?acao=usuario_deslogar">Deslogar</a>
                         <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="ui vertical stripe segment fundoIndex">
                <div class="ui middle aligned stackable grid container espacamento">
                    <div class="row">
                        <div class="eight wide column">
                            <h3 class="ui header cor_secundaria">FAÇA SUAS LISTAS DE COMPRAS ONLINE!</h3>
                            <p>O QrList é um site que possibilita a confecção de suas listas de compras de forma online e inteiramente gratuita!</p>
                            <h3 class="ui header cor_secundaria">COMO FAZER MINHA PRIMEIRA LISTA DE COMPRAS?</h3>
                            <p> Primeiro você escolhe o mercado que deseja fazer suas compras</p>
                            <p> Depois tem acesso aos preços e aos produtos do mercado, e apartir daí é só adicionar os produtos em sua lista!</p>
                            <p> Quando terminar de adicionar todos os produtos desejados, é só clicar em "Finalizar", e prontinho, lista criada! </p>
                        </div>
                        <div class="six wide right floated column">
                            <img src="../../imagens/listaaa.png" class="ui Medium bordered rounded image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui vertical stripe segment fundoIndex">
                <div class="ui middle aligned stackable grid container espacamento">
                    <div class="row">
                        <div class="six wide left floated column">
                            <img src="../../imagens/ligacao.png" class="ui Medium bordered rounded image">
                        </div>
                        <div class="eight wide column">
                            <h3 class="ui header cor_secundaria ">VÁRIAS OPÇÕES</h3>
                            <p>O QrList conta VÁRIAVEL mercados parceiros. Para ver quais estabelecimentos fazem parte desse grupo clique aqui(link).</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="ui vertical stripe segment fundoIndex">
                <div class="ui middle aligned stackable grid container espacamento">
                    <div class="row">
                        <div class="eight wide column">
                            <h3 class="ui header cor_secundaria ">We Help Companies and Companions</h3>
                            <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
                            <h3 class="ui header cor_secundaria">We Make Bananas That Can Dance</h3>
                            <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
                        </div>
                        <div class="six wide right floated column">
                            <img src="../../imagens/carrinho.png" class="ui Medium bordered rounded image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui vertical stripe segment fundoIndex">
                <div class="ui text container">
                    <h3 class="ui header cor_secundaria">Breaking The Grid, Grabs Your Attention</h3>
                    <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
                    <a class="ui large button">Read More</a>
                    <h4 class="ui horizontal header divider">
                        <a href="#" class="cor_tercearia">Case Studies</a>
                    </h4>
                    <h3 class="ui header cor_secundaria">Did We Tell You About Our Bananas?</h3>
                    <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
                    <a class="ui large button">I'm Still Quite Interested</a>
                </div>
            </div>
<?php include "footer.php"  ?>