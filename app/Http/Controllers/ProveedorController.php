<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resource;
use App\Models\Proveedores;
class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.4
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        $proveedores= Proveedores::get()->all();
        return view("proveedor.show")->with('proveedores',$proveedores);
    }

    /**d
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Proveedor.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $proveedor=proveedorData($request , null);
        if($proveedor->save()){
            return redirect("/proveedor");
       }else{
        return "que mal chaval parecces nuevo ";
       }
       return "nada nada encerio eres un noobie";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $proveedores=Proveedores::find($id);
        return view("Proveedor.show" , compact('Proveedores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedores= Proveedores::get()->where('id' , '=', $id);    
          
            return view( "/proveedor/edit", compact('proveedores'));
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
        //
        $proveedores= Proveedores::get()->where('id' , '=', $id);
       foreach($proveedores as $proveedor){
            $proveedor=proveedorData($request , $proveedor);
            if($proveedor-> save()){
                return redirect("/proveedor");
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
    public function destroy($idproveedor)
    {
        //
        $proveedores= Proveedores::get()->where('idProveedor' , '=', $idproveedor);
        foreach($proveedores as $proveedor){
            //return $proveedor;
            if($proveedor->delete()){
                return redirect("/proveedor");
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
function proveedorData( $request , $proveedor){
    $name="";
    if($request->hasFile('imagen')){
         $file=$request->file('imagen');
         $name=time().$file->getClientOriginalName();
         $file->move(public_path().'/'.$name );
      
     }
     if($proveedor==null){
        $proveedor= new Proveedores();
        $proveedor->idproveedor=genera(70);
            $proveedor=otrosDatos($request , $proveedor);
            //$proveedor->foto=$name;
     }else{
        $proveedor=otrosDatos($request , $proveedor);
       // $proveedor->foto=$name;
     }
     
    return $proveedor;
}

function otrosDatos($request  , $proveedor){
    $proveedor->numero=2;
    $proveedor->nombre=$request->nombre;
    $proveedor->municipio=$request->municipio;
    $proveedor->calle=$request->calle;
    $proveedor->numeroDomicilio=$request->numeroDomicilio;
    $proveedor->telefono=$request->telefono;
    $proveedor->correo=$request->correo;
    $proveedor->rfc=$request->rfc;
    $proveedor->bandera=1;
    
    return $proveedor;
}