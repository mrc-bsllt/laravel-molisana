<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastas', function (Blueprint $table) {
            $table->id();
            $table->string("src", 100);
            $table->string("src-h", 100);
            $table->string("src-p", 100);
            $table->string("titolo", 60);
            $table->string("slug", 60);
            $table->string("tipo", 30);
            $table->tinyInteger('cottura');
            $table->smallInteger('peso');
            $table->text("descrizione");
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
        Schema::dropIfExists('pastas');
    }
}
