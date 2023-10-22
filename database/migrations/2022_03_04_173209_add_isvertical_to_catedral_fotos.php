<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsverticalToCatedralFotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catedral_fotos', function (Blueprint $table) {
            $table->boolean('isvertical')->default(false)->after('orden');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catedral_fotos', function (Blueprint $table) {
            $table->dropColumn('isvertical');
        });
    }
}
