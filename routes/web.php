<?php

use App\Http\Controllers\Frontend\PageHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\AjaxController;
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


Route::group(["Middleware"=>"sitesetting"],function (){
    Route::get("/",[PageHomeController::class,"anasayfa"])->name("anasayfa");
    Route::get("/hakkimizda",[PageController::class,"hakkimizda"])->name("hakkimizda");
    Route::get("/iletisim",[PageController::class,"iletisim"])->name("iletisim");
    Route::get("/urun/{slug}",[PageController::class,"urundetay"])->name("urundetay");
    Route::get("/urunler",[PageController::class,"urunler"])->name("urunler");
    Route::get("/erkek-ayakkabı",[PageController::class,"erkekurunler"])->name("Erkekurunler");
    Route::get("/kadın-ayakkabı",[PageController::class,"kadinurunler"])->name("Kadınurunler");
    Route::get("/cocuk-ayakkabı",[PageController::class,"cocukurunler"])->name("Cocukurunler");
    Route::get("/indirimdekiler",[PageController::class,"indirimdekiurunler"])->name("indirimdekiurunler");
    Route::get("/sepet",[PageController::class,"cart"])->name("sepet");

    Route::get("/iletişim",[PageController::class,"iletisim"])->name("iletisim");
    Route::post("/iletisim/kaydet",[AjaxController::class,"iletisimkaydet"])->name("iletisim.kaydet");

});

