<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            "content" => "required",
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "başlık zorunlu",
            "name.string" => "başlık karakterlerden oluşmalı",
            "name.min" => "başlık minimum 3 karakterden oluşmalı",
            "content.required"=>"içerik zorunlu"
        ];
    }
}
