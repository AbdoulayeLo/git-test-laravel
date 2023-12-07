<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\FormationController;

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

Route::get('apprenant/{nom}-{id}', function ($string,$int) {
    return view('apprenant');
}); 

// 
Route::get('/liste-apprenants',[ApprenantController::class,'index']);
Route::get('/liste-formations',[FormationController::class,'indexFor']);

// AJOUTER APPRENANT
Route::post('/Ajoutapprenant',function(){
    $apprenant = new App\Apprenant;
    $apprenant->nom= request('nom');
    $apprenant->nom= request('nom');
    $apprenant->nom= request('email');

    $apprenant->save();
});