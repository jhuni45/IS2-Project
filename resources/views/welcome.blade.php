@extends('templates.plantilla')
@section('title','Rodar')
@section('content')
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
@endsection
