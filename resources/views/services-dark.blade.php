<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/services-dark.html  30 Nov 2019 03:49:30 GMT -->
<head>
<meta charset="utf-8">
<title>SIOSMX</title>
<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header header-style-one">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    <div class="text"><span class="icon flaticon-call-answer"></span> Necesitas ayuda? Contactanos ahora : <a href="tel:56 55 55 12 48" class="number">56 55 55 12 48</a></div>
					
                </div>
                <div class="top-right clearfix">
                    <!-- Info List -->
					<ul class="info-list">
                        <li><a href="{{ url('/nosotros') }}">Nuestra historia</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index.html"><img src="{{ asset('images/siosLOGO.png') }}" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-1"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ url('/index') }}">Inicio</a></li>
									<li><a href="{{ url('/nosotros') }}">Quienes Somos</a></li>
                                    <li class="current"><a href="{{ url('/servicios') }}">Nuestros Servicios</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
						
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ url('/index') }}"><img src="{{ asset('images/siosLOGO.png') }}" alt="" title=""></a></div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url('{{ asset('images/background/5.jpg') }}');">
    	<div class="auto-container">
        	<h2>Servicios</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{ asset('index') }}">Inicio</a></li>
                <li>Servicios</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Services Page Section -->
	<section class="services-page-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>Brindamos Soluciones Integrales en el Sector de Sanidad Ambiental</h2>
				<div class="text">Implementamos estrategias proactivas y preventivas para asegurar el control absoluto de fauna nociva en sus instalaciones. En un entorno industrial cada vez más exigente, evolucionamos hacia un modelo de vanguardia que combina tecnología de punta con un estricto cumplimiento de las normativas de salud nacionales e internacionales. A través de métodos avanzados y auditorías en tiempo real, garantizamos la inocuidad de sus procesos y un blindaje total para la reputación de su marca.</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ url('/controldeRoedores') }}"><img src="{{ asset('images/resource/service-8.png') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="{{ url('/controldeRoedores') }}">Control de Roedores</a></h3>
							<div class="text">Implementamos cordones sanitarios avanzados y sistemas de captura múltiple con cebaderos inviolables. Monitoreamos perímetros interiores y exteriores bajo normativas estrictas.</div>
							<a href="{{ url('/controldeRoedores') }}" class="read-more">Leer más</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ url('/insectosRastrerosYVoladores') }}"><img src="images/resource/service-9.png" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="{{ url('/insectosRastrerosYVoladores') }}">Insectos Rastreros y Voladores</a></h3>
							<div class="text">Aplicamos tratamientos residuales dirigidos y tecnología ULV con piretrinas naturales en áreas operativas. Protegemos de forma mensual y semestral zonas clave como lockers, oficinas y líneas de proceso.</div>
							<a href="{{ url('/insectosRastrerosYVoladores') }}" class="read-more">Leer más</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ url('/sanidadeInocuidadIndustrial') }}"><img src="images/resource/service-10.png" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="{{ url('/sanidadeInocuidadIndustrial') }}">Sanidad e Inocuidad Industrial</a></h3>
							<div class="text">Diseñamos   programas  preventivos   auditables   y  desinfecciones  profundas  contra hongos y bacterias. Ofrecemos soporte total ante auditorías integrando carpetas técnicas completas con registros ante COFEPRIS.</div>
							<a href="{{ url('/sanidadeInocuidadIndustrial') }}" class="read-more">Leer más</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ url('/monitoreoYControlDeAves') }}"><img src="images/resource/service-11.png" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="{{ url('/monitoreoYControlDeAves') }}">Monitoreo y Control de Aves</a></h3>
							<div class="text">Implementamos programas de revisión visual y barreras físicas para evitar el asentamiento de aves en accesos continuos. Incluye la instalación estratégica de espantapájaros esféricos colgantes con tecnología holográfica e iridiscente en andenes de carga.</div>
							<a href="{{ url('/monitoreoYControlDeAves') }}" class="read-more">Leer más</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ url('/tratamientosEspecialesEnMadera') }}"><img src="images/resource/service-12.png" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="{{ url('/tratamientosEspecialesEnMadera') }}">Tratamientos Especiales en Madera</a></h3>
							<div class="text">Brindamos soluciones correctivas y preventivas contra plagas destructoras de estructuras y tarimas. Aplicamos métodos avanzados para erradicar y controlar de manera definitiva la presencia de termitas.</div>
							<a href="{{ url('/tratamientosEspecialesEnMadera') }}" class="read-more">Leer más</a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ url('/manejoDePlagaAlmacenada') }}"><img src="images/resource/service-13.png" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="{{ url('/manejoDePlagaAlmacenada') }}">Manejo de Plaga Almacenada</a></h3>
							<div class="text">Desarrollamos e implementamos sistemas especializados para proteger materias primas y productos terminados dentro de bodegas y almacenes. Evaluamos los riesgos geográficos para evitar mermas causadas por insectos propios del almacenamiento industrial.</div>
							<a href="{{ url('/manejoDePlagaAlmacenada') }}" class="read-more">Leer más</a>
						</div>
					</div>
				</div>
				
			</div>

		</div>
	</section>
	<!-- End Story Section -->
	
	<!--Main Footer-->
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
			
			<!--Footer Bottom-->
            <div class="footer-bottom clearfix">
                <div class="pull-left">
                    <div>SIOSMX.COM</a></div>
                </div>
            </div>
			
		</div>
	</footer>
	
