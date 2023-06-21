<?php

use App\Http\Controllers\AlquilereController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('welcome', function () {return view('welcome');})->name('welcome');

//Auth::routes();
//Route::get('/', [\App\Http\c])
Route::resource('usuarios', \App\Http\Controllers\UsuarioController::class);
Route::resource('alquileres', \App\Http\Controllers\AlquilereController::class);
Route::resource('comentarios', \App\Http\Controllers\ComentarioController::class);


Route::resource('equipos', \App\Http\Controllers\EquipoController::class);
Route::resource('catalogo', \App\Http\Controllers\EquipoController::class);
//Route::resource('carritos', \App\Http\Controllers\CarritoController::class);
//Route::resource('carrito', \App\Http\Controllers\CarritoController::class);


Route::resource('users', \App\Http\Controllers\UserController::class);
Route::get('/miUsuario/{id}/edit', [UserController::class,'showMiuser'])->name('user.showMiuser')->middleware('auth');
//Route::get('/usuarios', [UsuarioController::class,'mostrarUsuarios'])->name('usuarios.mostrarUsuarios') ->middleware('admin');

Route::get('/catalogo', [EquipoController::class,'indexCatalogo'])->name('catalogo');

Route::get('/producto/{id}', [EquipoController::class,'showcatalogo'])->name('producto.showcatalogo');

//Route::get('/producto/{id}', [AlquilereController::class,'crear'])->name('alquilere.crear');
Route::post('/mostrarProducto', [CarritoController::class,'createAlquiler'])->name('carrito.crear');
//Route::get('/carrito', [EquipoController::class,'indexcarrito'])->name('carrito');

//Route::get('/', [ComentarioController::class,'store'])->name('comentario.store');
Route::get('/', [ComentarioController::class,'indexInicio'])->name('comentario.indexInicio');
// Route::post('/', [ComentarioController::class,'crear'])->name('comentario.crear');

Route::get('/miscomentarios/{id?}', [ComentarioController::class,'indexp'])->name('comentario.miscomentarios')->middleware('auth');
Route::put('/comentario/{comentario}', [ComentarioController::class,'update'])->name('comentario.update');
 //Route::get('/welcome', [ComentarioController::class,'crear'])->name('comentario.crear');
 //Route::get('/', [ComentarioController::class,'store'])->name('comentarios.store');
 
Route::post('/catalogoFilter', [EquipoController::class,'indexcarrito'])->name('catalogoFilter');
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::put('/miUsuario/{usuario}', [UserController::class,'update'])->name('usuario.update');

//carrito
// Route::get('/carrito/paypal', [CarritoController::class,'comprobacion'])->name('carritos.comprobacion');
 Route::get('/carrito/index', [CarritoController::class,'index'])->name('carritos.index');
 Route::get('/carrito/{comp}', [CarritoController::class,'mostrarCarrito'])->name('carritos.mostrarCarrito');
 Route::delete('carrito/{id}', [CarritoController::class,'destroy'])->name('carrito.destroy');
 Route::get('carrito/create', [CarritoController::class,'create'])->name('carritos.create');

 Route::post('/carrito/Producto', [CarritoController::class,'storeCarro'])->name('carritos.storeC')->middleware('auth');

 Route::get('/misAlquileress', [CarritoController::class,'pago'])->name('carritos.pago');
 Route::get('/misAlquileresss', [CarritoController::class,'comprobacion'])->name('carritos.comprobacion');
 
 Route::get('/misAlquileres', [AlquilereController::class,'misAlquileres'])->name('carritos.misAlquileres')->middleware('auth');

// Route::get('carrito/{comentario}', [CarritoController::class,'show'])->name('carrito.show');
 //Route::get('carrito/{comentario}/edit', [CarritoController::class,'edit'])->name('carrito.edit');

//  Route::put('carrito/{comentario}', [CarritoController::class,'update'])->name('carrito.update');
 
Route::get('/AvisoLegal', [EquipoController::class,'avisolegal'])->name('equipo.avisolegal');
Route::get('/PoliticaCookies', [EquipoController::class,'politicacookies'])->name('equipo.politicacookies');
Route::get('/PoliticaPrivacidad', [EquipoController::class,'politicaprivacidad'])->name('equipo.politicaprivacidad');
Route::get('/CondicionesVenta', [EquipoController::class,'condicionesventa'])->name('equipo.condicionesventa');
Route::get('/Contacto', [EquipoController::class,'contacto'])->name('equipo.contacto');
Route::get('/PoliticaEnvios', [EquipoController::class,'politicaenvios'])->name('equipo.politicaenvios');

//Route::post('/procesar-pago', [PagoController::class,'procesarpago'])->name('procesar-pago');

Auth::routes();