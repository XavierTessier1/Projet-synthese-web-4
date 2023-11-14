<?php

use App\Http\Controllers\Api\EntrepriseController;
use App\Http\Controllers\Api\EmplacementController;
use App\Http\Controllers\Api\EvenementController;
use App\Http\Controllers\Api\ForfaitController;
use App\Http\Controllers\Api\HebergementController;
use App\Http\Controllers\Api\MrcController;
use App\Http\Controllers\Api\TypeCommoditeController;
use App\Http\Controllers\Api\TypeEntrepriseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    "prefix" => "entreprise",
    "controller" => EntrepriseController::class,
    "where" => ["entreprise" => "[0-9]+"],
    "as" => "entreprise.",
], function () {
    Route::get("", "index")->name("index");
    Route::get("{entreprise}", "show")->name("show");
    Route::get("{entreprise}/aimer", "aimer")->name("aimer");
});

Route::group([
    "prefix" => "emplacement",
    "controller" => EmplacementController::class,
    "where" => ["emplacement" => "[0-9]+"],
    "as" => "emplacement.",
], function () {
    Route::get("", "index")->name("index");
    Route::get("{emplacement}", "show")->name("show");
    Route::get("{emplacement}/aimer", "aimer")->name("aimer");
});

Route::group([
    "prefix" => "evenement",
    "controller" => EvenementController::class,
    "where" => ["evenement" => "[0-9]+"],
    "as" => "evenement.",
], function () {
    Route::get("", "index")->name("index");
    Route::get("{evenement}", "show")->name("show");
    Route::get("{evenement}/aimer", "aimer")->name("aimer");
});

Route::group([
    "prefix" => "forfait",
    "controller" => ForfaitController::class,
    "where" => ["forfait" => "[0-9]+"],
    "as" => "forfait.",
], function () {
    Route::get("", "index")->name("index");
    Route::get("{forfait}", "show")->name("show");
    Route::get("{forfait}/aimer", "aimer")->name("aimer");
});

Route::group([
    "prefix" => "hebergement",
    "controller" => HebergementController::class,
    "where" => ["hebergement" => "[0-9]+"],
    "as" => "hebergement.",
], function () {
    Route::get("", "index")->name("index");
    Route::get("{hebergement}", "show")->name("show");
    Route::get("{hebergement}/aimer", "aimer")->name("aimer");
});

Route::group([
    "prefix" => "mrc",
    "controller" => MrcController::class,
    "where" => ["mrc" => "[0-9]+"],
    "as" => "mrc.",
], function () {
    Route::get("", "index")->name("index");
    Route::get("{mrc}", "show")->name("show");
    Route::get("{mrc}/aimer", "aimer")->name("aimer");
});

Route::group([
    "prefix" => "type_commodite",
    "controller" => TypeCommoditeController::class,
    "where" => ["type_commodite" => "[0-9]+"],
    "as" => "type_commodite.",
], function () {
    Route::get("", "index")->name("index");
    Route::get("{type_commodite}", "show")->name("show");
});

Route::group([
    "prefix" => "type_entreprise",
    "controller" => TypeEntrepriseController::class,
    "where" => ["type_entreprise" => "[0-9]+"],
    "as" => "type_entreprise.",
], function () {
    Route::get("", "index")->name("index");
    Route::get("{type_entreprise}", "show")->name("show");
});