<!--End Main Footer-->
	
</div>

<!--End pagewrapper-->

<!--Scroll to top-->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/isotope.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/scrollbar.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>

<div class="whatsapp-chat-container">
    
    <div class="whatsapp-box" id="whatsappBox">
        <div class="whatsapp-header">
            <div class="avatar">
                <svg viewBox="0 0 24 24" width="24" height="24" fill="#fff"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
            </div>
            <div class="status-info">
                <h4>Soporte en Línea</h4>
                <p>Típicamente responde al instante</p>
            </div>
            <button class="close-chat" id="closeChat">&times;</button>
        </div>
        
        <div class="whatsapp-body">
            <p class="msg-received">¡Hola! 👋 ¿En qué puedo ayudarte hoy?</p>
        </div>
        
        <div class="whatsapp-footer">
            <input type="text" id="whatsappInput" placeholder="Escribe tu mensaje aquí..." autocomplete="off">
            <button id="sendWhatsappBtn">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="#25d366"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
            </button>
        </div>
    </div>

    <button class="whatsapp-trigger-btn" id="whatsappTrigger">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="28" height="28" fill="#fff">
            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
        </svg>
    </button>
</div>

<style>
/* Contenedor general */
.whatsapp-chat-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
    font-family: Arial, sans-serif;
}

/* Botón disparador */
.whatsapp-trigger-btn {
    background-color: #25d366;
    border: none;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    display: flex;
    justify-content: center;
    align-items: center;
    transition: transform 0.3s;
    float: right;
}
.whatsapp-trigger-btn:hover { transform: scale(1.1); }

/* Caja de la ventana de chat */
.whatsapp-box {
    display: none; /* Inicia oculto para el efecto jQuery */
    width: 320px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.2);
    margin-bottom: 15px;
    overflow: hidden;
}

/* Encabezado del chat */
.whatsapp-header {
    background-color: #075e54;
    color: white;
    padding: 12px;
    display: flex;
    align-items: center;
    position: relative;
}
.whatsapp-header .avatar {
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 10px;
}
.whatsapp-header h4 { margin: 0; font-size: 14px; }
.whatsapp-header p { margin: 2px 0 0 0; font-size: 11px; color: #eceff1; }
.close-chat {
    position: absolute;
    top: 12px;
    right: 12px;
    background: none;
    border: none;
    color: white;
    font-size: 20px;
    cursor: pointer;
}

/* Cuerpo del chat (Simulación de mensajes) */
.whatsapp-body {
    background-color: #e5ddd5;
    padding: 15px;
    height: 180px;
    overflow-y: auto;
}
.msg-received {
    background-color: white;
    padding: 8px 12px;
    border-radius: 0 8px 8px 8px;
    font-size: 13px;
    margin: 0;
    max-width: 85%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

/* Footer con input */
.whatsapp-footer {
    display: flex;
    padding: 10px;
    background-color: #f0f0f0;
    border-top: 1px solid #ddd;
}
.whatsapp-footer input {
    flex: 1;
    border: none;
    padding: 10px;
    border-radius: 20px;
    outline: none;
    font-size: 13px;
}
.whatsapp-footer button {
    background: none;
    border: none;
    margin-left: 5px;
    cursor: pointer;
    display: flex;
    align-items: center;
}
</style>

<script>
$(document).ready(function() {
    // Configuración del número (Cambia este número por el tuyo)
    var miTelefono = "525563545823"; 

    // Alternar apertura y cierre de la ventana con efectos suaves
    $('#whatsappTrigger').click(function() {
        $('#whatsappBox').fadeToggle(200);
    });

    $('#closeChat').click(function(e) {
        e.stopPropagation(); // Evita que el click se propague al contenedor
        $('#whatsappBox').fadeOut(200);
    });

    // Función para procesar y enviar el mensaje
    function enviarMensaje() {
        var textoMensaje = $('#whatsappInput').val().trim();
        
        if (textoMensaje !== "") {
            // Reemplaza los espacios por %20 para la URL estándar
            var urlWhatsapp = "https://wa.me/" + miTelefono + "?text=" + encodeURIComponent(textoMensaje);
            
            // Abre WhatsApp con el texto ya escrito
            window.open(urlWhatsapp, '_blank');
            
            // Limpia el input y cierra la ventana opcionalmente
            $('#whatsappInput').val('');
            $('#whatsappBox').fadeOut(200);
        }
    }

    // Disparar envío al dar click en la flecha
    $('#sendWhatsappBtn').click(function() {
        enviarMensaje();
    });

    // Disparar envío al presionar la tecla Enter dentro del input
    $('#whatsappInput').keypress(function(e) {
        if (e.which == 13) { 
            enviarMensaje();
        }
    });
});
</script>
</html>