<div class="col-md-3 p-4">
    <div class="card text-center">
        <div class="card-body">
           
            @foreach ($productos as $producto)
                    <a href="">
                        <h3 class="card-title text-uppercase">{{$producto->marca}} {{$producto->serie}} {{$producto->linea}}</h3>
                    </a>
                    @include('Producto.forms.informacion')
                    @include('Producto.botones.botonera')
                    <p>
                       
                        
                    </p>  
            @endforeach
        </div>
    </div>
</div>