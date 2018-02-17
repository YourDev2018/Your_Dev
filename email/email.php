<?php
$Nome		= $_POST["Nome"];	// Pega o valor do campo Nome
$Fone		= $_POST["Telefone"];	// Pega o valor do campo Telefone
$Email		= $_POST["Email"];	// Pega o valor do campo Email
$Mensagem	= $_POST["Ideia"];	// Pega os valores do campo Mensagem

// Variável que junta os valores acima e monta o corpo do email

$Vai 		= "Nome: $Nome\n\nE-mail: $Email\n\nTelefone: $Fone\n\nIdeia \ Requisito do projeto: $Mensagem\n";

require_once("class.phpmailer.php");

define('GUSER', 'yourdev.orcamentos@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', 'yourdev2018');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) {
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'tls';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo;
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}

 if (smtpmailer('contato@yourdev.com.br', 'yourdev.orcamentos@gmail.com', 'Your_Dev - Orcamentos, pedidos e contatos', 'Contato via landing page', $Vai)) {

	Header("location:http://www.yourdev.com.br"); // Redireciona para uma página de obrigado.

}
if (!empty($error)) echo $error;
?>
