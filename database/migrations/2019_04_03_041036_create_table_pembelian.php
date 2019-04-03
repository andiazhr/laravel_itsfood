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
            $table->unsignedInteger('id_menu');
            $table->foreign('id_menu')->references('id_menu')->on('table_menu')->onDelete('CASCADE');
            $table->integer('harga_menu');
            $table->integer('jumbel_menu');
            $table->string('no_hp_pelanggan');
            $table->text('alamat_pelanggan');
            $table->integer('total_pembelian');
            $table->date('tanggal_pembelian');
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
