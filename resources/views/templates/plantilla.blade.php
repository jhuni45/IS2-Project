<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>@yield('tittle')</title>
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

  <li><a href="{{url('/')}}" class="home" title="home">home</a></li>

  <li><a href="{{url('login')}}" class="user" title="user">user</a></li>

  <li><a href="{{url('atencionCliente')}}" class="contact" title="contact">contact</a></li>

</ul>

<ul class="free">

  <li><a class="call">800-121-4545 759-121-5454</a></li>

</ul>

<img src="images/logo.png" alt="Rodar.com" title="Rodar.com" height="65" width="205" />
<ul class="navi">
  <li><a href="{{url('/')}}">Home</a></li>
  <li><a href="{{url('servicios')}}">Servicios</a></li>
  <li><a href="{{url('promociones')}}">Promociones</a></li>
  <li><a href="{{url('atencionCliente')}}">Atencion al cliente</a></li>
  <li><a href="{{url('enlaces')}}">Enlaces</a></li>

</ul>

</div>

</div>
@yield('content')


<div id="main_footer">
<div id="footer"><!--footer navigation start -->
  <p>&nbsp;</p>
</div>

<!--footer navigation end --></div>
</body>
</html>
