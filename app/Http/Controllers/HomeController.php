<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome(){
         return view('/encuentro');
    }




    public function getCliente() {

        return redirect()->action([ClienteCatalogController::class, '/index']);
    }
}
