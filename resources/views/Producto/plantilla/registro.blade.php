
    <div class="row">
    
            <div class="card">
                <div class="card-body">
                    <form class="form-group" method="POST" action="/producto/" >
                        @csrf
                        @include('Producto.forms.formularioPrincipal');
                        @include('codigoGeneral.botones.aceptar'); 
                     </form>
               
            </div>
        </div>
    </div>
