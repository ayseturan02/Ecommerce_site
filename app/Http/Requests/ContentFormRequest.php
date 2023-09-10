<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            "name" => "required | string | min:3",
            "email" => "required | email",
            "subject" => "required",
            "message" => "required"
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "isim soyisim zorunlu",
            "name.string" => "isim soyisim karakterlerden oluşmalı",
            "name.min" => "isim soyisim minimum 3 karakterden oluşmalı",
            "email.required" => "e-posta zorunlu",
            "email.email" => "geçersiz karakter",
            "subject.required" => "konu kısmı boş geçilemez",
            "message.required" => "mesaj kısmı boş geçilemez"
        ];
    }

}
