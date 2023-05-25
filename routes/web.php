<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/web',function(){

    return "<h1>hello in your app";
});









// Route::get('/adel', function () {
//     return '<h1>welcome adel ';
// });

// Route::get('/malek', function () {
//     return ' <h2> welcome malek </h2>';
// })->name("malakRoute");



Route::get('/{name}', function ($name) {
    return "<h1>hello $name";
});

Route::get('/{name}/{prenom}', function ($name, $prenom) {
    return "<h1>hello $name and $prenom  ";
});
// Route::get('user', function () {
//     return view('form');
// });
// Route::post('adel', function (){
//     return "hello adel";
// });
// Route::post('tesks', function () {
//     return '<h3>hello tesks ';
// })->name('tas');
Route::get('sum/{x}/{y?}', function ($x,$y=0)
{
   return '<h3> la somme est :'. $x+$y;
});

Route::middleware('verifyIp')->group(
    function(){
    Route::get('/adel', function () {
        return '<h1>welcome adel ';
    });

    Route::get('/malak', function () {
        return ' <h2> welcome malak </h2>';
    })->name("malakRoute");
    
    });