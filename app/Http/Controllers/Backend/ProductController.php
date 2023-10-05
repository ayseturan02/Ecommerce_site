<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view("back.pages.urunler.index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back.pages.urunler.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products=new Product();
        $products->name=$request->name;
        $products->slug=$request->slug;
        $products->category_id=$request->category_id;
        $products->short_text=$request->short_text;
        $products->price=$request->price;
        $products->size=$request->size;
        $products->color=$request->color;
        $products->qty=$request->qty;
        $products->status=$request->status;
        $products->content=$request->content;
        $products->image=$request->image;
        if($request->hasFile("image")){
            $path = public_path("front/images/");
            $name = Str::random(10);
            $file = $request->file("image");
            $name .= $name . $file->getClientOriginalName();
            $file->move($path, $name);
            $products->image = $name;
            //  $resim = ImageResize::make($resim)->save(public_path("front/images/".$dosyadi));
        }
        $products->save();
        return redirect()->route("panel.urunler.index");
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
        $products=Product::find($id);
        return view("back.pages.urunler.edit",compact("products"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $products=Product::find($request->id);
        if (isset($products)){
            $products->name=$request->name;
            $products->slug=$request->slug;
            $products->category_id=$request->category_id;
            $products->short_text=$request->short_text;
            $products->price=$request->price;
            $products->size=$request->size;
            $products->color=$request->color;
            $products->qty=$request->qty;
            $products->status=$request->status;
            $products->content=$request->content;
            $products->image=$request->image;
            if($request->hasFile("image")){
                $path = public_path("front/images/");
                $name = Str::random(10);
                $file = $request->file("image");
                $name .= $name . $file->getClientOriginalName();
                $file->move($path, $name);
                $products->image = $name;
                //  $resim = ImageResize::make($resim)->save(public_path("front/images/".$dosyadi));
            }
            $products->save();
        }
        return redirect()->route("panel.urunler.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $products = Product::where("id",$request->id)->firstOrFail();
        if(isset($products)){
            $products->delete();
        }
        $products->delete();
        return response([
            "error"=>False,
            "message"=>"başarıyla silindi"
        ]);

    }
    public function status(Request  $request){
        $update= $request->statu;
        $updatecheck=$update=="false" ? "0":"1";
        Product::where("id",$request->id)->update(["status"=>$updatecheck]);
        return response(["error"=>false,"status"=>$update]);
    }
}
