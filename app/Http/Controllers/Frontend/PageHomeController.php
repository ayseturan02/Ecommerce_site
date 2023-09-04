<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;

class PageHomeController extends Controller
{
    public function anasayfa(){
        $sliders=Slider::where("status","1")->first();
        $title="Anasayfa";

        $categories=Category::where("status","1")->get();
        return view("front.pages.index" ,compact("sliders","title", "categories"));
    }
}
