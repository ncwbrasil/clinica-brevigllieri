<?
include ('url.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="author" content="MogiComp Soluções Web">
<meta name="copyright" content="MogiComp Soluções Web">
<title>Clínica Médica Breviglieri | Convênios</title>
<meta name="copyright" content="MogiComp Soluções Web">

<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/fonte/fonte.css">
<script type="text/javascript" src="mod_includes/js/jquery-1.8.3.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114287374-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114287374-9');
</script>

</head>
<body>
<?php include ('mod_lateral/lateral.php')?>
<div class="wrapper" id="convenios">
    <p class="titulo">Atendemos os convênios</p>
	<div class="convenios">
    	<?php 
			for($foto = 1; $foto <= 19; $foto++)
			{
			echo"
				<div class='bloco'>
					<img src='imagens/convenios/$foto.png'>
				</div>
			";
			
			}
		?>
	</div>
</div>
<?php include ('mod_rodape/rodape.php')?>
</body>
</html>