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
        Schema::create('quisioners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pertanyaan', 500);
            $table->string('opsi1', 255);
            $table->string('opsi2', 255);
            $table->string('opsi3', 255);
            $table->string('opsi4', 255);
            $table->string('tags', 255);
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
        Schema::dropIfExists('quisioners');
    }
};
