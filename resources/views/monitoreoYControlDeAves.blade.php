<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/hospitality-design.html  30 Nov 2019 03:50:13 GMT -->
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

<body class="dark-layout">

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header header-style-one">
	
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    <div class="text"><span class="icon flaticon-call-answer"></span> Necesitas ayuda? Contactanos ahora : <a href="#" class="number">56 55 55 12 48</a></div>
					
                </div>
                <div class="top-right clearfix">
                    <!-- Info List -->
					<ul class="info-list">
                        <li><a href="{{ url('/nosotros') }}">Nuestra historia</a></li>
						<li class="quote"><a href="#">Contactanos</a></li>
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
                        <div class="logo"><a href="{{ url('/index') }}"><img src="{{ asset('images/siosLOGO.png') }}" alt="" title=""></a></div>
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
                                    <li><a href="{{ url('/index') }}">Inicio</a>
                                    </li>
									<li><a href="{{ url('/nosotros') }}">Quienes Somos</a>
                                    </li>
                                    <li class="current"><a href="{{ url('/servicios') }}">Nuestros Servicios</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
						
						<!-- Outer Box -->
                        <div class="outer-box clearfix">
                            <div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
                        </div>
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
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
    	<div class="auto-container">
        	<h2>Monitoreo y control de aves</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{ url('/index') }}">Inicio</a></li>
				<li>Servicios</li>
                <li>Monitoreo y control de aves</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
				<!--Content Side / Services Detail -->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                	<div class="services-detail">
						<div class="inner-box">
							<div class="bold-text">La ingeniería de exclusión aérea y sistemas disuasorios ópticos detiene de forma definitiva la presencia de aves en sus andenes y techumbres industriales.</div>
							<div class="text">
								<p>Diseñamos e instalamos barreras físicas de alta durabilidad que impiden permanentemente el anidamiento y posamiento de palomas y otras especies en estructuras elevadas. El diseño arquitectónico e industrial moderno requiere hoy de metodologías dinámicas que sustituyan los métodos tradicionales por tecnología holográfica e iridiscente que aprovecha la luz solar para ahuyentar a las poblaciones aéreas. El mapeo de puntos críticos y de anidación activa nos permite implementar soluciones de largo plazo que protegen la integridad de sus mercancías y la estética de sus fachadas.</p>
								<p>El diseño arquitectónico e industrial moderno requiere hoy de metodologías dinámicas que sustituyan los métodos tradicionales por tecnología holográfica e iridiscente que aprovecha la luz solar para ahuyentar a las poblaciones aéreas. El mapeo de puntos críticos y de anidación activa nos permite implementar soluciones de largo plazo que protegen la integridad de sus mercancías y la estética de sus fachadas.</p>
								<!-- Two Column -->
								<div class="two-column">
									<div class="row clearfix">
										<div class="column col-lg-4 col-md-4 col-sm-12">
											<div class="image">
												<img src="images/resource/service-28.jpg" alt="" />
											</div>
											<div class="image">
												<img src="images/resource/service-29.jpg" alt="" />
											</div>
										</div>
										<div class="content-column col-lg-8 col-md-8 col-sm-12">
											<div class="inner-column">
												<h3>Nos especializamos en la preservación de la infraestructura y la mitigación de riesgos por contaminación aérea</h3>
												<p>Protegemos sus techos, naves industriales y bodegas mediante la colocación estratégica de dispositivos de disuasión que evitan la acumulación de desechos altamente corrosivos y focos de infección. Brindamos una cobertura integral que abarca desde la limpieza profunda y sanitización previa de las zonas afectadas hasta la instalación de mallas y sistemas de púas de acero inoxidable. Innovamos con sistemas esféricos colgantes de última generación que protegen las zonas de carga y descarga de manera continua y sin alterar la estética de sus instalaciones.</p>
												<p>Calculamos con exactitud las trayectorias de aproximación y las áreas de descanso para garantizar un blindaje tridimensional efectivo en grandes extensiones de terreno. Evaluamos el comportamiento estacional de las distintas especies para mantener las entradas de aire y los tragaluces libres de riesgos sanitarios. Entregamos reportes detallados y análisis de vulnerabilidad estructural integrados a su carpeta de control ambiental.</p>
											</div>
										</div>
									</div>
								</div>
								<h4>Protección perimetral y control de aves en su zona de operaciones</h4>
								<ul class="list-style-four">
									<li>-   Erradicación de hábitos de anidación y posamiento de aves silvestres y urbanas en estructuras metálicas.</li>
									<li>-   Consultoría especializada para el diseño de barreras mecánicas y mallas de exclusión invisibles de alta resistencia.</li>
									<li>-   Instalación de sistemas disuasorios de grado industrial capaces de soportar la intemperie y la radiación solar extrema.</li>
									<li>-   Monitoreo continuo de perfiles aéreos para asegurar andenes de carga limpios y libres de contaminación orgánica.</li>
									<li>-   Instalación de sistemas disuasorios de grado industrial capaces de soportar la intemperie y la radiación solar extrema.</li>
								</ul>
								<div class="service-contact-box"> Nuestro personal certificado le ayudará con la sanidad e inocuidad de su empresa. <br> <a href="#">¡Contacte a nuestro equipo</a> para saber más!</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--Sidebar Side-->
				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar">
						
						<!-- Sidebar Widget / List Widget-->
                        <div class="sidebar-widget list-widget">
							<!-- Services List -->
							<ul class="services-list">
                                <li><a href="{{ url('/controldeRoedores') }}">Control de Roedores</a></li>
								<li><a href="{{ url('/insectosRastrerosYVoladores') }}">Insectos Rastreros y Voladores</a></li>
                                <li><a href="{{ url('/sanidadeInocuidadIndustrial') }}">Sanidad e Inocuidad Industrial</a></li>
								<li class="active"><a href="{{ url('/monitoreoYControlDeAves') }}">Monitoreo y Control de Aves</a></li>
								<li><a href="{{ url('/tratamientosEspecialesEnMadera') }}">Tratamientos Especiales en Madera</a></li>
								<li><a href="{{ url('/manejoDePlagaAlmacenada') }}">Manejo de Plaga Almacenada</a></li>
							</ul>
						</div>
						
						<!-- Sidebar Widget / Contact Widget-->
                        <div class="sidebar-widget contact-widget">
							<div class="widget-content" style="background-image: url(images/background/7.jpg);">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">Contactanos</span></a>
							</div>
						</div>
					
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	
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