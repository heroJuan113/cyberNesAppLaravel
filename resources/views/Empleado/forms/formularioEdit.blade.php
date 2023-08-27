<h2>Nuevo Empleado </h2>
@foreach ($empleados as $empleado)
<div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class='form-control' name='nombre' placeholder="Nombre del empleado"  value="{{$empleado->nombre}}" autofocus>
</div>
<div class="form-group">
    <label for="nombre">Curp:</label>
    <input type="text" class='form-control' name='curp' placeholder="Curp del empleado" value="{{$empleado->curp}}" autofocus>
</div>
<div class="form-group">
    <label for="nombre">Estado:</label>
    <input type="text" class='form-control' name='estado' placeholder="Estado" value="{{$empleado->estado}}" autofocus>
</div>

<div class="form-group">
    <label for="nombre">Ciudad:</label>
    <input type="text" class='form-control' name='ciudad' placeholder="Ciudad"  value="{{$empleado->ciudad}}" autofocus>
</div>
<div class="form-group">
    <label for="nombre">Colonia:</label>
    <input type="text" class='form-control' name='colonia' placeholder="Colonia del empleado" value="{{$empleado->colonia}}" autofocus>
</div>

<div class="form-group">
    <label for="nombre">Calle:</label>
    <input type="text" class='form-control' name='calle' placeholder="Calle del empleado" value="{{$empleado->calle}}" autofocus>
</div>
<div class="form-group">
    <label for="nombre">Numero:</label>
    <input type="text" class='form-control' name='numero' placeholder="Numero del empleado"  value="{{$empleado->numero}}" autofocus>
</div>
<div class="form-group">
    <label for="nombre">Telefono:</label>
    <input type="text" class='form-control' name='telefono' placeholder="Telefono del empleado"  value="{{$empleado->telefono}}" autofocus>
</div>
<div class="form-group">
    <label for="nombre">C.P.:</label>
    <input type="text" class='form-control' name='codigoPostal' placeholder="Codigo Postal" value="{{$empleado->codigoPostal}}" autofocus>
</div>
@include('codigoGeneral.botones.seleccionImagen')
@endforeach