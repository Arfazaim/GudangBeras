<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasoksTable extends Migration
{
    public function up()
    {
        Schema::create('pemasoks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pemasok')->unique();
            $table->string('nama_pemasok');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemasoks');
    }
};
