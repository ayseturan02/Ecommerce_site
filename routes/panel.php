<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;


Route::group(["Middleware"=>"panelsetting","prefix"=>"panel"],function (){
    Route::get("/",[DashboardController::class,"index"])->name("panel");

});
