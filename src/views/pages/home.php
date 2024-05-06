<?php $render('header'); ?>

<form method="GET" hidden>
    <input type="text">
    <select>
        <option>Bacharelado</option>
        <option>Licenciatura</option>
        <option>Tecnológico</option>
    </select>
</form>


<section class="bannerHome">
    <div class="container">
        <div class="styleContainer">
            <div class="leftContainer">
                <div class="styleLeftContainer">
                    <div class="slc">
                        <div class="textLeft01">
                            <div>
                                <h4>Decida hoje seu futuro!</h4>
                            </div>
                        </div>
                        <div class="textLeft02">
                            <div>
                                <h2>Graduação</h2>
                            </div>
                        </div>
                        <div class="textLeft03">
                            <div>
                                <h3>A partir de R$ 59* na 1ª mensalidade</h3>
                            </div>
                        </div>
                    </div>
                    <div class="leftInfo">
                        <p>Para mais informações consulte condições em: unopar.com.br/resultados-e-regulamentos</p>
                    </div>
                    <div class="leftButtonOrg">
                        <div class="leftButton">
                            <a href="">Inscreva-se já</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rightContainer">
                <div class="rightContainerImg">
                    <img src="<?= $base ?>/assets/images/MENINA_CAPA_usar_essa_aqui_8693263bbc.png">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="containerCursos">
    <h2 class="titulo">Os mais populares</h2>
    <div class="carrosselWidth">
        <div class="moveCarrossel slider">
            <div class="carrosselOverflow slides">
                <?php foreach ($dados as $res) : ?>
                    <div class="carrosselItems">
                        <div class="car" id="<?php echo $res['id']; ?>">
                            <p class="content__title">
                                <?php echo $res['nome_curso']; ?>
                            </p>
                            <p class="content__type-and-time">
                                <?php echo $res['duracao']; ?>
                            </p>
                            <div class="content--infos">
                                <div class="" style="min-height: 78px;">
                                    <ul class="content__modality-ul">
                                        <li class="content__modality_item activeMod" id="<?php echo $res['id']; ?>">
                                            <?php echo $res['modalidade']; ?>
                                        </li>
                                        <li class="content__modality_item inativo" data="<?php echo $res['id']; ?>" id="<?php echo $res['id_modalidade02']; ?>">
                                            <?php echo $res['modalidade02']; ?>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <div class="content--details">
                                        <p class="content__price">
                                            <?php echo $res['preco']; ?>
                                        </p>
                                        <p class="content__shift">
                                            <span>Turnos:</span>
                                            <?php echo $res['turno']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="content--actions">
                                <a href="https://www.unopar.com.br/inscricao/curso?brand=unopar&campaign=29&channel=81&style=wrapped" target="_blank" class="btn btn-primary-hcontrast outlined rounded" tabindex="0">Inscreva-se</a>
                                <a href="/curso/enfermagem" target="_blank" class="content__btn-saiba-mais btn sm btn-color-bluegray outlined rounded" tabindex="0">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="buttons">
    <div class="orgButtons">
        <span id="buttonLeft" onclick="goPrev() "></span>
        <span id="buttonRight" onclick="goNext() ">

        </span>
    </div>
</div>

<div class="comoIngressar">
    <div class="ingresso">
        <div class="ingressoOrg">
            <div class="ingressoLeft">
                <img src="<?= $base; ?>/assets/images/left.jpg" alt="alunos">
            </div>
            <div class="ingressoRight">
                <h1>ESCOLHA COMO INGRESSAR</h1>
                <div class="container-fluid py-3">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="title semibold dotted-underline mb-h mt-1">
                                VESTIBULAR ONLINE
                            </div>
                            <div class="font-weight-400">
                                Faça o Vestibular Anhanguera
                            </div>
                            A redação é feita pela internet e você
                            pode escolher a hora e o local que
                            preferir para fazer.
                            <div>
                                <button onclick="openWidget(); fireGA('anhanguera:home:como-ingressar','clique:cta','inscreva-se:vestibular')" class="btn btn-primary-hcontrast onlytext sm">
                                    Inscreva-se
                                </button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="title semibold dotted-underline mb-h mt-1" href="https://www.anhanguera.com/institucional/enem/">
                                ENEM
                            </div>
                            <div class="font-weight-400">
                                Fez Enem e quer usar sua nota?
                            </div>
                            Com a gente o seu desempenho é a sua
                            porta de entrada.
                            <div>
                                <a role="button" onclick="fireGA('anhanguera:home:como-ingressar','clique:cta','saiba-mais:enem')" href="https://www.anhanguera.com/institucional/enem/" class="btn btn-color-bluegray onlytext sm">Saiba mais</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="title semibold dotted-underline mb-h mt-1">
                                2ª GRADUAÇÃO
                            </div>
                            <div class="font-weight-400">
                                Já é formado e quer fazer outra
                                graduação?
                            </div>
                            Aproveite seus conhecimentos e venha
                            estudar na Anhanguera.
                            <div>
                                <a role="button" onclick="fireGA('anhanguera:home:como-ingressar','clique:cta','saiba-mais:segunda-graduacao')" href="https://www.anhanguera.com/paginas/segunda-graduacao/" class="btn btn-color-bluegray onlytext sm">Saiba mais</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="title semibold dotted-underline mb-h mt-1">
                                TRANSFERÊNCIA
                            </div>
                            <div class="font-weight-400">
                                Vem concluir seu curso com a gente
                            </div>
                            E não precisa pagar nada pela
                            transferência.
                            <div>
                                <a role="button" onclick="fireGA('anhanguera:home:como-ingressar','clique:cta','saiba-mais:transferencia')" href="https://www.anhanguera.com/transferencia-externa/" class="btn btn-color-bluegray onlytext sm">Saiba mais</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="title semibold dotted-underline mb-h mt-1">
                                Ex - Aluno
                            </div>
                            <div class="font-weight-400">
                                Sentimos sua falta e queremos você
                                de volta.
                            </div>
                            Temos certeza de que sempre é tempo para
                            recomeçar.
                            <div>
                                <a role="button" onclick="fireGA('anhanguera:home:como-ingressar','clique:cta','saiba-mais:ex-aluno')" href="https://www.anhanguera.com/exaluno/" class="btn btn-color-bluegray onlytext sm">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="" class="buttonWhats">
    <i class="fa-brands fa-whatsapp"></i>
</a>

<?php $render('footer'); ?>

<script src="<?= $base ?>/assets/js/scriptHeader.js"></script>
<script src="<?= $base ?>/assets/js/script.js"></script>
