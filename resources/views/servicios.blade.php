@extends('templates.plantilla')
@section('title','Rodar')
@section('content')
<div id="main_body">
<div id="body">
<h2>Servicios</h2>
<form action="pasaje.html">
<fieldset style="border-radius:5px">
<div class="inp">
<label>Origen :</label>
<input type="text" name="origen"/>
</div>
<div class="inp">
  <label> Destino:</label>
<input type="text" name="destino"/>
</div>
<br />
<div class="sel">
<label>Salida:</label>
<select name="salida">
<option value="0">Ida</option>
<option value="1">Vuelta</option>
<option value="2">Ida y Vuelta</option>
</select>
</div>

<div class="sel">
<label>Servicios:</label>
<select name="servicios">
<option value="0">Bus Cama</option>
<option value="1">Semi Cama</option>
</select>
</div>
<input type="submit" value="itinerarios" name="submit"/>
</fieldset>
</form>

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


@endsection
