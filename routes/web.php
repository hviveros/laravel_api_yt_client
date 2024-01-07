<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     // return view('welcome');
//     // echo 'API Client';
//     $response = Http::get('http://127.0.0.1:8000/api/clients');
//     $data = $response->json();
//     foreach($data as $client){
//         echo $client['name'].' - '.$client['email'];
//         echo '<br>';
//     }
//     // dd($data);
// });

Route::get('/', 'App\Http\Controllers\ClientController@index')->name('clientes.index');
Route::get('/cliente', 'App\Http\Controllers\ClientController@create');
Route::post('/cliente', 'App\Http\Controllers\ClientController@store')->name('cliente.store');
Route::get('/cliente/delete/{id}', 'App\Http\Controllers\ClientController@destroy')->name('cliente.delete');
Route::post('/cliente/update', 'App\Http\Controllers\ClientController@update')->name('cliente.update');
Route::get('/cliente/{id}', 'App\Http\Controllers\ClientController@show')->name('cliente.view');

