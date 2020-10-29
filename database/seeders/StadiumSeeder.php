<?php

namespace Database\Seeders;

use App\Models\Stadium;
use App\Models\User;
use Illuminate\Database\Seeder;

class StadiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stadium::factory() -> times(10)->create();
        User::factory() -> times(10)->create();
    }
}
