<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoviSpoljniKljuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pesmas', function (Blueprint $table) {
            $table->after('pevac_id', function ($table) {
                $table->foreignId('tekstopisac_id')->constrained('tekstopisacs');
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
        Schema::table('pesmas', function (Blueprint $table) {
            $table->dropColumn('tekstopisac_id');
        });
    }
}
