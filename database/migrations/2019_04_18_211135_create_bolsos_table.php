<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBolsosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolsos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name',128)->unique();
          $table->string('description',512);
          $table->decimal('price',6,2);
          $table->string('photo',256);
          $table->string('slug',128)->unique();
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
        Schema::dropIfExists('bolsos');
    }
}
