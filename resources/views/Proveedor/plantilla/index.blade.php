<h3>Lista de Empleados:</h3>

<div class="container p-4">
    <div class="row">
        @foreach ($proveedores as $empleado)
       
        <div class="col-md-3 p-4">
            <div class="card text-center">
                <div class="card-body">
                    <a href="">
                        <h3 class="card-title text-uppercase"></h3>
                    </a>
                    <p><p class="m-3">
                        <strong> Nombre:</strong>
                       {{$empleado->nombre}}
                       </p>
                    <p><p class="m-3">
                        <strong> Domicilio:</strong>
                       {{$empleado->colonia}} {{$empleado->calle}} {{$empleado->numero}}
                       </p>
                       <p class="m-3">
                        <strong> Telefono:</strong>
                       {{$empleado->telefono}}
                       </p>
                       <p class="m-3">
                        <strong> Lugar</strong>
                       {{$empleado->ciudad}} {{$empleado->estado}}
                       </p>
                      <link rel="stylesheet" href="">                    
                    </p>
                    
                    @include("Empleado.botones.informacionCompleta")
                    @include("Empleado.botones.actualizar")

                     @include("Empleado.botones.eliminar")

                    
                </div>
                
            </div>
        </div>
       
          
       
        @endforeach
        
          
    </div>
</div>