<?php

use\App\Http\Controllers\UserController;
use\App\Http\Controllers\EntrepriseController;
use\App\Http\Controllers\MrcController;
use\App\Http\Controllers\EvenementController;
use\App\Http\Controllers\EmplacementController;
use\App\Http\Controllers\ForfaitController;
use\App\Http\Controllers\FavoriController;
use\App\Http\Controllers\HebergementController;
use\App\Http\Controllers\TypeCommoditeController;
use\App\Http\Controllers\TypeEntrepriseController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'user', 'controller'=> UserController::class, 'where'=>['user'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('user.index');
    Route::get('/{user}', 'show')->name('user.show');
    // Formulaire
    Route::get('/create', 'create')->name('user.create');
    Route::get('/{user}/edit', 'edit')->name('user.edit');
    // Traitement
    Route::post('/', 'store')->name('user.store');
    Route::put('/{user}', 'update')->name('user.update');
});

Route::group(['prefix'=>'entreprise', 'controller'=> EntrepriseController::class, 'where'=>['entreprise'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('entreprise.index');
    Route::get('/{entreprise}', 'show')->name('entreprise.show');
    // Formulaire
    Route::get('/create', 'create')->name('entreprise.create');
    Route::get('/{entreprise}/edit', 'edit')->name('entreprise.edit');
    // Traitement
    Route::post('/', 'store')->name('entreprise.store');
    Route::put('/{entreprise}', 'update')->name('entreprise.update');
});

Route::group(['prefix'=>'mrc', 'controller'=> MrcController::class, 'where'=>['mrc'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('mrc.index');
    Route::get('/{mrc}', 'show')->name('mrc.show');
    // Formulaire
    Route::get('/create', 'create')->name('mrc.create');
    Route::get('/{mrc}/edit', 'edit')->name('mrc.edit');
    // Traitement
    Route::post('/', 'store')->name('mrc.store');
    Route::put('/{mrc}', 'update')->name('mrc.update');
});

Route::group(['prefix'=>'evenement', 'controller'=> EvenementController::class, 'where'=>['evenement'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('evenement.index');
    Route::get('/{evenement}', 'show')->name('evenement.show');
    // Formulaire
    Route::get('/create', 'create')->name('evenement.create');
    Route::get('/{evenement}/edit', 'edit')->name('evenement.edit');
    // Traitement
    Route::post('/', 'store')->name('evenement.store');
    Route::put('/{evenement}', 'update')->name('evenement.update');
});

Route::group(['prefix'=>'emplacement', 'controller'=> EmplacementController::class, 'where'=>['emplacement'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('emplacement.index');
    Route::get('/{emplacement}', 'show')->name('emplacement.show');
    // Formulaire
    Route::get('/create', 'create')->name('emplacement.create');
    Route::get('/{emplacement}/edit', 'edit')->name('emplacement.edit');
    // Traitement
    Route::post('/', 'store')->name('emplacement.store');
    Route::put('/{emplacement}', 'update')->name('emplacement.update');
});

Route::group(['prefix'=>'forfait', 'controller'=> ForfaitController::class, 'where'=>['forfait'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('forfait.index');
    Route::get('/{forfait}', 'show')->name('forfait.show');
    // Formulaire
    Route::get('/create', 'create')->name('forfait.create');
    Route::get('/{forfait}/edit', 'edit')->name('forfait.edit');
    // Traitement
    Route::post('/', 'store')->name('forfait.store');
    Route::put('/{forfait}', 'update')->name('forfait.update');
});

Route::group(['prefix'=>'favori', 'controller'=> FavoriController::class, 'where'=>['favori'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('favori.index');
    Route::get('/{favori}', 'show')->name('favori.show');
    // Formulaire
    Route::get('/create', 'create')->name('favori.create');
    Route::get('/{favori}/edit', 'edit')->name('favori.edit');
    // Traitement
    Route::post('/', 'store')->name('favori.store');
    Route::put('/{favori}', 'update')->name('favori.update');
});

Route::group(['prefix'=>'hebergement', 'controller'=> HebergementController::class, 'where'=>['hebergement'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('hebergement.index');
    Route::get('/{hebergement}', 'show')->name('hebergement.show');
    // Formulaire
    Route::get('/create', 'create')->name('hebergement.create');
    Route::get('/{hebergement}/edit', 'edit')->name('hebergement.edit');
    // Traitement
    Route::post('/', 'store')->name('hebergement.store');
    Route::put('/{hebergement}', 'update')->name('hebergement.update');
});

Route::group(['prefix'=>'typeCommodite', 'controller'=> TypeCommoditeController::class, 'where'=>['typeCommodite'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('typeCommodite.index');
    Route::get('/{typeCommodite}', 'show')->name('typeCommodite.show');
    // Formulaire
    Route::get('/create', 'create')->name('typeCommodite.create');
    Route::get('/{typeCommodite}/edit', 'edit')->name('typeCommodite.edit');
    // Traitement
    Route::post('/', 'store')->name('typeCommodite.store');
    Route::put('/{typeCommodite}', 'update')->name('typeCommodite.update');
});

Route::group(['prefix'=>'typeEntreprise', 'controller'=> TypeEntrepriseController::class, 'where'=>['typeEntreprise'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('typeEntreprise.index');
    Route::get('/{typeEntreprise}', 'show')->name('typeEntreprise.show');
    // Formulaire
    Route::get('/create', 'create')->name('typeEntreprise.create');
    Route::get('/{typeEntreprise}/edit', 'edit')->name('typeEntreprise.edit');
    // Traitement
    Route::post('/', 'store')->name('typeEntreprise.store');
    Route::put('/{typeEntreprise}', 'update')->name('typeEntreprise.update');
});
