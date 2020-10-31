<?php

namespace Database\Seeders;

use App\Models\Stadium;
use App\Models\User;
use Illuminate\Database\Seeder;

class StadiumSeeder extends Seeder
{

    public function run()
    {
        Stadium::factory()->times(10)->create();
    }
}
