@extends('templates.plantilla')
@section('title','Login')
@section('content')


<div id="registrar">
          <a href="{{url('registro')}}"</a>Regresar</a>
  </div>
	<div id="envoltura">
		<div id="contenedor">

			<div id="cabecera" ><H2><p style="color:white;">IDENTIFICATE</p></H2>

		<!--		<img src="./css/images/logo.gif">  -->
			</div>

			<div id="cuerpo">
				<form id="form-login" action="" method="post" autocomplete="off">
					<!--A saber, el atributo for funciona como el id.-->
					<!--ejemplo <label for="usuario">Usuario:</label>-->
					<!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
					<p><label >Usuario:</label></p>
						<input name="usuario" type="text" id="usuario" placeholder="Ingresa Usuario" autofocus="" required=""></p>

					<p><label>Contraseña:</label></p>
						<input name="contrasenia" type="password" id="contrasenia" placeholder="Ingresa Password" required=""></p>

					<p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
				</form>
			</div><!--fin cuerpo-->

			<div id="pie">Sistema de Login Y Registro</div>
		</div><!-- fin contenedor -->
	</div><!--fin envoltura-->

  @endsection
