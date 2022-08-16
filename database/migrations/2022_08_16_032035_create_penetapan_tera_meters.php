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
        Schema::create('penetapan_tera_meters', function (Blueprint $table) {
            $table->bigIncrements('nomor_penetapan');
            $table->date('tanggal');
            $table->String('no_bon');
            $table->String('nopel');
            $table->String('nama_pelanggan');
            $table->text('alamat_pelanggan');
            $table->String('tarif');
            $table->String('uk_meter');
            $table->String('biaya');
            $table->String('ppn');
            $table->String('total');
            $table->String('nama_pengaju');
            $table->text('alamat_pengaju');
            $table->String('telepon_pengaju');
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
        Schema::dropIfExists('penetapan_tera_meters');
    }
};
