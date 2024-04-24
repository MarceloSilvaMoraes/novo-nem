<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/imagens/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?=$base?>/assets/css/style.css">
</head>

<body>

    <header class="header">
        <div class="main">
            <div class="main-top">
                <div class="mLeft">
                    <nav>Grupo Nem</nav>
                </div>
                <div class="mr">
                    <nav class="mRight menuAtivo">
                        <ul>
                            <li><a href=""> Me Liga</a></li>
                        </ul>
                        <ul>
                            <li><a href=""> Whatsapp</a></li>
                        </ul>
                        <ul>
                            <li><a href=""> Volte a estudar</a></li>
                        </ul>
                        <ul>
                            <li><a href=""> Sou Professor</a></li>
                        </ul>
                        <ul>
                            <li><a href=""> Sou Aluno</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="main-bottom">
                <div class="menuMobile" onclick="abrirMenu()">
                    <nav class="navbar" id="navbar">
                        <div id="navBurguer">
                            <div class="burguer">
                            </div>
                        </div>
                    </nav>
                    <div class="imgResp">
                        <a href="">
                            <img src="<?= $base ?>/assets/images/logo.png" width="85">
                        </a>
                    </div>
                </div>
                <a href="">
                    <img src="<?= $base ?>/assets/images/logo.png">
                </a>
                <nav class="mBottom menuAtivo">
                    <ul>
                        <li><a href="">O Grupo Nem</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Como Ingressar</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Cursos</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Unidades</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Fale Conosco</a></li>
                    </ul>
                </nav>
                <div class="btnInscrevase">
                    <a href="">
                        <span>
                            INSCREVA-SE
                        </span>
                    </a>
                </div>


            </div>
        </div>

    </header>


    <script src="<?=$base?>/assets/js/script.js"></script>