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
		<title>LA RED-Solutions - Matehuala</title>
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
		<link rel="shortcut icon" type="image/png" href="img/favicon.jpg"/>
		<link rel="shortcut icon" type="image/png" href="img/favicon.jpg"/>
		
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
			$("#frmContact").on('submit',(function(e){
				e.preventDefault();
				$("#mail-status").hide();
				$('#send-message').hide();
				$('#loader-icon').show();
				$.ajax({
					url: "contact_form.php",
					type: "POST",
					dataType:'json',
					data: {
					"name":$('input[name="name"]').val(),
					"email":$('input[name="email"]').val(),
					"phone":$('input[name="phone"]').val(),
					"content":$('textarea[name="content"]').val(),
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
					input, textarea {width:100%;padding: 15px;font-size:1em;border: 1px solid #A1A1A1;	}
			
			#message {  padding: 0px 40px 0px 0px; }
			#mail-status {
				padding: 12px 20px;
				width: 100%;
				display:none;
				font-size: 1em;
				font-family: "Georgia", Times, serif;
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
	<body id="page-top">
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
			
			<div class="container">
				<div class="col-lg-4">
					<span class="nav-item">
						<p style="font-weight: bold !important;" class="text-center text-white"><strong>
							<i class="fab fa-whatsapp" style=""></i>
							<a class="text-white" href="https://wa.me/528671436410">(867) 143 64 10</a> / <i class="fa fa-phone" style=""></i><a class="text-white" href="tel:4881297652"> 488 129 7652</a>
							</strong>
						</p>
					</span>
				</div>
				<div class="row col-lg-8">
					
					<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo.png" width="120"></a>
					
					<button class="navbar-toggler navbar-toggler-right float-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#about">Nosotros</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#portfolio">Ubicación</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<header class="masthead text-center text-white d-flex parallax">
			<div class="container my-auto">
				<div class="row">
					<div class="col-lg-12 heading-padding" style="padding-right: 25%; padding-left: 25%;">
						<div style="background-color:rgba(17, 35, 85, 0.7);background-blend-mode: multiply; ">
							<h1 class="section-heading text-center" style="font-size: 2em;  padding: 2%; color: white;">VIVE EL SUEÑO AMERICANO</h1>
						</div>
						<div style="background-color:rgba(237, 28, 36, 0.5);background-blend-mode: multiply; padding: 1%;">
							<h3 style="color:white; font-size:1.5em;">Nosotros tramitamos tu visa</h3>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="bg-primary parallax" id="about" style="background-image: url(img/nosotros.jpg); max-width:100%; background-position: center;">
			<div class="container">
				<div class="row">
					<div class="col-lg-6" style="float: right !important;" >
						<div class="col-lg-12">
							<div>
								<h1 class="section-heading text-center" style="font-size: 2.5em; background-color:red; padding: 2%; color: white;">NOSOTROS</h1>
							</div>
							<div class="white-background">
								<p class="blue">Somos la mejor opción en Prestación de Servicios para trámites de Visas Laser, Pasaportes y demás con la mejor atención y lo mejor de todo con completa honestidad.</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!--PRODUCTOS-->
		<div class="bg-dark text-white propiedades" id="services">
			<div class="container text-center">
				<h2 class="mb-4">Servicios</h2>
			</div>
		</div>
		<section class="p-0">
			<div class="container-fluid p-0" style="padding: 10%; margin-top: 5%;">
				<div class="row">
					<div class="col-lg-3 text-center">
						<h3 id="visas" class="pointer visas-activo">VISAS</h3>
					</div>
					<div class="col-lg-3 text-center">
						<h3 id="pasaportes" class="pointer">PASAPORTES</h3>
					</div>
					<div class="col-lg-3 text-center">
						<h3 id="sentri" class="pointer">SENTRI</h3>
					</div>
					<div class="col-lg-3 text-center">
						<h3 id="fast" class="pointer">FAST</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9 outline-blue" style="display: flex; flex-wrap: wrap; clear: both;">
						<div id="img-servicios" class="col-lg-5">
							<img id="visa-img" src="img/visa.jpg" width="250" style="margin:auto; position:relative;">
						</div>
						<div class="col-lg-7" style="color:#00387e">
							<p id="text">Estados Unidos, México y Canadá participan en el programa electrónico FAST para acelerar el tráfico comercial seguro a través de sus fronteras, coordinando principios para el manejo de riesgos comunes, seguridad de la cadena de abastecimiento, asociaciones industriales y tecnología avanzada para inspeccionar y autorizar embarques comerciales.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
						<img src="img/banner1.jpg" class="img-fluid">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
						<img src="img/banner2.jpg" class="img-fluid">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
						<img src="img/banner3.jpg" class="img-fluid">
					</div>
				</div>
			</div>
		</section>
		<!--UBICACION-->
		<section class="p-0" id="portfolio">
			<div class="container-fluid" style="background-image: url('img/ubicacion.jpg');min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat;background-size: cover;">
				<div class="row">
					<div class="col-lg-12 text-center padding-showroom" style="padding:20%;">
						<div class="white-ubicacion">
							<h1 style="color: #00387e;">UBICACIÓN</h1>
							<h4>Matehuala</h4>
							<p style="color: #00387e;">Galeana 114 B, Centro, CP 78700 <br>Matehuala, San Luis Potosí</p>
							<a href="https://goo.gl/maps/XqxTwVeVtwPVQ93s9"target="_blank"><button class="btn btn-danger">Ver Mapa</button></a>
							<br>
							<br>
							<!--<h4>Sucursal Nuevo laredo</h4>
							<p style="color: #00387e;">Maclovio Herrera #2809, <br>Ferrocarril, 88050<br> Nuevo Laredo, México</p>
							<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.468028490436!2d-99.50904055200343!3d27.485816282800098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866122369abca34f%3A0x7f5a1c8ca4e7ac65!2sCalle%20Maclovio%20Herrera%202809%2C%20Ferrocarril%2C%2088050%20Nuevo%20Laredo%2C%20Tamps.!5e0!3m2!1ses-419!2smx!4v1576010989789!5m2!1ses-419!2smx" target="_blank"><button class="btn btn-danger">Ver Mapa</button></a><br><br>-->
							
							
						</div>
					</div>
				</div>
			</section>
			<section class="p-0 bg-danger">
				<div class="container-full">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="img/visas-matehuala.jpg" alt="Visas">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="img/visas-matehuala-2.jpg" alt="Visas">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="img/visas-matehuala-3.jpg" alt="Visas">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Anterior</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Siguiente</span>
								</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-12 d-block m-auto">
							<h1 class="text-primary text-center text-uppercase pb-5" style="color: white !important;">Calidad y servicio en el trámite de tu visa americana</h1>
							<a href="#contact" class="btn btn-large btn-light text-center d-block m-auto">Contáctanos</a>
						</div>
					</div>
				</div>
			</section>
			<section >
				<div class="container">
					<div class="row">
						<div class="col-lg-6 mx-auto d-inline text-center" id="contact">
							<h1 class="section-heading ">CONTACTO</h1>
							<p style="color: #00387e;">Lic. J. Félix Mireles Reyes<br>Asesoría Profesional<br>Móvil (Whatsapp): <a href="https://wa.me/528671436410">(867) 143 64 10</a> <br>Tel: <a href="tel:4881297652">488 129 7652</a><br>
								<br>Horarios:
								<br>
								Lunes a Viernes de 8:00-18:00hrs.
								<br>
								Sábados:
								<br>
							9:00-15:00hrs.</p>
						</div>
						<div class="col-lg-6 padding-container d-inline">
							<div id="message">
								<form id="frmContact" action="" method="POST" novalidate="novalidate">
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
									<div class="label">Mensaje:</div>
									<div class="field">
										<textarea id="comment-content" name="content" placeholder="Escriba su Mensaje"></textarea>
									</div>
									<div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>
									<div id="mail-status"></div>
									<button type="Submit" id="send-message" class="btn-danger" style="clear:both;">Enviar</button>
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
							<h4 class="text-white text-center">Siganos en nuestras redes sociales</h4>
							<a href="https://www.facebook.com/VisasLaRed/?hc_ref=ARQ6WfDyf8v3u2dxfpOUC5F2-c35UytTDz-5EZfMu8C4jfN8ZmZ1iQw2_biIfvmE1K8&fref=nf"><i class="fab fa-2x fa-facebook-f text-white mb-3 sr-icons" style="padding: 2%;"></i></a>
							<a href="https://twitter.com/VISASLARED?s=08"><i class="fab fa-2x fa-twitter text-white mb-3 sr-icons" style="padding: 2%;"></i></a>
							<a href="https://www.linkedin.com/in/felix-mireles-1a032b72/"><i class="fab fa-2x fa-linkedin-in text-white mb-3 sr-icons" style="padding: 2%;"></i></a>
							<small><p class="text-white d-none">Consulta nuestro <a href="" class="text-white">Aviso de Privacidad</p></a></small>
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
			<script type="text/javascript">
				//VISAS
				document.getElementById("visas").addEventListener("click", function () {
			document.getElementById("text").innerHTML="Estados Unidos, México y Canadá participan en el programa electrónico FAST para acelerar el tráfico comercial seguro a través de sus fronteras, coordinando principios para el manejo de riesgos comunes, seguridad de la cadena de abastecimiento, asociaciones industriales y tecnología avanzada para inspeccionar y autorizar embarques comerciales.";
			});
				//UNDELINE ACTIVE
			document.getElementById("visas").addEventListener("click", function () {
			document.getElementById("visas").style.borderBottom = '10px solid red';
			document.getElementById("pasaportes").style.borderBottom = 'none';
			document.getElementById("sentri").style.borderBottom = 'none';
			document.getElementById("fast").style.borderBottom = 'none';
			//CAMBIO DE IMAGEN
			document.getElementById("visa-img").src="img/visa.jpg";
				
			});
			//PASAPORTES
				document.getElementById("pasaportes").addEventListener("click", function () {
			document.getElementById("text").innerHTML="Agilizamos tu trámite de pasaporte, te asesoramos para que obtengas el permiso para dejar el país y puedas ingresar sin complicaciones a la unón americana.<br>Podemos tramitar este documento por un periodo de 3, 5 o 10 años, dependiendo de tus necesidades.";
			});
				//UNDELINE ACTIVE
			document.getElementById("pasaportes").addEventListener("click", function () {
			document.getElementById("pasaportes").style.borderBottom = '10px solid red';
			document.getElementById("visas").style.borderBottom = 'none';
			document.getElementById("sentri").style.borderBottom = 'none';
			document.getElementById("fast").style.borderBottom = 'none';
				//CAMBIO DE IMAGEN
			document.getElementById("visa-img").src="img/pasaporte.jpg";
			});
			//SENTRI
			document.getElementById("sentri").addEventListener("click", function () {
			document.getElementById("text").innerHTML="SENTRI es la tarjeta inteligente con identificación por radio frecuencia que permite un cruce acelerado de la frontera terrestre entre Estados Unidos y México. Nosotros lo apoyamos a que se le otorgue este permiso para cruzar la frontera de forma más ágil.";
			});
				//UNDELINE ACTIVE
			document.getElementById("sentri").addEventListener("click", function () {
			document.getElementById("sentri").style.borderBottom = '10px solid red';
			document.getElementById("visas").style.borderBottom = 'none';
			document.getElementById("pasaportes").style.borderBottom = 'none';
			document.getElementById("fast").style.borderBottom = 'none';
			//CAMBIO DE IMAGEN
			document.getElementById("visa-img").src="img/sentri.jpg";
			});
			//FAST
			document.getElementById("fast").addEventListener("click", function () {
			document.getElementById("text").innerHTML="Le ayudamos a agilizar la circulación y el despacho de mercancías hacia E.U.A para reducir los tiempos de espera y costos de operación de su empresa.<br>Por medio de carriles exclusivos para el transporte de mercancías, los importadores y exportadores con buen historial fiscal y aduaneros, pueden ahorrar tiempo y dinero, reduciendo el número de inspecciones.";
			});
				//UNDELINE ACTIVE
			document.getElementById("fast").addEventListener("click", function () {
			document.getElementById("fast").style.borderBottom = '10px solid red';
			document.getElementById("visas").style.borderBottom = 'none';
			document.getElementById("pasaportes").style.borderBottom = 'none';
			document.getElementById("sentri").style.borderBottom = 'none';
			//CAMBIO DE IMAGEN
			document.getElementById("visa-img").src="img/fast.jpg";
			});
			//Cambio color de contacto telefonos
			</script>
		</body>
	</html>