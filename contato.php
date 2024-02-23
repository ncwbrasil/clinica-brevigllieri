<?
include ('url.php');
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="author" content="MogiComp Soluções Web">
        <meta name="copyright" content="MogiComp Soluções Web">
        <title>Clínica Médica Breviglieri | Contato</title>
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
        <script>
            jQuery(document).ready(function() {
                jQuery("#bt_contato").click(function() {
                    contato = 0;
                    if (jQuery("#nome").val() == '') {
                        contato++;
                        jQuery("#nome").css({
                            "border": "1px solid #F90F00"
                        });
                    } else {
                        jQuery("#nome").css({
                            "border": "1px solid #AAA"
                        });
                    }
                    if (jQuery("#email").val() == '') {
                        contato++;
                        jQuery("#email").css({
                            "border": "1px solid #F90F00"
                        });
                    } else {
                        jQuery("#email").css({
                            "border": "1px solid #AAA"
                        });
                    }
                    if (jQuery("#telefone").val() == '') {
                        contato++;
                        jQuery("#telefone").css({
                            "border": "1px solid #F90F00"
                        });
                    } else {
                        jQuery("#telefone").css({
                            "border": "1px solid #AAA"
                        });
                    }

                    if (jQuery("#assunto").val() == '') {
                        contato++;
                        jQuery("#assunto").css({
                            "border": "1px solid #F90F00"
                        });
                    } else {
                        jQuery("#assunto").css({
                            "border": "1px solid #AAA"
                        });
                    }

                    if (jQuery("#mensagem").val() == '') {
                        contato++;
                        jQuery("#mensagem").css({
                            "border": "1px solid #F90F00"
                        });
                    } else {
                        jQuery("#mensagem").css({
                            "border": "1px solid #AAA"
                        });
                    }
                    if (contato == 0) {
                        jQuery("#form_contato").submit();
                    } else {
                        jQuery("#erro").html("Por favor verifique os campos obrigatórios em vermelho");
                    }
                });
            });

            function abreMask(msg) {
                jQuery('body').append('<div id="mask"></div>');
                jQuery('#mask').fadeIn(300);
                jQuery('#janela').html(msg);
                jQuery("#janela").fadeIn(300);
                jQuery('#janela').css({
                    "display": ""
                });
                jQuery('#janela').css({
                    "height": "90px"
                });
                //jQuery('body').css({'overflow':'hidden'});

                var popMargTopJanela = (jQuery("#janela").height() + 24) / 2;
                var popMargLeftJanela = (jQuery("#janela").width() + 24) / 2;

                jQuery("#janela").css({
                    'margin-top': -popMargTopJanela,
                    'margin-left': -popMargLeftJanela
                });
            }
        </script>
    </head>

    <body>
        <?php include ('mod_lateral/lateral.php');?>
        <div class="wrapper" id="contato">
            <div class="contato">
                <center>
                    <p class="titulo"> Contato</p>
                </center>
                <form name='form_contato' id='form_contato' enctype='multipart/form-data' method='post' action='envia_contato.php'>
                    <input name="nome" id="nome" type="text" placeholder="Nome" />
                    <input name="email" id="email" type="text" placeholder="E-mail" />
                    <input name="telefone" id="telefone" onkeypress='return mascaraTELEFONE(this);' maxlength='15' type="text" placeholder="Telefone" />
                    <input name="assunto" id="assunto" type="text" placeholder="Assunto" />
                    <textarea name="mensagem" id="mensagem" cols="" rows="" placeholder="Mensagem"></textarea>
                    <div id='erro'>&nbsp;</div>
                    <center><input name='bt_contato' id='bt_contato' type="button" value="Enviar" /></center>
                </form>
            </div>
            <div class="telefone">
                <p style="text-align: center; line-height: 15pt;" class="azul">Atenção:<br> Para informações sobre <b>consultas, exames e valores,</b><br> favor entrar em contato através dos telefones:
                </p>
                <p style="text-align: center; line-height: 15pt; text-transform: uppercase;" class="azul"><b>Unidade Mogi das Cruzes</b></p>
                <p class="azul2"><span class="destaque">
					 (11) 4727-6622<span class="azul"> | </span>(11) 7189-6167<br> contato@clinicabreviglieri.com.br
                    </span><br> Rua Manuel de Oliveira, 269 <span class="azul">|</span> Torre 01 <span class="azul">|</span> Salas 306/307 <span class="azul">|</span> Helbor Patteo Mogilar<br> Mogi das Cruzes<span class="azul"> | </span>SP <span class="azul">|</span>                    CEP 08773-130</p>
            </div>
            <div class="telefone">
                <p style="text-align: center; line-height: 15pt; text-transform: uppercase;" class="azul"><b>Atendimentos em São Paulo</b></p>
                <p class="azul2"><span class="destaque">
					(11) 3661-6797
                    </span><br> Rua Dr. Veiga Filho, 350 <span class="azul">|</span> 2º andar <span class="azul">|</span> Higienópolis <span class="azul">|</span> SP
            </div>
        </div>
        <?php include ('mod_rodape/rodape.php')?>
    </body>

    </html>