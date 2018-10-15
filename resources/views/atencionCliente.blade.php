
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="js/jquery1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$("#cenviar").click(enviar_formu);

	})
	</script>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Rodar.com</title>


  <link href="css/estilo1.css" rel="stylesheet" type="text/css" />

</head>


<body>

<div id="main_header">
<div id="header">
<ul>

  <li><a href="index.html" class="home" title="home">home</a></li>

  <li><a href="#" class="user" title="user">user</a></li>

  <li><a href="atencioncliente.html" class="contact" title="contact">contact</a></li>
  <li><a href="promociones.html" class="user" title="user">user</a></li>


</ul>

<ul class="free">

  <li><a class="call">800-121-4545 759-121-5454</a></li>

</ul>

<img src="images/logo.png" alt="Rodar.com" title="Rodar.com" height="65" width="205" />
<ul class="navi">

  <li><a href="index.html">Home</a></li>

  <li><a href="servicios.php">Servicios</a></li>

  <li><a href="promociones.html">Promociones</a></li>

  <li><a href="atencioncliente.html">Atencion al cliente</a></li>

  <li class="li1"><a href="enlaces.html">Enlaces</a></li>

</ul>

</div>

</div>

<div id="main_body">
<div id="body">
<center>
<h2>Atencion al Cliente</h2>
<fieldset style="border-radius:5px">
<table style="left:80px;" width="346" height="330" border="0" >
					<tr>
						<td width="106">&nbsp;</td>
						<th colspan="3">Quejas o Sugerencias</th>
					</tr>
					<tr>
						<td>Nombres: </td>
						<td colspan="2"><input id="nombre" name="nombre_usuario" Type = Text></td>
					</tr>
					<tr>
						<td>E-mail:</td>
						<td colspan="2"><input id="email" name="email" Type = Text></td>
					</tr>
					<tr>
						<td>Titulo:</td>
						<td colspan="2" id="asunto">
						<select name="transporte">
						<option value="1">Costos</option>
						<option value="2">Destinos</option>
						<option value="3">Horarios</option>
						</select></td>
					</tr>
					<tr>
					<tr >
						<td colspan=3>Comentario:</b></td>
					</tr>
					<tr>
						<td colspan=3><input id="mensaje" name="comentario" Type = Text style='width:300px; height:150px'></td>
					</tr>

					<tr>
						<td id="respuesta_registro" colspan="4" align="center">&nbsp;</td>
					</tr>
					<tr>
						<td height="39">&nbsp;</td>
						<td width="111" align="center"><input id="cenviar" style="width:120px;" type="submit" name="enviar" value="Enviar"></td>
						<td width="104" align="center">&nbsp;</td>
						<td width="7" align="center">&nbsp;</td>
					</tr>
				</table>
                </fieldset>
</center>
<p><span>Rodar.com</span> <a href="#">Leer Mas</a></p>


<!--latest event start -->
<div id="event">
<h2>Noticia 1<span>Fecha de la noticia 1</span></h2>

<p>Imagen</p>
<p>&nbsp;</p>

</div>

<!--latest event end --><!--support start -->
<div id="support">
<h2>Noticia 2<span>Fecha de la noticia </span></h2>

<p>Imagen</p></div>

<!-- support end --><!--services start -->
<div id="services">
<h2>Noticia 3<span>Fecha de la noticia 3</span></h2>

<p>Imagen</p>
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
