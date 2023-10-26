<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class PageController extends Controller
{

    public function urunler(Request $request){
        $size=$request->size ?? null;
        $color=$request->color ?? null;
        $startprice=$request->startprice ?? null;
        $endprice=$request->endprice ?? null;

        $order=$request->order ?? "id";
        $short=$request->short ?? "desc";
        $products=Product::where("status","1")->select(["id","image","name","slug","size","color","price","category_id"])
            ->where(function($q)  use($size,$color,$startprice,$endprice) {
                if (!empty($size)){
                     $q->where("size",$size);
                }
                if (!empty($color)){
                     $q->where("color",$color);
                }
                if (!empty($startprice && $endprice)){
                    $q->whereBetween("price",[$startprice,$endprice]);
                }
                return $q;
            })
            ->with("category:id,name,slug");
            $minprice=$products->min("price");
            $maxprice=$products->max("price");
            $sizelists=Product::where("status","1")->groupBy("size")->pluck("size")->toArray();
            $colors=Product::where("status","1")->groupBy("color")->pluck("color")->toArray();

            $products=$products->orderBy($order,$short)->paginate(3);
         $categories = Category::where("status","1")->where("cat_ust",null)->withCount("items")->get();
        return view("front.pages.products",compact("products","categories","minprice","maxprice","sizelists","colors"));
    }


    public function indirimdekiurunler(){
        return view("front.pages.products");
    }
    public function urundetay($slug){
        $products=Product::whereSlug($slug)->first();
        return view("front.pages.product",compact("products"));
    }
    public function hakkimizda(){
        $abouts=About::where("id",1)->get();
        return view("front.pages.about",compact("abouts"));
    }
    public function iletisim(){
        return view("front.pages.contact");
    }
    public function erkekurunler(){
        $products=Product::where("short_text","Erkek")->get();
        return view("front.pages.categories.man",compact("products"));
    }
    public function kadinurunler(){
        $products=Product::where("short_text","Kadın")->get();
        return view("front.pages.categories.woman",compact("products"));

    }
    public function cocukurunler(){
        $products=Product::where("short_text","Cocuk")->get();
        return view("front.pages.categories.children",compact("products"));
    }

}
