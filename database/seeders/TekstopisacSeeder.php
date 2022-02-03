<?php

namespace Database\Seeders;

use App\Models\Tekstopisac;
use Illuminate\Database\Seeder;

class TekstopisacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tekstopisac::factory()->count(40)->create();
    }
}
