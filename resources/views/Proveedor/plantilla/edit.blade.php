<div class="container p-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @foreach ($proveedores as $proveedor)                    
                    <form class="form-group" method="POST" action="/proveedor/x/{{$proveedor->id}}" enctype="multipart/form-data" >
                        @method('PUT')
                        @csrf   
                        
                        @include('Proveedor.forms.formularioEdit')
                        @include('codigoGeneral.botones.aceptar') 
                     </form>
                     @endforeach
                </div>
            </div>
        </div>
    </div>
</div>