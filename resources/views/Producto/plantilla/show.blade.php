

<h3>Lista de Prooductos:</h3>
<div class="container p-4">
    <div class="row">
        @foreach ($prooductos as $producto)dd
        <div class="col-md-3 p-4">
            <div class="card text-center">
                <div class="card-body">
                    <a href="">
                        <h3 class="card-title text-uppercase"></h3>
                    </a>
                       
                    <p><p class="m-3">
                        <strong> Productp:</strong>
                       {{$producto->clave}} {{$producto->marca}} {{$producto->linea}} {{$producto->serie}}
                       </p>
                       <p class="m-3">
                        <strong> Telefono:</strong>
                       {{$producto->descripcion}}
                       </p>
                       <p class="m-3">
                        <strong> Lugar</strong>
                       {{$producto->ciudad}} {{$producto->unidadMedida}}
                       </p>
                      <link rel="stylesheet" href="">                    
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> 