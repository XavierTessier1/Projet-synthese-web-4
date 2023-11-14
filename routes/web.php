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

use App\Models\TypeCommodite;
use App\Models\TypeEntreprise;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix'=>'user', 'controller'=> UserController::class, 'where'=>['user'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('user.index');
    Route::get('/{user}', 'show')->name('user.show');
    // Formulaire
    Route::get('/create', 'create')->name('user.create');
    Route::get('/{user}/edit', 'edit')->name('user.edit');
    // Traitement
    Route::post('/', 'store')->name('user.store');
    Route::post('/{user}', 'update')->name('user.update');
});

Route::group(['prefix'=>'entreprise', 'controller'=> EntrepriseController::class, 'where'=>['entreprise'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('entreprise.index');
    Route::get('/{entreprise}', 'show')->name('entreprise.show');
    // Formulaire
    Route::get('/create', 'create')->name('entreprise.create');
    Route::get('/{entreprise}/edit', 'edit')->name('entreprise.edit');
    // Traitement
    Route::post('/', 'store')->name('entreprise.store');
    Route::post('/{entreprise}', 'update')->name('entreprise.update');
});

Route::group(['prefix'=>'mrc', 'controller'=> MrcController::class, 'where'=>['mrc'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('mrc.index');
    Route::get('/{mrc}', 'show')->name('mrc.show');
    // Formulaire
    Route::get('/create', 'create')->name('mrc.create');
    Route::get('/{mrc}/edit', 'edit')->name('mrc.edit');
    // Traitement
    Route::post('/', 'store')->name('mrc.store');
    Route::post('/{mrc}', 'update')->name('mrc.update');
});

Route::group(['prefix'=>'evenement', 'controller'=> EvenementController::class, 'where'=>['evenement'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('evenement.index');
    Route::get('/{evenement}', 'show')->name('evenement.show');
    // Formulaire
    Route::get('/create', 'create')->name('evenement.create');
    Route::get('/{evenement}/edit', 'edit')->name('evenement.edit');
    // Traitement
    Route::post('/', 'store')->name('evenement.store');
    Route::post('/{evenement}', 'update')->name('evenement.update');
});

Route::group(['prefix'=>'emplacement', 'controller'=> EmplacementController::class, 'where'=>['emplacement'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('emplacement.index');
    Route::get('/{emplacement}', 'show')->name('emplacement.show');
    // Formulaire
    Route::get('/create', 'create')->name('emplacement.create');
    Route::get('/{emplacement}/edit', 'edit')->name('emplacement.edit');
    // Traitement
    Route::post('/', 'store')->name('emplacement.store');
    Route::post('/{emplacement}', 'update')->name('emplacement.update');
});

Route::group(['prefix'=>'forfait', 'controller'=> ForfaitController::class, 'where'=>['forfait'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('forfait.index');
    Route::get('/{forfait}', 'show')->name('forfait.show');
    // Formulaire
    Route::get('/create', 'create')->name('forfait.create');
    Route::get('/{forfait}/edit', 'edit')->name('forfait.edit');
    // Traitement
    Route::post('/', 'store')->name('forfait.store');
    Route::post('/{forfait}', 'update')->name('forfait.update');
});

Route::group(['prefix'=>'favori', 'controller'=> FavoriController::class, 'where'=>['favori'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('favori.index');
    Route::get('/{favori}', 'show')->name('favori.show');
    // Formulaire
    Route::get('/create', 'create')->name('favori.create');
    Route::get('/{favori}/edit', 'edit')->name('favori.edit');
    // Traitement
    Route::post('/', 'store')->name('favori.store');
    Route::post('/{favori}', 'update')->name('favori.update');
});

Route::group(['prefix'=>'hebergement', 'controller'=> HebergementController::class, 'where'=>['hebergement'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('hebergement.index');
    Route::get('/{hebergement}', 'show')->name('hebergement.show');
    // Formulaire
    Route::get('/create', 'create')->name('hebergement.create');
    Route::get('/{hebergement}/edit', 'edit')->name('hebergement.edit');
    // Traitement
    Route::post('/', 'store')->name('hebergement.store');
    Route::post('/{hebergement}', 'update')->name('hebergement.update');
});

Route::group(['prefix'=>'type_commodite', 'controller'=> TypeCommoditeController::class, 'where'=>['type_commodite'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('type_commodite.index');
    Route::get('/{type_commodite}', 'show')->name('type_commodite.show');
    // Formulaire
    Route::get('/create', 'create')->name('type_commodite.create');
    Route::get('/{type_commodite}/edit', 'edit')->name('type_commodite.edit');
    // Traitement
    Route::post('/', 'store')->name('type_commodite.store');
    Route::post('/{type_commodite}', 'update')->name('type_commodite.update');
});

Route::group(['prefix'=>'type_entreprise', 'controller'=> TypeEntrepriseController::class, 'where'=>['type_entreprise'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('type_entreprise.index');
    Route::get('/{type_entreprise}', 'show')->name('type_entreprise.show');
    // Formulaire
    Route::get('/create', 'create')->name('type_entreprise.create');
    Route::get('/{type_entreprise}/edit', 'edit')->name('type_entreprise.edit');
    // Traitement
    Route::post('/', 'store')->name('type_entreprise.store');
    Route::post('/{type_entreprise}', 'update')->name('type_entreprise.update');
});

View::composer('type_commodite.checkboxes', function ($view) {
    $view->with('commodites', TypeCommodite::orderBy('categorie')->orderBy('nom')->get());
});

View::composer('type_entreprise.checkboxes', function ($view) {
    $view->with('types', TypeEntreprise::orderBy('nom')->get());
});
