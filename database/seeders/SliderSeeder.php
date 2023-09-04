<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     Slider::create([

         "image" => "https://fakeimg.pl/250×100/",
         "name" => "Slider1",
         "content" => "Eticaret sitemize hoşgeldiniz",
         "link" => "urunler",
         "status" => "1"

     ]);
    }
}
