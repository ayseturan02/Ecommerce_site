<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class AjaxController extends Controller
{
    public function iletisimkaydet(ContentFormRequest $request){

     //   $data = $request->all();
     //   $data["ip"] =request()->ip();
     //      return $data;

     /*   $validationdate = $request->validate([
           "name"=>"required | string | min:3",
            "email"=>"required | email",
            "subject"=>"required",
            "message"=>"required"
        ],[
            "name.required"=>"isim soyisim zorunlu",
            "name.string"=>"isim soyisim karakterlerden oluşmalı",
            "name.min"=>"isim soyisim minimum 3 karakterden oluşmalı",
            "email.required"=>"e-posta zorunlu",
            "email.email"=>"geçersiz karakter",
            "subject.required"=>"konu kısmı boş geçilemez",
            "message.required"=>"mesaj kısmı boş geçilemez"
        ]);*/
        $newdata=[
            "name"=>Str::title($request->name),
            "email"=>$request->name,
            "subject"=>$request->subject,
            "message"=>$request->message,
            "ip"=>request()->ip(),
        ];
        $sonkaydedilen = Contact::create($newdata);
        return back()->withSuccess(["message"=>"Başarıyla Gönderildi"]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("anasayfa");
    }

}
