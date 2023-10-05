<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts=About::all();
        return view("back.pages.about.index",compact("abouts"));
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
        $abouts=About::find($id);
        return view("back.pages.about.edit",compact("abouts"));
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
        $abouts=About::find($request->id);
        if (isset($abouts)){
            $abouts->name=$request->name;
            $abouts->content=$request->content;
            $abouts->text_1_icon=$request->text_1_icon;
            $abouts->text_1=$request->text_1;
            $abouts->text_1_content=$request->text_1_content;
            $abouts->text_2_icon=$request->text_2_icon;
            $abouts->text_2=$request->text_2;
            $abouts->text_2_content=$request->text_2_content;
            $abouts->text_3_icon=$request->text_3_icon;
            $abouts->text_3=$request->text_3;
            $abouts->text_3_content=$request->text_3_content;
            $abouts->image=$request->image;
            if($request->hasFile("image")){
                $path = public_path("front/images/");
                $name = Str::random(10);
                $file = $request->file("image");
                $name .= $name . $file->getClientOriginalName();
                $file->move($path, $name);
                $abouts->image = $name;
                //  $resim = ImageResize::make($resim)->save(public_path("front/images/".$dosyadi));
            }
            $abouts->save();
        }
        return redirect()->route("panel.about.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $abouts = About::where("id",$request->id)->firstOrFail();
        if(isset($abouts)){
            $abouts->delete();
        }
        $abouts->delete();
        return response([
            "error"=>False,
            "message"=>"başarıyla silindi"
        ]);
    }

    public function status(Request  $request){
        $update= $request->statu;
        $updatecheck=$update=="false" ? "0":"1";
        About::where("id",$request->id)->update(["status"=>$updatecheck]);
        return response(["error"=>false,"status"=>$update]);
    }
}
