
    <div class="row">
    
        <div class="card">
            <div class="card-body">
                @foreach($productos as $producto)
                <form class="form-group" method="POST" action="/producto/x/{{$producto->id}}" >
                    @method('PUT')
                    @csrf
                
                    @include('Producto.forms.formularioEdit')
                    @include('Producto.botones.aceptar') 
                 
                    
                 </form>
                 @endforeach
        </div>
    </div>
</div>
