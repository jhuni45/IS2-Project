<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Rodar.com</title>
  <link href="css/estilo1.css" rel="stylesheet" type="text/css" />
  <link href='css/itali.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="css/style_ie.css" />
		<![endif]-->
		<!-- jQuery -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<!-- jmpress plugin -->
		<script type="text/javascript" src="js/jmpress.min.js"></script>
		<!-- jmslideshow plugin : extends the jmpress plugin -->
		<script type="text/javascript" src="js/jquery.jmslideshow.js"></script>
		<script type="text/javascript" src="js/modernizr.custom.48780.js"></script>
		<noscript>
			<style>
			.step {
				width: 100%;
				position: relative;
			}
			.step:not(.active) {
				opacity: 1;
				filter: alpha(opacity=99);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
			}
			.step:not(.active) a.jms-link{
				opacity: 1;
				margin-top: 40px;
			}
			</style>
		</noscript>

</head>


<body>

<div id="main_header">
<div id="header">
<ul>

  <li><a href="index.html" class="home" title="home">home</a></li>

  <li><a href="#" class="user" title="user">user</a></li>

  <li><a href="atencioncliente.html" class="contact" title="contact">contact</a></li>

</ul>

<ul class="free">

  <li><a class="call">800-121-4545 759-121-5454</a></li>

</ul>

<img src="images/logo.png" alt="Rodar.com" title="Rodar.com" height="65" width="205" />
<ul class="navi">

  <li><a href="index.html">Home</a></li>

  <li><a href="servicios.php">Servicios</a></li>

  <li><a href="promociones.html">Promociones</a></li>

  <li class="nav-item d-none d-md-flex"><a href="{{url('atencionCliente')}}" class="btn btn-sm btn-outline-primary">Atencion al cliente</a></li>

  <li class="li1"><a href="enlaces.html">Enlaces</a></li>

</ul>

</div>

</div>

<div id="main_body">
<div id="body">
<div class="container">
  <section id="jms-slideshow" class="jms-slideshow">
		  <div class="step" data-color="color-2">
					<div class="jms-content">
						<h3>Variedad de Empresas</h3>
					<p>Tenemos a disposicion una serie de empresas reconocidad Nacionalmente</p>
						<a class="jms-link" href="index.html">Leer Mas</a>
					</div>
					<img src="images/8b.jpg" />
				</div>
				<div class="step" data-color="color-3" data-y="900" data-rotate-x="80">
					<div class="jms-content">
						<h3>Promociones</h3>
					<p>Tenemos una serie de Promociones las cuales les encantara</p>
						<a class="jms-link" href="promociones.html">Leer Mas</a>
					</div>
					<img src="images/9b.jpg" />
				</div>
				<div class="step" data-color="color-4" data-x="-100" data-z="1500" data-rotate="170">
					<div class="jms-content">
						<h3>Servicios</h3>
					<p>Contamos con todos los servicios a disposicion como Bus Cama, Semicama, etc</p>
						<a class="jms-link" href="servicios.html">Leer Mas</a>
					</div>
					<img src="images/10b.jpg" />
				</div>
				<div class="step" data-color="color-5" data-x="3000">
					<div class="jms-content">
						<h3>Atencion al Cliente</h3>
					<p>Si tiene alguna consulta, sugerencia, pedido o idea por favor envienosla que estaremos agradecidos</p>
						<a class="jms-link" href="atencion_cliente.blade.php">Leer Mas</a>
					</div>
					<img src="images/11b.jpg" />
				</div>
				<div class="step" data-color="color-1" data-x="4500" data-z="1000" data-rotate-y="45">
					<div class="jms-content">
						<h3>Enlaces</h3>
					<p>Lista de Nuestros Enlaces hacia otras formas de...</p>
						<a class="jms-link" href="Enlaces">Leer Mas</a>
					</div>
					<img src="images/12b.jpg" />
				</div>
			</section>
        </div>
		<script type="text/javascript">
			$(function() {

				var jmpressOpts	= {
					animation		: { transitionDuration : '0.8s' }
				};

				$( '#jms-slideshow' ).jmslideshow( $.extend( true, { jmpressOpts : jmpressOpts }, {
					autoplay	: true,
					bgColorSpeed: '0.8s',
					arrows		: false
				}));

			});
		</script>

<h2>Que es Rodar.com?</h2>

<p><span>Rodar.com</span> es un servicio online de compra de boletos a un gran costo, teniendo la posibilidad de elegir entre una de nuestros servicios de transportes vinculados(Cromotex, Oltursa, Cruz del Sur, Orme&ntilde;o, Santa Ursula), usted ademas administrara el lugar donde desea sentarse y el tipo de servicio el cual desea elegir. Rodar.com </p>


<!--latest event start -->
<div id="event">
<h2>Servicios</h2>

<p><img src="images/13c.jpg"/></p>
<p>&nbsp;</p>

</div>

<!--latest event end --><!--support start -->
<div id="support">
<h2>Cliente</h2>

<p><img src="images/14c.jpg"/></p></div>

<!-- support end --><!--services start -->
<div id="services">
<h2>Promociones</h2>

<p><img src="images/15c.jpg"/></p>
<p>&nbsp; </p>
</div>

<!--services end --> <br class="balnk" />

</div>

</div>

<div id="main_footer">
<div id="footer"><!--footer navigation start -->
  <p>&nbsp;</p>
</div>

<!--footer navigation end --></div>
</body>
</html>
