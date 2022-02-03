<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pevac;

class PevacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pevac::factory()->count(65)->create();
    }
}
