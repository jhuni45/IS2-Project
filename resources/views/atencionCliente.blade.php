@extends('templates.plantilla')
@section('title','Rodar')
@section('content')
<script type="text/javascript" src="js/jquery1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>


<script type="text/javascript">
 $(document).ready(function(){
  $("#cenviar").click(enviar_formu);
})
</script>
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
     <p>Imagen</p>
    </div>
    <!-- support end --><!--services start -->
    <div id="services">
    <h2>Noticia 3<span>Fecha de la noticia 3</span></h2>
    <p>Imagen</p>
    <p>&nbsp; </p>
    </div>
   <!--services end --> <br class="balnk" />
  </div>
</div>
@endsection
