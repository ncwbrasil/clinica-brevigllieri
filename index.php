<?
include ('url.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="author" content="MogiComp Soluções Web">
<meta name="copyright" content="MogiComp Soluções Web">
<title>Clínica Médica Breviglieri | Home</title>
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
<body class="back-home">
<!-- <div id ='mask'></div>
<div id='janela' class='janela' style='display:none;'>  </div> -->


<?php include ('mod_lateral/lateral.php')?>

<div class="wrapper">
	<?php include('banner.php')?>
</div>
<?php include ('mod_rodape/rodape.php')?>
</body>
</html>

<script type="text/javascript">	
	// $(document).ready(function()
	// {
	// 	setTimeout(function abreMaskPop (){
	// 		$('#mask').fadeIn(300);
	// 		$('#janela').html("<div id='close_janela' onclick='fechaMask()'> X</div><img src='imagens/popup.png' border='0' class='imagem-popup' alt='Popup'>");
	// 		$("#janela").fadeIn(300);
	// 		$('#janela').css({"display":""});
			
	// 		var popMargTopJanela = ($("#janela").height() + 24) / 2; 
	// 		var popMargLeftJanela = ($("#janela").width() + 24) / 2; 
			
	// 		$("#janela").css({ 
	// 			'margin-top' : -popMargTopJanela,
	// 			'margin-left' : -popMargLeftJanela
	// 		});		

	// 	},500, this); 

	// 	abreMaskPop();
	// });

	// function fechaMask(){
	// 	$('#mask , .janela').fadeOut(100 , function() {
	// 		$('.janela').fadeOut(100 , function() {
	// 			$('.janela').self.close();  
	// 			$('body').css({'overflow':'visible'});
	// 		});
	// 	}); 
	// 	return true;
	// }
</script>