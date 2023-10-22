<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Catedral;

class CreateCatedralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catedrals', function (Blueprint $table) {
            $table->id();
            $table->string('urlPortada')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->integer('orden');
            $table->text('resumen');
            $table->text('historia');
            $table->text('mensaje')->nullable();
            $table->string('prefijoH1')->nullable();
            $table->enum('status',[Catedral::BORRADOR,Catedral::REVISION,Catedral::PUBLICADO])->default(Catedral::BORRADOR);
            $table->enum('categoria',[Catedral::FACHADAS,Catedral::CAPILLAS,Catedral::OTROS,Catedral::PORTICO,Catedral::MUSEO, Catedral::HOME]);
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
        Schema::dropIfExists('catedrals');
    }
}
