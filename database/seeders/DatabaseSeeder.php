<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PesmaSeeder;
use Database\Seeders\TekstopisacSeeder;
use Database\Seeders\PevacSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $pesmaS = new PesmaSeeder;
        $pesmaS->run();
        $tekstopisacS = new TekstopisacSeeder;
        $tekstopisacS->run();
        $pevacS = new PevacSeeder;
        $pevacS->run();
    }
}
