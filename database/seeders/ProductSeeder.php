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
                'name'=> 'Black T-Shirt',
                'price'=> '490',
                'description'=> 'This is Black T-Shirt',
                'category'=> 'T-Shirt',
                'gallery'=> 'https://pyxis.nymag.com/v1/imgs/853/030/fa9bfcf1f90e2fc68cd8a6fddb282fd1b6-men-packaged-dry-crew-neck.2x.rsquare.w600.jpg',
                
            ],
            [
                'name'=> 'Man Shirt',
                'price'=> '1200',
                'description'=> 'Flexible Shirt',
                'category'=> 'Shirt',
                'gallery'=> 'https://assets.myntassets.com/fl_progressive/h_960,q_80,w_720/v1/assets/images/2164373/2017/11/15/11510749192975-Roadster-Men-Brown--Black-Regular-Fit-Checked-Casual-Shirt-8071510749192783-1.jpg',
                
            ],
            [
                'name'=> 'Oneplse 7T',
                'price'=> '37000',
                'description'=> 'Oneplus 7T is Powerfull mobile phone',
                'category'=> 'Mobile',
                'gallery'=> 'https://www.gizmochina.com/wp-content/uploads/2019/09/7t-9_1_1-473x473.png',
                
            ],
            [
                'name'=>'AC',
                'price'=>'45000',
                'description'=>'This is Quality Aircondition',
                'category'=>'AC',
                'gallery'=>'https://5.imimg.com/data5/QP/KA/MY-8294273/daikin-split-ac-500x500.jpg',
            ],
            [
                'name'=>'Sharp Fredge',
                'price'=>'80000',
                'description'=>'This is Quality Fredge',
                'category'=>'AC',
                'gallery'=>'https://esquireelectronicsltd.com/wp-content/uploads/2019/10/Sharp-Inverter-Refrigerator-SJ-EX545P-BK-Price-in-BD.jpg',
            ]
        ]);
    }
}
