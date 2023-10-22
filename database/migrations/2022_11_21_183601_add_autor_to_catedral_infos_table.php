<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catedral_infos', function (Blueprint $table) {
            $table->string('autor')->default("Salvador Yzquierdo Peiró. Historiador")->after('orden');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catedral_infos', function (Blueprint $table) {
            $table->dropColumn('autor');
        });
    }
};
