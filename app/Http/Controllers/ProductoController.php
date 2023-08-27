<?php

namespace App\Http\Controllers;
use Illuminate\Http\Resource;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proveedores;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       $productos= Producto::get()->all();
       return view("Producto.index")->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $proveedores= Proveedores::get(['nombre','idProveedor']);
        
        return view("Producto.create",compact('proveedores'));
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto=productoData($request ,null);
       if($producto->save()){
            return redirect("/producto");
       }else{
        return "que mal chaval parecces nuevo ";
       }
       return "nada nada ....encerio eres un noobie"; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $producto=Producto::find($id);
        return view("Producto.show" , compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {   
        $proveedores= Proveedores::get(['nombre','idProveedor']);
           $productos= Producto::get()->where('id' , '=', $id);    
          
            return view( "/producto/edit", compact('productos'))->with('proveedores',$proveedores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // return $id;
       $productos= Producto::get()->where('id' , '=', $id);
       foreach($productos as $producto2){
            $producto=productoData($request , $producto2);
            
                //return $producto1;
                if($producto-> save()){
                    //return"actualizado";
                    return redirect("/producto");
               }else{
                return "error";
               }
            
       }          
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idProducto)
    {
      //  return "hola destroy".$idProducto;
            //

            $productos= Producto::get()->where('idProducto' , '=', $idProducto);
            foreach($productos as $producto){
                //return $empleado;
                if($producto->delete()){
                    return redirect("/producto");
                }else{
                    return "No Asi no era ";
                }
            }  
    }
}

function genera($tama){
    $datos= [
        'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l',
        'z', 'x', 'c', 'v', 'b', 'n', 'm',
        '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
    ];
    $cade="";
    for($i=0; $i<70; $i++){
        $cade.=$datos[rand(1,sizeof($datos)-1)]; 

    }
    return $cade;
}
function productoData( $request , $producto){
    $name="";
    if($request->hasFile('imagen')){
         $file=$request->file('imagen');
         $name=time().$file->getClientOriginalName();
         $file->move(public_path().'/'.$name );
      
     }
     if($producto==null){
        $producto= new Producto();
        $producto->idProducto=genera(70);
            $producto=otrosDatos($request , $producto);
            //$producto->foto=$name;
     }else{
        $producto=otrosDatos($request , $producto);
       // $producto->foto=$name;
     }
     
    return $producto;
}

function otrosDatos($request  , $producto){
  //  $producto->nombre=$request->nombre;
     $producto->clave=$request->clave;
     $producto->seccion=$request->seccion;
     $producto->marca=$request->marca;
     $producto->linea=$request->linea;
     $producto->serie=$request->serie;
     $producto->descripcion=$request->descripcion;
     $producto->garantia=$request->garantia;
     $producto->unidadMedida=$request->unidadMedida;
     $producto->idProveedor=$request->idProveedor;
     $producto->iva=$request->iva;
     $producto->bandera=1;
    return $producto;
}