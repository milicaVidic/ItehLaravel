<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaInstagram extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pevacs', function (Blueprint $table) {
            $table->after('godine', function ($table) {
                $table->string('instagram');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pevacs', function (Blueprint $table) {
            $table->dropColumn('instagram');
        });
    }
}
