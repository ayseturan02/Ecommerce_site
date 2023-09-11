<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function urunler(){
        $products=Product::where("status","1")->paginate(1);
        return view("front.pages.products",compact("products"));
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
