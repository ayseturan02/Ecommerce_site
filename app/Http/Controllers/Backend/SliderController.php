<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Http\Requests;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $sliders=Slider::all();
        return view("back.pages.slider.index",compact("sliders"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create(){
        return view("back.pages.slider.edit");
    }




    public function store(SliderRequest $request)
    {
        $slider = new Slider();
        $slider->name=$request->name;
        $slider->content=$request->content;
        $slider->link=$request->link;
        $slider->status=$request->status;
        $slider->image=$request->image;
        if($request->hasFile("image")){
            $path = public_path("front/images/");
            $name = Str::random(10);
            $file = $request->file("image");
            $name .= $name . $file->getClientOriginalName();
            $file->move($path, $name);
            $slider->image = $name;
         //  $resim = ImageResize::make($resim)->save(public_path("front/images/".$dosyadi));
        }
        $slider->save();

        /*
        Slider::create([
            "name"=>$request->name,
            "content"=>$request->content,
            "link"=>$request->link,
            "status"=>$request->status,
            "image"=>$image ?? NULL,
        ]); */
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $slider=Slider::where("id",$id)->first();
        return view("back.pages.slider.edit",compact("slider"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $id)
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
        ]);
        return back()->withSuccess("başarıyla güncellendi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $slider = Slider::where("id",$request->id)->firstOrFail();
       if (file_exists($slider->image)){
           if (!empty($slider->image)) {
               unlink($slider->image);
           }
       }
        $slider->delete();
        return back()->withSuccess("Başarıyla Silindi");
    }

    public function status(Request  $request){
        $update= $request->statu;
        $updatecheck=$update=="false" ? "0":"1";
        Slider::where("id",$request->id)->update(["status"=>$updatecheck]);
        return response(["error"=>false,"status"=>$update]);
    }
}
