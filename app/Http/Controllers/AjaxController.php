<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class AjaxController extends Controller
{
    public function iletisimkaydet(Request $request){

     //   $data = $request->all();
     //   $data["ip"] =request()->ip();
     //      return $data;

        $newdata=[
            "name"=>Str::title($request->name),
            "email"=>$request->name,
            "subject"=>$request->subject,
            "message"=>$request->message,
            "ip"=>request()->ip(),
        ];
        $sonkaydedilen = Contact::create($newdata);
        return back()->withSuccess("Başarıyla Gönderildi");
    }

}
