<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        About::create([

            "name"=>"Eticaret",
            "content"=>"hakkımızda yazısı burda",
            "text_1_icon"=>"icon-truck",
            "text_1"=>"Ücretsiz kargo",
            "text_1_content"=>"Ürünlerimizi ücretsiz kargo ile sizlere ulaştırırız",
            "text_2_icon"=>"icon-refresh2",
            "text_2"=>"Geri İade",
            "text_2_content"=>"30 gün içinde geri iade sağlarız .",
            "text_3_icon"=>"icon-help",
            "text_3"=>"Destek",
            "text_3_content"=>"7/24 bize ulaşabilirsiniz",

        ]);

    }
}

