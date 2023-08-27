<div class="form-group">
    Numero del Proveedor:
    <input type="number" class='form-control' name='numero' placeholder="Numero del proveedor" value="{{$proveedor->numero}}" autofocus>
</div>
<div class="form-group">
    Nombre:
    <input type="text" class='form-control' name='nombre' placeholder="Nombre del proveedor" value="{{$proveedor->nombre}}">
</div>
<div class="form-group">
    Municipio:
    <input type="text" class='form-control' name='municipio' placeholder="Municipio" value="{{$proveedor->municipio}}"> 
</div>
<div class="form-group">
    Calle:
    <input type="text" class='form-control' name='calle' placeholder="Calle" value="{{$proveedor->calle}}">
</div>
<div class="form-group">
    Numero de Domicilio:
    <input type="number" class='form-control' name='numeroDomicilio' placeholder="#" value="{{$proveedor->numeroDomicilio}}"> 
</div>
<div class="form-group">
    Teléfono :
    <input type="text" class='form-control' name='telefono' placeholder="Teléfono" value="{{$proveedor->telefono}}">
</div>
<div class="form-group">
    Correo Electronico
    <input type="email" class='form-control' name='correo' placeholder="ejemplo@ejem.com.mx" value="{{$proveedor->correo}}" >
</div>
<div class="form-group">
    RFC:
    <input type="text" class='form-control' name='rfc' placeholder="RFC" value="{{$proveedor->rfc}}">
</div>