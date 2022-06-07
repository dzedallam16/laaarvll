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

Route::get('salem', function () {
    return view('welcome');
});

Route::get('test', function () {
    return view('test');
});

//inscrer client
 Route::get('page_inscrire_client', 'App\Http\Controllers\Affichage@PageInsClient');
//Route::post('insc','App\Http\Controllers\Affichage@InsClient') -> name ('register');


//inscrer vendeur
 Route::get('page_inscrire_vendeur', 'App\Http\Controllers\Affichage@PageInsVendeur');
 Route::get('page_login_client', 'App\Http\Controllers\Affichage@PageLoginClient');
 Route::get('page_login_vendeur', 'App\Http\Controllers\Affichage@PageLoginVendeur');
 Route::get('page_login_admin', 'App\Http\Controllers\Affichage@PageLoginAdmin');
 Route::get('page_home', 'App\Http\Controllers\Affichage@PageHome');
Route::get('page_ajoutetrMateriels', 'App\Http\Controllers\Affichage@PageAjouterMaterieles');
Route::get('page_profil_adm', 'App\Http\Controllers\Affichage@PageProfilAdmin');
Route::post('nouveau_vendeur', 'App\Http\Controllers\crudControle@ajouterVendeur');
Route::get('gestion_vendeurs', 'App\Http\Controllers\crudControle@gestion_vendeurs');
Route::get('modifierVendeur/{id}','App\Http\Controllers\crudControle@formulaire_modifier_vendeur');



Route::post('/modifier_vendeur', 'App\Http\Controllers\crudControle@modifierVendeur');
Route::get('supprimer_vendeur/{id}', 'App\Http\Controllers\crudControle@supprimerVendeur');



Route::post('nouveau_vdeur', 'App\Http\Controllers\crudControle@test');