<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePembelian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pembelian', function (Blueprint $table) {
            $table->Increments('id_pembelian');
            $table->unsignedInteger('id_pelanggan');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('table_users_pelanggan')->onDelete('CASCADE');
            $table->unsignedInteger('id_makanan');
            $table->foreign('id_makanan')->references('id_makanan')->on('table_makanan')->onDelete('CASCADE');
            $table->unsignedInteger('id_minuman');
            $table->foreign('id_minuman')->references('id_minuman')->on('table_minuman')->onDelete('CASCADE');
            $table->integer('jumbel_makanan');
            $table->integer('jumbel_minuman');
            $table->text('alamat_pelanggan');
            $table->integer('total_pembelian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pembelian');
    }
}
