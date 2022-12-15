<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteCatalogoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function() {
//     return view('encuentro');
// });
// ---------------------- @ My code:

Route::get('/encuentro', function() {
    return view('encuentro');
});
Route::get('/contacto', function() {
    return view('contacto');
});

Route::get('/',[HomeController::class, 'getHome']);



Route::get('aFewAcc', function () {
    return view('AFewAccomplishments');
});

Route::get('about', function () {
    return view('about');

});


Route::get('/things', function() {
    return view('things');
});

Route::get('login', function(){
    return view('auth.login');
});





Route::prefix('ClienteCatalogo')->group(function () {

    Route::get('/',[ClienteCatalogController::class, 'getIndex']);
    Route::get('/show/{id}', [ClienteCatalogoController::class, 'getShow']);
    Route::get('/create', [ClienteCatalogoController::class, 'getCreate']);
    Route::post('/create', [ClienteCatalogoController::class, 'store']);
    Route::get('/edit/{id}', [ClienteCatalogoController::class, 'getEdit']);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
