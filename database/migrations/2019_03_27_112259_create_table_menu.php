<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_menu', function (Blueprint $table) {
            $table->Increments('id_menu');
            $table->string('nama_menu', 40);
            $table->string('tipe_menu', 100);
            $table->string('gambar_menu', 100);
            $table->string('icon_menu', 100);
            $table->text('deskripsi_menu');
            $table->integer('harga_menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_menu');
    }
}
