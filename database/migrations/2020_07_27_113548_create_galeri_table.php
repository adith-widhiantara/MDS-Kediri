<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->string('sampul')->nullable();
            $table->text('caption')->nullable();
            $table->string('waktu')->nullable();
            $table->integer('status')->nullable();
            $table->string('linkVideo')->nullable();
            $table->string('user_id')->nullable();
            $table->string('user_nama')->nullable();
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
        Schema::dropIfExists('galeri');
    }
}
