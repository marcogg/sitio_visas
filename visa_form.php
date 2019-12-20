<?php
if($_POST)
{
require('constant.php');
    
    $user_name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $user_phone     = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $content   = filter_var($_POST["content"], FILTER_SANITIZE_STRING);
    $tipo   = filter_var($_POST["tipo-visa"], FILTER_SANITIZE_STRING);
    
    if(empty($user_name)) {
		$empty[] = "<b>Nombre</b>";		
	}
	if(empty($user_email)) {
		$empty[] = "<b>Email</b>";
	}
	if(empty($user_phone)) {
		$empty[] = "<b>Teléfono</b>";
	}	
	if(empty($content)) {
		$empty[] = "<b>Comentarios</b>";
	}
	
	if(!empty($empty)) {
		$output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Requerido!'));
        die($output);
	}
	
	if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
	    $output = json_encode(array('type'=>'error', 'text' => '<b>'.$user_email.'</b> es un correo inválido, intente con otro'));
		die($output);
	}
	
	//reCAPTCHA validation
	if (isset($_POST['g-recaptcha-response'])) {
		
		require('component/recaptcha/src/autoload.php');		
		
		$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY, new \ReCaptcha\RequestMethod\SocketPost());

		$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

		  if (!$resp->isSuccess()) {
				$output = json_encode(array('type'=>'error', 'text' => '<b>Captcha</b> debe validarse'));
				die($output);				
		  }	
	}
	
	$toEmail = "lared.mh@gmail.com"; //lared.mh@gmail.com
	$mailHeaders = "De: " . $user_name . "<" . $user_email . ">\r\n";
	$mailBody = "Nombre: " . $user_name . "\n";
	$mailBody .= "Email: " . $user_email . "\n";
	$mailBody .= "Tel: " . $user_phone . "\n";
	$mailBody .= "Nacionalidad: " . $content . "\n";
	$mailBody .= "Tipo Visa: " . $tipo . "\n";

	if (mail($toEmail, "Contact Mail", $mailBody, $mailHeaders)) {
	    $output = json_encode(array('type'=>'message', 'text' => '<script>window.location.href="datos-enviados.html"</script>'));
	    die($output);
	} else {
	    $output = json_encode(array('type'=>'error', 'text' => 'Ha ocurrido un error, por favor contáctenos al correo:'.SENDER_EMAIL));
	    die($output);
	}
}
//Backup output
/*$output = json_encode(array('type'=>'message', 'text' => 'Hola '.$user_name .', gracias por contactarnos, en breve un ejecutivo lo atenderá.'));*/
?>