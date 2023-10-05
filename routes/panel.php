<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ProductController;

Route::group(["Middleware"=>"panelsetting","prefix"=>"panel","as"=>"panel."],function (){
    Route::get("/",[DashboardController::class,"index"])->name("panel");

    Route::get("/slider",[SliderController::class,"index"])->name("slider.index");
    Route::get("/slider/ekle",[SliderController::class,"create"])->name("slider.create");
    Route::get("/slider/{id}/edit",[SliderController::class,"edit"])->name("slider.edit");
    Route::post("/slider/store",[SliderController::class,"store"])->name("slider.store");
    Route::put("/slider/{id}/update",[SliderController::class,"update"])->name("slider.update");
    Route::delete("/slider/destroy",[SliderController::class,"destroy"])->name("slider.destroy");

    Route::post("/slider/status/update",[SliderController::class,"status"])->name("slider.status");

    Route::get("/urunler",[ProductController::class,"index"])->name("urunler.index");
    Route::get("/urunler/ekle",[ProductController::class,"create"])->name("urunler.create");
    Route::get("/urunler/{id}/edit",[ProductController::class,"edit"])->name("urunler.edit");
    Route::post("/urunler/store",[ProductController::class,"store"])->name("urunler.store");
    Route::put("/urunler/{id}/update",[ProductController::class,"update"])->name("urunler.update");
    Route::delete("/urunler/destroy",[ProductController::class,"destroy"])->name("urunler.destroy");

    Route::post("/slider/status/update",[ProductController::class,"status"])->name("urunler.status");

});
