@extends('templates.plantilla')
@section('title','Rodar')
@section('content')
<div id="main_body">
<div id="body">
<h2>Ultimo Paso</h2>
<form>
<div class="inp">
<label>Nombre :</label>
<input type="text" name="origen"/>
</div>

<div class="inp">
<label>Apellido :</label>
<input type="text" name="origen"/>
</div>

<div class="inp">
<label>Nacionalidad :</label>
<select>
<option>Peru</option>
</select>
</div>

<div class="inp">
<label>Tipo de Documento :</label>
<select>
<option>DNI</option>
<option>Pasaporte</option>
</select>
</div>

<div class="inp">
<input type="text" name="origen"/>
</div>

<div class="inp">
<label>Tarjeta :</label>
<select>
<option>Visa</option>
<option>America Express</option>
<option>Master Card</option>
</select>
</div>

<div class="inp">
<label>N° Tarjeta :</label>
<input type="text" name="origen"/>
</div>

<div class="inp">
  <label>  Email :</label>
<input type="text" name="origen"/>
</div>

<div class="inp">
    <label>Confirme :</label>
    <input type="text" name="origen"/>
</div>
<input type="submit" value="Comprar" name="submit"/>
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

</div>
@endsection
