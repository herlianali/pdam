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
        Schema::create('monitoring_pelanggans', function (Blueprint $table) {
            $table->bigIncrements('no_pelanggan');
            $table->String('nama');
            $table->String('jalan');
            $table->String('gang');
            $table->Integer('nomor');
            $table->String('no_tambahan');
            $table->String('KD_Tarif',100);
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
        Schema::dropIfExists('monitoring_pelanggans');
    }
};
