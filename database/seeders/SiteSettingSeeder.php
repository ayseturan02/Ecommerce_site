<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        SiteSetting::create([
            'name'=>"adres",
            "data"=>"adres bilgileri burada"
        ]);

        SiteSetting::create([
            "name"=>"phone",
            "data"=>"05527104551"
        ]);

        SiteSetting::create([
            "name"=>"email",
            "data"=>"turan110trn@hotmail.com"
        ]);
        SiteSetting::create([
            "name"=>"harita",
            "data"=>"null"
        ]);
    }
}
