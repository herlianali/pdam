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
        Schema::create('pelanggan_meter_cs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_pelanggan');
            $table->String('petugas_entri',20);
            $table->DateTime('tanggal_entri');
            $table->Integer('aktif');
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
        Schema::dropIfExists('pelanggan_meter_cs');
    }
};
