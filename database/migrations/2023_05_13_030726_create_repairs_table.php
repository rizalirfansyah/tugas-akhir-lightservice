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
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pelanggan_id')->unsigned();
            $table->string('nomor_servis')->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->string('jenis_gadget');
            $table->string('tipe_gadget');
            $table->string('kelengkapan');
            $table->string('kerusakan');
            $table->string('password');
            $table->string('status');
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan');
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
        Schema::dropIfExists('repairs');
    }
};
