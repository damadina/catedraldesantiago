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
        Schema::create('catedral_videos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('url');
            $table->integer('orden');
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
        Schema::dropIfExists('catedral_videos');
    }
};
