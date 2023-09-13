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

            $products=$products->orderBy($order,$short)->paginate(5);
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

    public function cart(){
        return view("front.pages.cart");
    }
    public function erkekurunler(){
        $products=Product::where("short_text","erkek")->get();
        return view("front.pages.categories.man",compact("products"));
    }
    public function kadinurunler(){
        $products=Product::where("short_text","kadın")->get();
        return view("front.pages.categories.woman",compact("products"));

    }
    public function cocukurunler(){
        $products=Product::where("short_text","cocuk")->get();
        return view("front.pages.categories.children",compact("products"));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
