<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

        'name' => 'Dortmund T-Shirt'  ,
        'slug' => 'Dortmund T-Shirt'  ,
        'Details' => 'Borussia Dortmund T-Shirt Size M' ,
            'Price' => 4999 ,
        'Description' => 'lorem ipsum .....' ,

        ]);

        Product::create([

            'name' => 'Manchester United T-Shirt'  ,
            'slug' => 'Manchester United T-Shirt'  ,
            'Details' => 'Manchester United T-Shirt Size M' ,
            'Price' => 4999 ,
            'Description' => 'lorem ipsum .....' ,

        ]);

        Product::create([

            'name' => 'Manchester City T-Shirt'  ,
            'slug' => 'Manchester City T-Shirt'  ,
            'Details' => 'Manchester Cty T-Shirt Size M' ,
            'Price' => 4999 ,
            'Description' => 'lorem ipsum .....' ,

        ]);

        Product::create([

            'name' => 'Chelsea T-Shirt'  ,
            'slug' => 'Chelsea T-Shirt'  ,
            'Details' => 'Chelsea T-Shirt Size M' ,
            'Price' => 4999 ,
            'Description' => 'lorem ipsum .....' ,

        ]);

        Product::create([

            'name' => 'England T-Shirt'  ,
            'slug' => 'England T-Shirt'  ,
            'Details' => 'England T-Shirt Size M' ,
            'Price' => 4999 ,
            'Description' => 'lorem ipsum .....' ,

        ]);

        Product::create([

            'name' => 'Spain T-Shirt'  ,
            'slug' => 'Spain T-Shirt'  ,
            'Details' => 'Spain T-Shirt Size M' ,
            'Price' => 4999 ,
            'Description' => 'lorem ipsum .....' ,

        ]);

        Product::create([

            'name' => 'Barcelona T-Shirt'  ,
            'slug' => 'Barcelona T-Shirt'  ,
            'Details' => 'Barcelona T-Shirt Size M' ,
            'Price' => 4999 ,
            'Description' => 'lorem ipsum .....' ,

        ]);

        Product::create([

            'name' => 'Real Madrid T-Shirt'  ,
            'slug' => 'Real Madrid T-Shirt'  ,
            'Details' => 'Real Madrid T-Shirt Size M' ,
            'Price' => 4999 ,
            'Description' => 'lorem ipsum .....' ,

        ]);

        Product::create([

            'name' => 'Napoli T-Shirt'  ,
            'slug' => 'Napoli T-Shirt'  ,
            'Details' => 'Napoli T-Shirt Size M' ,
            'Price' => 4999 ,
            'Description' => 'lorem ipsum .....' ,

        ]);
    }
}
