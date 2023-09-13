<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;

class PageHomeController extends Controller
{
    public function anasayfa(){

        $sliders=Slider::where("status","1")->get();
        $title="Anasayfa";

        $categories=Category::where("status","1")->get();

        $abouts=About::where("id",1)->get();

        $settings=About::where("name","data")->get();

        $products=Product::where("status","1")->get();

        return view("front.pages.index" ,compact("sliders","title", "categories","abouts","settings","products"));
    }
}
