<table>
    <tr>
        <td>Clave | Codigo de barras:</td>
        <td>
            <br>
            <input type="text" class='form-control' name='clave' placeholder="Clave del producto" required="true" value="{{$producto->clave}}" autofocus>
            <br>
        </td>
    </tr>
    <tr>
        <td>Sección:</td>
        <td><br>
            <input type="text" class='form-control' name='seccion' placeholder="" value="{{$producto->seccion}}" required="true"><br>
        </td>
    </tr>
    <tr>
        <td>Marca:</td>
        <td><br>
            <input type="text" class='form-control' name='marca' placeholder="marca" value="{{$producto->marca}}" required="true"><br>
        </td>
        <td> Línea:</td>
        <td><br>
            <input type="text" class='form-control' name='linea' placeholder="Linea" value="{{$producto->linea}}" required="true"><br>
        </td>
        <td> Serie:</td>
        <td><br>
            <input type="text" class='form-control' name='serie' placeholder="Serie" value="{{$producto->serie}}" required="true"><br>
        </td>
    </tr>

</table>
<table>

    <tr>
        <td>Descripción:</td>
        <td><br>
            <textarea name="descripcion" id="" cols="88" rows="3" required="true">{{$producto->serie}}</textarea>
        </td>
    </tr>
</table>
<table>
    <tr>
        <td>Garantía</td>
        <td>
            <br>
            <input type="text" class='form-control' name='garantia' placeholder="S/G" value="{{$producto->garantia}}">
            <br>
        </td>
        <td>Unidad de Medida</td>
        <td>
            <br>
            <input type="text" class='form-control' name='unidadMedida' placeholder="" value="{{$producto->unidadMedida}}">
            <br>
        </td>
    </tr>
    
    <tr>
        <td>Proveedores</td>
        <td>
            <br>
            <select name="idProveedor"  class="form-control" id="" >
                @foreach ($proveedores as $item)
                    <option value="{{ $item->idProveedor }}">{{ $item->nombre }}</option>
                    
                @endforeach
            </select>
            <br>
        </td>
         <td>Causa Iva </td>
        <td>
                <input type="checkbox" name="iva" value="1" >  
            <br>
        </td>
    </tr>
</table>