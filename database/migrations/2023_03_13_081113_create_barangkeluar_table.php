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
        Schema::create('barangkeluar', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_barang')->constrained();
            $table->unsignedBigInteger('id_barang_masuk')->constrained();
            $table->unsignedBigInteger('id_kategori_barang')->constrained();
            $table->unsignedBigInteger('id_ops')->constrained();
            $table->integer('stok_keluar');
            $table->integer('stok_total');
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
        Schema::dropIfExists('barangkeluar');
    }
};
