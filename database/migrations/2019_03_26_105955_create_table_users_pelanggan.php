<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsersPelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_users_pelanggan', function (Blueprint $table) {
            $table->Increments('id_pelanggan');
            $table->string('nama_pelanggan', 40);
            $table->string('username', 35);
            $table->string('email_pelanggan', 35);
            $table->string('password', 35);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_users_pelanggan');
    }
}
