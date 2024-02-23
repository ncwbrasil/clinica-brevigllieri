<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clinica Breviglieri | Envia Contato</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<script type="text/javascript" src="mod_includes/js/funcoes.js"></script>
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
<div id='janela' class='janela' style='display:none;'> </div>
<?php 
error_reporting(1);
date_default_timezone_set('America/Sao_Paulo');
include('mod_includes/php/funcoes-jquery.php'); 
?>

<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$assunto_email = $_POST['assunto'];
	$mensagem = nl2br($_POST['mensagem']);
	
	$agora = time();
	$data = getdate($agora);
	$dia_semana = $data[wday];
	$dia_mes = $data[mday];
	$mes = $data[mon];
	$ano = $data[year];
	switch ($dia_semana)
	{
		case 0:
			$dia_semana = "Domingo";
		break;
		case 1:
			$dia_semana = "Segunda-feira";
		break;
		case 2:
			$dia_semana = "Terça-feira";
		break;
		case 3:
			$dia_semana = "Quarta-feira";
		break;
		case 4:
			$dia_semana = "Quinta-feira";
		break;
		case 5:
			$dia_semana = "Sexta-feira";
		break;
		case 6:
			$dia_semana = "Sábado";
		break;
	}
	switch ($mes)
	{
		case 1:
			$mes = "Janeiro";
		break;
		case 2:
			$mes = "Fevereiro";
		break;
		case 3:
			$mes = "Março";
		break;
		case 4:
			$mes = "Abril";
		break;
		case 5:
			$mes = "Maio";
		break;
		case 6:
			$mes = "Junho";
		break;
		case 7:
			$mes = "Julho";
		break;
		case 8:
			$mes = "Agosto";
		break;
		case 9:
			$mes = "Setembro";
		break;
		case 10:
			$mes = "Outubro";
		break;
		case 11:
			$mes = "Novembro";
		break;
		case 12:
			$mes = "Dezembro";
		break;
	}
	$datap = $dia_semana.', '.$dia_mes.' de '.$mes.' de '.$ano;


	// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
	require("mod_includes/php/phpmailer/class.phpmailer.php");
	 
	// Inicia a classe PHPMailer
	$mail = new PHPMailer();
	// Define os dados do servidor e tipo de conexão
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->IsSMTP();
	$mail->Host = "mail.clinicabreviglieri.com.br"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
	$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
	$mail->Username = 'autenticacao@clinicabreviglieri.com.br'; // Usuário do servidor SMTP
	$mail->Password = 'infomogi123'; // Senha do servidor SMTP
	
	 
	// Define o remetente
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->From = "$email"; // Seu e-mail
	$mail->Sender = "autenticacao@clinicabreviglieri.com.br"; // Seu e-mail
	$mail->FromName = "$nome"; // Seu nome
	
	 
	// Define os destinatário(s)
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->AddAddress('contato@clinicabreviglieri.com.br');
	$mail->AddCC('servico_breviglieri@yahoo.com.br'); // Copia
	
	// Define os dados técnicos da Mensagem
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
	
	$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
	 
	// Define a mensagem (Texto e Assunto)
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$assunto = 'Clínica Breviglieri - Formulário de Contato';
	$mail->Subject  = '=?utf-8?B?'.base64_encode($assunto).'?='; // Assunto da mensagem
	$mail->Body = "
<head>
	<style type='text/css'>
		.margem 		{ padding-top:20px; padding-bottom:20px; padding-left:20px;padding-right:20px;}
		a:link 			{}
		a:visited 		{}
		a:hover 		{ text-decoration: underline; color:#2C4E67; }
		a:active 		{ text-decoration: none; }
		.texto			{ font-family:'Calibri'; color:#666; font-size:14px; text-align:justify; font-weight:normal;}
		hr				{ border:none; border-top:1px solid #2C4E67;}
		.rodape			{ font-family:Calibri; color:#727272; font-size:12px; text-align:justify; font-weight:normal; }
				
	</style>
</head>
<body>
	<table style='font-family:Calibri;' align='center' border='0' width='100%' cellspacing='0' cellpadding='0'>
	<tr>
		<td align='left'>
			<table class='texto'>
				<tr>
					<td align='right'>
						<b>Nome:</b>
					</td>
					<td align='left'>
						$nome
					</td>
				</tr>
				<tr>
					<td align='right'>
						<b>E-mail:</b>
					</td>
					<td align='left'>
						$email
					</td>
				</tr>
				<tr>
					<td align='right'>
						<b>Telefone:</b>
					</td>
					<td align='left'>
						$telefone
					</td>
				</tr>
				<tr>
					<td align='right'>
						<b>Assunto:</b>
					</td>
					<td align='left'>
						$assunto_email
					</td>
				</tr>
				<tr>
					<td align='right'>
						<b>Mensagem:</b>
					</td>
					<td align='left' valign='top'>
						$mensagem
					</td>
				</tr>
			</table>
			<hr>
			<span class='rodape'>
				<font size='1' color='#2C4E67'><b>Mensagem enviada:</b></font> ".$datap."<br>
				Este é um email gerado automaticamente pelo sistema.<br><br>
				As informações contidas nesta mensagem e nos arquivos anexados são para uso restrito, sendo seu sigilo protegido por lei, não havendo ainda garantia legal quanto à integridade de seu conteúdo. Caso não seja o destinatário, por favor desconsidere essa mensagem. O uso indevido dessas informações será tratado conforme as normas da empresa e a legislação em vigor.
			</font>
		</td>
	</tr>
	</table>
</body>
";
/*$mail->AltBody = 'Este é o corpo da mensagem de teste, em Texto Plano! \r\n 
<IMG src="http://seudomínio.com.br/imagem.jpg" alt=":)"  class="wp-smiley"> ';*/
 
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo
 
// Envia o e-mail
$enviado = $mail->Send();
 
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado
	if ($enviado)
	{
		echo "
			<SCRIPT language='JavaScript'>
				abreMask(
				'<font color=#2193d1><b>$nome</b></font>, sua mensagem foi enviada com sucesso, em breve responderemos.<br><br>'+
				'<input value=\' Ok \' type=\'button\' class=\'but_mask\' onclick=javascript:window.location.href=\'index\';>' );
			</SCRIPT>
		";
	}
	else
	{
		echo "
			<SCRIPT language='JavaScript'>
				abreMask(
				'Erro ao enviar mensagem. <br>$mail->ErrorInfo.<br><br>'+
				'<input value=\' Ok \' type=\'button\' class=\'but_mask\' onclick=window.history.back();>' );
			</SCRIPT>
		";
	}

?>
</body>
</html>
