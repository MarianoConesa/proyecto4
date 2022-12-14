<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class ClienteCatalogoController extends Controller
{

    public function getCreate() {
        return view('ClienteCatalogo.create');
    }

    public function store(Request $request)
    {

        //generar un registro nuevo
        $registroNuevo= new Movie();
        // poner el nombre del campo de la tabla de la base de datos y el nombre del formurario.
        $registroNuevo->title=$request->input('title');

        // guardar la base de datos
        $registroNuevo->save();

        //
        $url = action([ClienteCatalogoController::class, 'getShow'],['id' => $registroNuevo->id]);

        // rederigir al index.
        return redirect($url);

        return $request->all();

    }


}
