<h3>Empleado</h3>



@foreach ($proveedores as $proveedor)
    <tr>
    <td>{{$proveedor->numero}}</a></td>
        <td><a href="#">{{$proveedor->nombre}}</a></td>
        <td>{{$proveedor->telefono}}</td>
        <td>{{$proveedor->correo}}</td>
        <td>{{$proveedor->rfc}}</td>
        <td>{{$proveedor->municipio}} 
            <br>
        {{$proveedor->calle}}</td>
        @include('Proveedor.botones.botonera')
</tr>
@endforeach