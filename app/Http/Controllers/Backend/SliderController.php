<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use ImageResize;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::all();
        return view("back.pages.slider.index",compact("sliders"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("back.pages.slider.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        if($request->hasFile("image")){
           $resim=$request->file("image");
           $dosyadi=time()."-".Str::slug($request->name).".".$resim->getClientOriginalExtension();
           $resim->move(public_path("front/images/".$dosyadi));
         //  $resim = ImageResize::make($resim)->save(public_path("front/images/".$dosyadi));
        }

        Slider::create([
            "name"=>$request->name,
            "content"=>$request->content,
            "link"=>$request->link,
            "status"=>$request->status,
            "image"=>$dosyadi ?? NULL,
        ]);
        return back()->withSuccess("başarıyla oluşturuldu");
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
    public function edit(SliderRequest $request ,$id)
    {
        if($request->hasFile("image")){
            $resim=$request->file("image");
            $dosyadi=time()."-".Str::slug($request->name).".".$resim->getClientOriginalExtension();
            $resim->move(public_path("front/images/".$dosyadi));
            //  $resim = ImageResize::make($resim)->save(public_path("front/images/".$dosyadi));
        }

        Slider::where("id",$id)->update([
            "name"=>$request->name,
            "content"=>$request->content,
            "link"=>$request->link,
            "status"=>$request->status,
            "image"=>$dosyadi ?? NULL,
            $id->save(),
        ]);
        return back()->withSuccess("başarıyla güncellendi");
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

        $slider=Slider::where("id",$id)->first();
        return view("back.pages.slider.edit",compact("slider"));

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
