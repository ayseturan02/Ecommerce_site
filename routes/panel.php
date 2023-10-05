<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\AboutController;

Route::group(["Middleware"=>"panelsetting","prefix"=>"panel","as"=>"panel."],function (){
   // Route::get("/",[DashboardController::class,"index"])->name("panel");

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
    Route::post("/urunler/{id}/update",[ProductController::class,"update"])->name("urunler.update");
    Route::delete("/urunler/destroy",[ProductController::class,"destroy"])->name("urunler.destroy");
    Route::post("/urunler/status/update",[ProductController::class,"status"])->name("urunler.status");


    Route::get("/",[AboutController::class,"index"])->name("about.index");
    Route::get("/about/ekle",[AboutController::class,"create"])->name("about.create");
    Route::get("/about/{id}/edit",[AboutController::class,"edit"])->name("about.edit");
    Route::get("/about/store",[AboutController::class,"store"])->name("about.store");
    Route::get("/about/{id}/update",[AboutController::class,"update"])->name("about.update");
    Route::get("/about/destroy",[AboutController::class,"destroy"])->name("about.destroy");
    Route::post("/about/status/update",[AboutController::class,"status"])->name("about.status");
});
