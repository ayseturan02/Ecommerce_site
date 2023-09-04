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
            "image" => null,
            "thumbnail"=>null,
            "cat_ust"=>null,
            "name" => "Erkek",
            "content" => "Erkek Ayakkabı",
            "status" => "1"
        ]);

            Category::create([
                "image" => null,
                "thumbnail"=>null,
                "cat_ust"=>$erkek->id,
                "name" => "Erkek Converse",
                "content" => "Erkek Converseler",
                "status" => "1"
        ]);

      $kadın=Category::create([
            "image" => null,
            "thumbnail"=>null,
            "cat_ust"=>null,
            "name" => "Kadın",
            "content" => "Kadın Ayakkabı",
            "status" => "1"
        ]);

        Category::create([
            "image" => null,
            "thumbnail"=>null,
            "cat_ust"=>$kadın->id,
            "name" => "Kadın Converse",
            "content" => "Kadın Converseler",
            "status" => "1"
        ]);

        $cocuk=Category::create([
            "image" => null,
            "thumbnail"=>null,
            "cat_ust"=>null,
            "name" => "Çocuk",
            "content" => "Çocuk Ayakkabı",
            "status" => "1"
        ]);
        Category::create([
            "image" => null,
            "thumbnail"=>null,
            "cat_ust"=>$cocuk->id,
            "name" => "Çocuk Converse",
            "content" => "Çocuk Converseler",
            "status" => "1"
        ]);
    }
}
