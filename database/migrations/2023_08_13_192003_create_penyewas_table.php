<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewasTable extends Migration
{
    public function up()
    {
        Schema::create('penyewas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('kamar_id');
            $table->foreign('kamar_id')->references('id')->on('kamars');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penyewas');
    }
}
