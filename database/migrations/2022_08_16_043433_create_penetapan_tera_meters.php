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
            $table->String('no_bon',10);
            $table->String('nopel',10);
            $table->String('nama_pelanggan',25);
            $table->text('alamat_pelanggan',50);
            $table->String('tarif',20);
            $table->String('uk_meter',20);
            $table->String('biaya',20);
            $table->String('ppn',10);
            $table->String('total',20);
            $table->String('nama_pengaju',25);
            $table->text('alamat_pengaju',50);
            $table->String('telepon_pengaju',15);
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
