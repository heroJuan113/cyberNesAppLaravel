<div class="container p-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form class="form-group" method="POST" action="/proveedor/" enctype="multipart/form-data" >
                        @csrf
                        @include('Proveedor.forms.formularioPrincipal');
                        @include('codigoGeneral.botones.aceptar'); 
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>