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
        Schema::create('barangmasuk', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_barang')->constrained();
            $table->unsignedBigInteger('id_ops')->constrained();
            $table->unsignedBigInteger('id_kategori_barang')->constrained();
            $table->string('stok_masuk');
            $table->string('stok_total');
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
        Schema::dropIfExists('barangmasuk');
    }
};
