<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class ClienteCatalogoController extends Controller
{

    public function getCreate() {
        return view('ClienteCatalogo.create');
    }


    public function getIndex( ) {

        $usuarios=User::all();
        return view('ClienteCatalogo.listadoCliente',array('arrayUsuarios'=>$usuarios));
    }


    public function getShow($id){
        $usuario = User::findOrFail($id);

        //return view('ClienteCatalogo.showCliente',['usuario'=> $usuario]);
        return view('ClienteCatalogo.showCliente',array('usuario'=> $usuario));
    }

    function getEdit($id) {

        $obj= User::findOrFail($id);

        return view('ClienteCatalogo.editCliente',array('usuario' => $obj,'id=> $id'));
    }


    function editStore(Request $request,$id){

        $usuario = User::findOrFail($id);
        $usuario->name=$request->input('name');
        $usuario->email=$request->input('email');

        $usuario->save();

        $url = action([ClienteCatalogoController::class, 'getShow'],['id' =>$id]);
        return redirect($url);
    }












    /*
    public function store(Request $request)
    {

        //generar un registro nuevo
        $registroNuevo= new User();
        // poner el nombre del campo de la tabla de la base de datos y el nombre del formurario.
        $registroNuevo->name=$request->input('name');
        $registroNuevo->localidad=$request->input('localidad');

        // guardar la base de datos
        $registroNuevo->save();

        //
        $url = action([ClienteCatalogoController::class, 'getShow'],['id' => $registroNuevo->id]);

        // rederigir al index.
        return redirect($url);

        return $request->all();

    }
    */




}
