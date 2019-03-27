<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMinuman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_minuman', function (Blueprint $table) {
            $table->Increments('id_minuman');
            $table->string('nama_minuman', 40);
            $table->string('gambar_minuman', 100);
            $table->string('icon_minuman', 100);
            $table->text('deskripsi_minuman');
            $table->integer('harga_minuman');
            $table->integer('stok_minuman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_minuman');
    }
}
