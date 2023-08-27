<div class="container p-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @foreach ($empleados as $empleado)                    
                    <form class="form-group" method="POST" action="/empleado/x/{{$empleado->id}}" enctype="multipart/form-data" >
                        @method('PUT')
                        @csrf   
                        
                        @include('Empleado.forms.formularioEdit')
                        @include('codigoGeneral.botones.aceptar') 
                     </form>
                     @endforeach
                </div>
            </div>
        </div>
    </div>
</div>