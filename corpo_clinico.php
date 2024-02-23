<?
include('url.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="author" content="MogiComp Soluções Web">
    <meta name="copyright" content="MogiComp Soluções Web">
    <title>Clínica Médica Breviglieri | Corpo Clínico</title>
    <meta name="copyright" content="MogiComp Soluções Web">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/fonte/fonte.css">
    <script type="text/javascript" src="mod_includes/js/jquery-1.8.3.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114287374-9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-114287374-9');
    </script>

</head>

<body>
    <?php include('mod_lateral/lateral.php') ?>
    <div class="wrapper" id="convenios">
        <p class="titulo">Corpo Clínico </p>
        <div class="corpo_clinico">
            <div id="corpo_clinico">
                <div class="corpo_clinico_img"><img src="imagens/renato.jpg"></div>
                <div>
                    <p><b>Dr. Renato Breviglieri Filho<br>
                            CRM: 32871</b> </p>
                    <p>Médico Pneumologista</p>
                </div>
            </div>

            <div id="corpo_clinico">
                <div class="corpo_clinico_img"><img src="imagens/luiz.jpg"></div>
                <div>
                    <p><b>Dr. Luiz Renato Cardinalli Breviglieri<br>
                            CRM: 120720</b> </p>
                    <p>Médico Pneumologista</p>
                </div>
            </div>
            <div id="corpo_clinico">
                <div class="corpo_clinico_img"><img src="imagens/ana.jpg"></div>
                <div>
                    <p><b>Dra. Ana Cristina Cardinalli Choairy<br>
                            CRM: 104967 SP</b> </p>
                    <p>Médica Hematologia Geral e Onco-Hematologia
                    </p>
                </div>
            </div>
            <div id="corpo_clinico">
                <div class="corpo_clinico_img">
                    <img src="imagens/victor.jpg">
                </div>
                <div>
                    <p><b>Dr. Victor Hugo Martins<br>
                            CRM: 187017 </b> </p>
                    <p>Médico Pneumologista</p>
                </div>
            </div>
            <div id="corpo_clinico">
                <div class="corpo_clinico_img"><img src="imagens/felipe.jpg"></div>
                <div>
                    <p><b>Dr. Felipe Sonnewend Proença<br>
                            CRM: 162.954</b> </p>
                    <p>Médico Endocrinologista e Metabologista
                    </p>
                </div>
            </div>
            <div id="corpo_clinico">
                <div class="corpo_clinico_img"><img src="imagens/mariana.jpg"></div>
                <div>
                    <p><b>Dra. Mariana Viveiros<br>
                            CRM: 177678</b> </p>
                    <p>Médica Pneumologista Pediátrica
                    </p>
                </div>
            </div>

        </div>
    </div>
    <?php include('mod_rodape/rodape.php') ?>
</body>

</html>