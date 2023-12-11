<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','InicioController@index');
Route::post('/','InicioController@postIndex');
Route::get('/nosotros','InicioController@nosotros');
Route::get('/contacto','InicioController@contacto');
Route::post('/contacto','InicioController@postContact');


// productos
Route::get('/tinbet','ProductsController@tinbet');
Route::get('/betgana','ProductsController@betgana');
// Route::get('/video-loteria','ProductsController@videoLoteria');
Route::get('/bingoxd','ProductsController@bingoXd');
Route::get('/betganarace','ProductsController@betganaRace');

// cada de apuestas

Route::get('/casa-de-apuestas','HomeBetsController@homeBets');
Route::get('/punto-de-apuestas','HomeBetsController@pointBets');
Route::get('/tiendas-de-apuestas-deportivas','HomeBetsController@storeBets');

// soporte
Route::get('/terminos-y-condiciones','HomeBetsController@terms');

//Events

Route::get('/eventos/peru-gaming-show', 'EventsController@peruGaming');
Route::get('/eventos/expo-amazonica-tingo-maria-2023', 'EventsController@exporFeria');


//Articulos
Route::get('/blog','ArticlesController@index');
Route::get('/blog/franquicias-de-casa-de-apuestas-deportivas-y-casino-online','ArticlesController@franquicias');