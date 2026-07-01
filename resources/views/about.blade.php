<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/about.html  30 Nov 2019 03:45:56 GMT -->
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
									<li class="current"><a href="{{ url('/nosotros') }}">Quienes Somos</a>
                                    </li>
                                    <li><a href="{{ url('/servicios') }}">Nuestros Servicios</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        
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
        	<h2>Quienes somos</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{ url('/index') }}">Inicio</a></li>
                <li>Quienes somos</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Story Section -->
	<section class="story-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Nuestra Historia: Sistemas Operativos Sustentables</h2>
						<div class="bold-text">Una trayectoria dedicada a la protección de las personas, la sanidad industrial y el cuidado del medio ambiente.</div>
						<div class="text">
							<p>Nuestra historia comenzó con una visión clara: transformar el sector del control de plagas urbano e industrial en México, elevando los estándares de calidad a través de la sustentabilidad. Bajo el nombre de Sistemas Operativos Sustentables S.A. de C.V., nos consolidamos formalmente como SIOS® (R.F.C.: SOS131126C83), naciendo de la necesidad de ofrecer soluciones profesionales que no solo eliminaran fauna nociva, sino que protegieran activamente la salud pública, los bienes de nuestros clientes y el entorno ecológico.
								Desde nuestros inicios, establecimos que la causa fundamental de nuestra existencia sería contribuir directamente a la calidad de vida de las personas. Con esta premisa, nos especializamos en el desarrollo e implementación de programas de Manejo Integral de Plagas (MIP), un enfoque avanzado que prioriza la prevención, el monitoreo estratégico y el uso responsable de la tecnología por encima de la aplicación masiva e indiscriminada de químicos.</p>
						</div>
						<div class="bold-text">Crecimiento, Infraestructura y Respaldo Institucional.</div>
						<div class="text">
							<p>A lo largo de los años, hemos expandido nuestras capacidades operativas y técnicas para atender de manera oportuna a los sectores más exigentes de la industria, incluyendo el ramo comercial, logístico y de alimentos. Para garantizar una cobertura rápida y eficiente, consolidamos nuestra base de operaciones estratégicamente ubicada en la zona industrial del Estado de México y alrededores.</p>
						</div>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="images/resource/story.jpg" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Story Section -->
	
	<!-- Interior Section -->
	<section class="interior-section style-three">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Image Column -->
					<div class="image-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image">
								<img src="images/resource/interior.jpeg" alt="" />
							</div>
						</div>
					</div>
					
					<!-- Content Column -->
					<div class="content-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2>¿Por qué elegirnos para su empresa?</h2>
							<div class="text">En SIOS® respaldamos la tranquilidad de su negocio mediante un Manejo Integral de Plagas con Licencia Sanitaria Federal de vigencia indeterminada y un Seguro de Responsabilidad Civil de un millón de pesos. Nuestro equipo está conformado por técnicos especialistas certificados ante CONOCER, quienes aplican tecnología de punta y métodos preventivos diseñados específicamente para resguardar la inocuidad industrial. Al estar afiliados a organismos líderes nacionales e internacionales como la NPMA, garantizamos los más elevados estándares de calidad y auditoría, asegurando un servicio ecológico y profesional que protege el valor de su marca las 24 horas.</div>
							<div class="row clearfix">
							
								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-award-1"></span>
										</div>
										<h3>Calidad Superior</h3>
									</div>
								</div>
								
								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-answer"></span>
										</div>
										<h3>Equipo Profesional</h3>
									</div>
								</div>
								
								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-hand"></span>
										</div>
										<h3>Garantía Inigualable</h3>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Interior Section -->
	
	<!-- Counter Section -->
	<section class="counter-section style-two">
		<div class="auto-container">
		
			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="8">0</span> Años
								</div>
								<h4 class="counter-title">Servicio</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box alternate">
									<span class="count-text" data-speed="3000" data-stop="2500">0</span>+
								</div>
								<h4 class="counter-title">Trabajos completados</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="200">0</span>+
								</div>
								<h4 class="counter-title">Empresas satisfechas</h4>
							</div>
						</div>
					</div>
					
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="45">0</span> Dias
								</div>
								<h4 class="counter-title">Entrega de proyectos</h4>
							</div>
						</div>
					</div>

				</div>
			</div>
			
		</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- Mission Section -->
    <section class="mission-section style-two">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="images/resource/mission.jpg" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-xl-9 col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Misión de nuestra empresa</h2>
						<!--<div class="bold-text">we believe that interior design is more than great functionality and <br> beautiful aesthetics.</div>-->
						<div class="text">Nuestra misión es contribuir activamente a la calidad de vida de las personas mediante un servicio profesional de Manejo Integral de Plagas sustentado en elevados estándares de calidad, seguridad y tecnología de punta. Nos dedicamos a prevenir enfermedades, mitigar riesgos sanitarios y proteger el patrimonio de nuestros clientes industriales y comerciales, empleando productos estrictamente autorizados bajo las Normas Mexicanas vigentes. Con un profundo respeto por el ecosistema y la salud ocupacional, buscamos superar de manera constante las expectativas del mercado, brindando la confianza y la seguridad necesarias para salvaguardar la integridad de las marcas que confían en nosotros.</div>
						<h3>Enfoque de Soluciones y Beneficios</h3>
						<div class="row clearfix">
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-two">
									<li>-  Soluciones Estratégicas para su Negocio</li>
									<li>-  Beneficios Clave de Nuestro Servicio</li>
									<li>-  El Valor que Aportamos a su Empresa</li>
								</ul>
							</div>
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-two">
									<li>-  Su Marca en Manos de Expertos</li>
									<li>-  Respaldo y Garantía para su Operación</li>
									<li>-  Por Qué las Grandes Industrias Confían en SIOS®</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Mission Section -->
	
	<!-- Call To Action Section -->
	<section class="call-to-action-section" style="background-image: url(images/background/6.jpg)">
		<div class="auto-container">
			<h2>Piense en Seguridad. Piense en SIOS</h2>
			<div class="text">Protección integral para todos los sectores y exigencias normativas. Elija entre nuestros sistemas avanzados de monitoreo y control preventivo. Asegure la tranquilidad de su empresa y la inocuidad de sus procesos hoy mismo.</div>
			<a href="#" class="theme-btn btn-style-two"><span class="txt">contactanos hoy mismo</span></a>
		</div>
	</section>
	<!-- End Call To Action Section -->

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