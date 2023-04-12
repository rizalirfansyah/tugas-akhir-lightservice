<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pelanggan')->nullable();
            $table->string('nama_pelanggan');
            $table->string('notelp');
            $table->string('alamat');
            $table->integer('proses_servis')->nullable();
            $table->integer('bisa_diambil')->nullable();
            $table->integer('sudah_diambil')->nullable();
            $table->integer('total_servis')->nullable();
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
        Schema::dropIfExists('pelanggan');
    }
};
