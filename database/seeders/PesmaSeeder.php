<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pesma;

class PesmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pesma::factory()->count(80)->create();
    }
}
