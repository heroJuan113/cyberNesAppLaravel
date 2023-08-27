<div class="container p-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form class="form-group" method="POST" action="/empleado/" enctype="multipart/form-data" >
                        @csrf
                        @include('Empleado.forms.formularioPrincipal');
                        @include('codigoGeneral.botones.aceptar'); 
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>