<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        //
        DB::table('products')->insert([
            [
                'name'=> 'Redmi K20 Pro',
                'price'=> '28000',
                'description'=> 'A Smartphone is budget best phone with SD 855!',
                'category'=> 'Mobile',
                'gallery'=> 'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-k20pro-1.jpg',
                
            ],
            [
                'name'=> 'Mi 10 Lite',
                'price'=> '30000',
                'description'=> 'A Smartphone is budget best phone with SD 765!',
                'category'=> 'Mobile',
                'gallery'=> 'https://i01.appmifile.com/webfile/globalimg/products/pc/mi-note-10-lite/section17.png',
                
            ],
            [
                'name'=> 'Redmi TV',
                'price'=> '35000',
                'description'=> 'Crystal Clear TV',
                'category'=> 'TV',
                'gallery'=> 'https://i01.appmifile.com/webfile/globalimg/in/mi-led-tv-4x-pro-43/pc_new/index01-top.jpg',
                
            ]
        ]);
    }
}
