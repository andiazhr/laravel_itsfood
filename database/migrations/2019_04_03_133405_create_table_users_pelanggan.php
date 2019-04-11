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
            $table->string('nama_pelanggan');
            $table->string('username')->unique();
            $table->string('email_pelanggan');
            $table->string('password');
            $table->string('foto_profil')->nullable();
            $table->text('bio')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('table_users_pelanggan');
    }
}
