<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    public function run()
    {
        Product::create([

        'name' => 'Dortmund T-Shirt'  ,
        'Details' => 'Size M' ,
        'Price' => 6499 ,
        ]);

        Product::create([

            'name' => 'Manchester United T-Shirt'  ,
            'Details' => 'Size M' ,
            'Price' => 4999 ,
        ]);

        Product::create([

            'name' => 'Manchester City T-Shirt'  ,
            'Details' => 'Size M' ,
            'Price' => 3299 ,
        ]);

        Product::create([

            'name' => 'Chelsea T-Shirt'  ,
            'Details' => 'Size M' ,
            'Price' => 4799 ,
        ]);

        Product::create([

            'name' => 'England T-Shirt'  ,
            'Details' => 'M' ,
            'Price' => 4599 ,
        ]);

        Product::create([

            'name' => 'Spain T-Shirt'  ,
            'Details' => 'Size M' ,
            'Price' => 4999 ,
        ]);

        Product::create([

            'name' => 'Barcelona T-Shirt'  ,
            'Details' => 'Size M' ,
            'Price' => 4999 ,
        ]);

        Product::create([

            'name' => 'Real Madrid T-Shirt'  ,
            'Details' => 'Size M' ,
            'Price' => 7999 ,
        ]);

        Product::create([
            'name' => 'Napoli T-Shirt'  ,
            'Details' => 'NSize M' ,
            'Price' => 3999 ,
        ]);
    }
}
