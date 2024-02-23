<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/fonts/font.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/slimmenu/slimmenu.css">
    <link rel="stylesheet" type="text/css" href="css/slimmenu/reset.css">
    <style>
        a, a:active { text-decoration: none }
		
    </style>
    <script src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
<div id="menu">
    <ul class="slimmenu">
        <li><a href="index.php">Home</a></li>
        <li><a href="quem_somos.php">Quem Somos </a></li>
        <li><a href="area_atuacao.php">Área de Atuação</a></li>
        <li><a href="corpo_clinico.php">Corpo Clínico</a></li>
        <li><a href="convenios.php">Convênios</a></li>
        <li><a href="contato.php" >Contato</a></li>
    </ul>
</div>
<script src="mod_includes/js/slimmenu/jquery.slimmenu.min.js"></script>
<script src="mod_includes/js/jquery.easing.min.js"></script>
<script>
jQuery('ul.slimmenu').slimmenu(
{
    resizeWidth: '1200',
    collapserTitle: ' ',
    easingEffect:'easeInOutQuint',
    animSpeed:'medium',
    indentChildren: true,
    childrenIndenter: ''
});
</script>
<script type="text/javascript">// <![CDATA[
	$(document).ready(function() {
		$(function() {
			$('a').bind('click',function(event){
				var $anchor = $(this);
	
			$('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 500,'linear');
				
		// Outras Animações
		// linear, swing, jswing, easeInQuad, easeInCubic, easeInQuart, easeInQuint, easeInSine, easeInExpo, easeInCirc, easeInElastic, easeInBack, easeInBounce, easeOutQuad, easeOutCubic, easeOutQuart, easeOutQuint, easeOutSine, easeOutExpo, easeOutCirc, easeOutElastic, easeOutBack, easeOutBounce, easeInOutQuad, easeInOutCubic, easeInOutQuart, easeInOutQuint, easeInOutSine, easeInOutExpo, easeInOutCirc, easeInOutElastic, easeInOutBack, easeInOutBounce
			});
		});
	});
	// ]]>
</script>
</body>
</html>