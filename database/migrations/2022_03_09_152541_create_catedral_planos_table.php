<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatedralPlanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catedral_planos', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->text('piePlano');
            $table->string('nombrePlano');
            $table->integer('orden');
            $table->boolean('isvertical')->default(false);
            $table->unsignedBigInteger('catedral_id')->nullable();
            $table->foreign('catedral_id')->references('id')->on('catedrals')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catedral_planos');
    }
}
