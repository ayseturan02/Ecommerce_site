<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "name" => "Urun 1",
            "image"=>"urun1.jpeg",
            "category_id" => 1,
            "short_text" => "Kısabilgi",
            "price" => 100,
            "size" => "35",
            "color" => "Beyaz",
            "qty" => 10,
            "status" => "1",
            "content" => "yazarız",
        ]);
        Product::create([
            "name" => "Urun 1",
            "image"=>"urun2.jpeg",
            "category_id" => 1,
            "short_text" => "Kısabilgi",
            "price" => 300,
            "size" => "37",
            "color" => "siyah",
            "qty" => 5,
            "status" => "1",
            "content" => "yazarız",
        ]);
    }
}
