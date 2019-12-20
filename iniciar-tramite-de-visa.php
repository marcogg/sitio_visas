<?php
require('constant.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" user-scalable="no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Tramita tu visa - LA RED Solutions</title>
		<!--Estilos custom-->
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom fonts for this template -->
		<!--<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<!-- Plugin CSS -->
		<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/creative.min.css" rel="stylesheet">
		<!--FAVICON-->
		<link rel="shortcut icon" type="image/png" href="img/us-embassy.png"/>
		<link rel="shortcut icon" type="image/png" href="img/us-embassy.png"/>
		
		<script src="component/jquery/jquery-3.2.1.min.js"></script>
		<script type="text/javascript">
		window._mfq = window._mfq || [];
		(function() {
		var mf = document.createElement("script");
		mf.type = "text/javascript"; mf.async = true;
		mf.src = "//cdn.mouseflow.com/projects/c5f0a2eb-b024-460f-8308-a32df0e14243.js";
		document.getElementsByTagName("head")[0].appendChild(mf);
		})();
		</script>
		<script>
		$(document).ready(function (e){
			$("#frmVisa").on('submit',(function(e){
				e.preventDefault();
				$("#mail-status").hide();
				$('#send-message').hide();
				$('#loader-icon').show();
				$.ajax({
					url: "visa_form.php",
					type: "POST",
					dataType:'json',
					data: {
					"name":$('input[name="name"]').val(),
					"email":$('input[name="email"]').val(),
					"phone":$('input[name="phone"]').val(),
					"content":$('textarea[name="content"]').val(),
					"tipo-visa":$('select[name="tipo-visa"]').val(),
									"g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()},
					success: function(response){
					$("#mail-status").show();
					$('#loader-icon').hide();
					if(response.type == "error") {
						$('#send-message').show();
										$("#mail-status").attr("class","error");
					} else if(response.type == "message"){
						$('#send-message').hide();
													$("#mail-status").attr("class","success");
					}
						$("#mail-status").html(response.text);
					},
					error: function(){}
				});
			}));
		});
		</script>
		<!--FONT-AWESOME-->
		<script src="https://kit.fontawesome.com/7c9178a2fa.js" crossorigin="anonymous"></script>
		<style>
			a{color: white;}
			a:hover{color: #72b4ff; text-decoration: none;}
		.label {margin: 2px 0;}
			.field {margin: 0 0 20px 0;}
			.content {width: 960px;margin: 0 auto;}
			
			div#central {margin: 40px 0px 100px 0px;}
			@media all and (min-width: 768px) and (max-width: 979px) {.content {width: 750px;}}
			@media all and (max-width: 767px) {
				body {margin: 0 auto;word-wrap:break-word}
				.content {width:auto;}
						div#central {	margin: 40px 20px 100px 20px;}
			}
				body {margin: 0 auto;-webkit-font-smoothing: antialiased;  font-size: initial;line-height: 1.7em;}
					input, textarea, select {width:100%;padding: 15px;font-size:1em;border: 1px solid #A1A1A1;	}
			
			#message {  padding: 0px 40px 0px 0px; }
			#mail-status {
				padding: 12px 20px;
				width: 100%;
				display:none;
				font-size: 1em;
				color: rgb(40, 40, 40);
			}
		.error{background-color: #F7902D;  margin-bottom: 40px;}
		.success{background-color: #48e0a4; }
				.g-recaptcha {margin: 0 0 25px 0;}
		</style>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154418485-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-154418485-1', { 'optimize_id': 'GTM-MLWS2H8'});
		</script>
	</head>
	<body id="page-top" style="background-color: lightgrey;">
		<!-- Navigation -->
			<section style="padding: 10%;">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 mb-5">
							<h2 class="text-center">Inicie su trámite para obtener la <strong>visa americana</strong></h2> 
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 mx-auto d-inline text-center">
							
							<img src="img/us-embassy.png" class="img-responsive" width="300">
							<h2 style="font-weight: bold; font-size: 2rem;" class="mt-5">Programa para Tramitar la Visa en Español</h2>
							<p>Rellene el formulario anexo para iniciar el trámite de su visa. Al finalizar oprima el botón <b>"siguiente"</b> para nuevas instrucciones.</p>
						</div>
						<!--<div class="col-lg-6 mx-auto d-inline text-center" id="contact">
							<h1 class="section-heading ">CONTACTO</h1>
							<p style="color: #00387e;">Lic. J. Félix Mireles Reyes<br>Asesoría Profesional<br>Móvil (Whatsapp): (867) 143 64 10 <br> (867) 231 53 09<br>Tel: 867 714 21 02<br><br>Teléfonos Monterrey
								<br>
								<a href="tel:81 2704385">81 27043853</a> y <a href="tel:81 27043856">81 27043856</a>
								<br>Horarios:
								<br>
								Lunes a Viernes de 8:00-18:00hrs.
								<br>
								Sábados:
								<br>
							9:00-15:00hrs.</p>
						</div>-->
						<div class="col-lg-6 padding-container d-inline" style="background-color: white; padding: 5%;">
							<div id="message">
								<form id="frmVisa" action="" method="POST" novalidate="novalidate">
									<div class="label">Nombre:</div>
									<div class="field">
										<input type="text" id="name" name="name" placeholder="Ingrese su nombre completo" title="Please enter your name" class="required" aria-required="true" required>
									</div>
									<div class="label">Email:</div>
									<div class="field">
										<input type="text" id="email" name="email" placeholder="Ingrese su e-mail" title="Please enter your email address" class="required email" aria-required="true" required>
									</div>
									<div class="label">Teléfono:</div>
									<div class="field">
										<input type="text" id="phone" name="phone" placeholder="Ingrese su número de teléfono" title="Please enter your phone number" class="required phone" aria-required="true" required>
									</div>
									<div class="label">Nacionalidad:</div>
									<div class="field">
										<textarea id="comment-content" name="content" placeholder="Escriba su país de origen" rows="1" cols="10"></textarea>
									</div>
									<div class="label">Tipo de Visa:</div>
									<div class="field">
										<select id="tipo-visa" name="tipo-visa">
											<option value="turista">Turista</option>
											<option value="estudiante">Estudiante</option>
											<option value="trabajador">Trabajador Temporal</option>
											<option value="fast">Fast</option>
											<option value="sentri">SENTRI</option>
										</select>
										
									</div>
									<div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>
									<div id="mail-status"></div>
									<button type="Submit" id="send-message" class="btn btn-block btn-danger" style="clear:both;">Siguiente</button>
								</form>
								<div id="loader-icon" style="display:none;"><img src="img/loader.gif" width="64" /></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="d-inline-block text-center col-lg-12">
							<p class="text-white text-center"><small>La Red Solutions no garantiza el otorgamiento de la visa por parte del gobierno de Estados Unidos de América. Nos comprometemos a asesorarlo y guiarlo durante su proceso de visa de turista para la unión americana, sin embargo la conseción de este docuemnto queda totalmente fuera del alcance de la empresa.</small></p>
							<div class="col-lg-12">
								<p><a href="http://www.visa-americana.com.mx">Acerca de nosotros</a></p>
							</div>
							
						</div>
						<div class="d-inline-block">
							<h1 style="display:none;">
							Diseñado por <a href="https://www.dimarcogarcia.com">dimarcogarcia.com</a> y <a href="http://www.creaty.com.mx">creaty</a>
							</h1>
						</div>
					</div>
				</div>
			</footer>
			<!-- Bootstrap core JavaScript -->
			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<!-- Plugin JavaScript -->
			<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
			<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
			<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
			<!-- Custom scripts for this template -->
			<script src="js/creative.min.js"></script>
			<!--SCRIPT DE botones-->
		</body>
	</html>