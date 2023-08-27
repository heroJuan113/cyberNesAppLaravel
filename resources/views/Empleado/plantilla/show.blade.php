<h3>Empleado</h3>

@include('Empleado.botones.botonera')


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
               