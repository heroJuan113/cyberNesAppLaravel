<div class="container p-5">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <form class="form-group" method="POST" action="/usuarios" >
                        @csrf
                        @include('inicio.forms.formularoInicio');
                        @include('codigoGeneral.botones.aceptar'); 
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>