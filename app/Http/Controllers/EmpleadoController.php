<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resource;
use App\Models\Empleado;
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       $empleado= Empleado::get()->all();
       return view("Empleado.index")->with('empleados',$empleado);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       
        return view("Empleado.create");
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado=empleadoData($request ,null);
       if($empleado->save()){
            return redirect("/empleado");
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
        $empleado=Empleado::find($id);
        return view("Empleado.show" , compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
           $empleados= Empleado::get()->where('id' , '=', $id);    
          
            return view( "/empleado/edit", compact('empleados'));
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
       $empleados= Empleado::get()->where('id' , '=', $id);
       foreach($empleados as $empleado){
            $empleado=empleadoData($request , $empleado);
            if($empleado-> save()){
                return redirect("/empleado");
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
    public function destroy($idEmpleado)
    {
      //  return "hola destroy".$idEmpleado;
            //

            $empleados= Empleado::get()->where('idEmpleado' , '=', $idEmpleado);
            foreach($empleados as $empleado){
                //return $empleado;
                if($empleado->delete()){
                    return redirect("/empleado");
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
function empleadoData( $request , $empleado){
    $name="";
    if($request->hasFile('imagen')){
         $file=$request->file('imagen');
         $name=time().$file->getClientOriginalName();
         $file->move(public_path().'/'.$name );
      
     }
     if($empleado==null){
        $empleado= new Empleado();
        $empleado->idEmpleado=genera(70);
            $empleado=otrosDatos($request , $empleado);
            $empleado->foto=$name;
     }else{
        $empleado=otrosDatos($request , $empleado);
        $empleado->foto=$name;
     }
     
    return $empleado;
}

function otrosDatos($request  , $empleado){
    $empleado->nombre=$request->nombre;
     $empleado->curp=$request->curp;
     $empleado->colonia=$request->colonia;
     $empleado->ciudad=$request->ciudad;
     $empleado->numero=$request->numero;
     $empleado->telefono=$request->telefono;
     $empleado->codigoPostal=$request->codigoPostal;
     $empleado->estado=$request->estado;
    
    return $empleado;
}