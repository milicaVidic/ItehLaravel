<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoviNazivBrPesama extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tekstopisacs', function (Blueprint $table) {
            $table->renameColumn('brojPesama', 'broj_pesama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tekstopisacs', function (Blueprint $table) {
            $table->renameColumn('broj_pesama', 'brojPesama');
        });
    }
}
