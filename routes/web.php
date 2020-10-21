<?php

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
use App\Http\Controllers\PizzaController;
Route::get('/', function () {
  return view('welcome');
});

// pizza routes
#pizza view using PizzaController
Route::get('/pizzas', [PizzaController::class, 'index']);
Route::get('/pizzas/create', [PizzaController::class, 'create']);
Route::post('/pizzas', [PizzaController:: class,'store']);
Route::get('/pizzas/{id}', [PizzaController::class,'show']);
Route::delete('/pizzas/{id}', [PizzaController::class,'destroy']);
