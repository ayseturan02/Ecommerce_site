<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Webmozart\Assert\Tests\StaticAnalysis\string;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $erkek=Category::create([
            "image" => "erkek1.jpeg",
            "thumbnail"=>null,
            "cat_ust"=>null,
            "name" => "Erkek",
            "content" => "Erkek Ayakkabı",
            "status" => "1"
        ]);

      $kadın=Category::create([
            "image" => "kadın1.jpeg",
            "thumbnail"=>null,
            "cat_ust"=>null,
            "name" => "Kadın",
            "content" => "Kadın Ayakkabı",
            "status" => "1"
        ]);


        $cocuk=Category::create([
            "image" => "cocuk1.jpeg",
            "thumbnail"=>null,
            "cat_ust"=>null,
            "name" => "Cocuk",
            "content" => "Çocuk Ayakkabı",
            "status" => "1"
        ]);

    }
}
