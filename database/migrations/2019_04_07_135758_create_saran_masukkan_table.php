<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaranMasukkanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saran_masukkan', function (Blueprint $table) {
            $table->Increments('id_sm');
            $table->unsignedInteger('id_pelanggan');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('table_users_pelanggan')->onDelete('CASCADE');
            $table->text('saran_masukkan');
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
        Schema::dropIfExists('saran_masukkan');
    }
}
