<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMakanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_makanan', function (Blueprint $table) {
            $table->Increments('id_makanan');
            $table->string('nama_makanan', 40);
            $table->string('topping_makanan', 100);
            $table->string('gambar_makanan', 100);
            $table->string('icon_makanan', 100);
            $table->text('deskripsi_makanan');
            $table->integer('harga_makanan');
            $table->integer('stok_makanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_makanan');
    }
}
