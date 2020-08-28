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


// Dodati akciju index u ‘CarsController’ i rutu “/cars” koja izrvrsava ovu akciju
// Unutar akcije dobaviti sve automobile iz baze preko klase Car i proslediti u view fajl
// Kreirati view fajl i ispisati u njemu nazive automobila koristeci blade sintaksu
// Komitovati urađeno


Route::get('/', function () {
    $name = "to Cars Project";
    $age = 33;
    return view('welcome', compact('name', 'age'));
});

Route::get('/about', function(){
    
    return view('about');
});

Route::get('/cars', 'CarsController@index');
Route::get('/cars/{id}', 'CarsController@show')->name('oneCar');


