<?php

namespace Database\Seeders;

use App\Models\Resort;
use Illuminate\Database\Seeder;

class ResortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resort::factory(100)->create();
    }
}
