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
        Schema::create('survey_tarif', function (Blueprint $table) {
            $table->date('bln_rek');
            $table->String('subzona');
            $table->String('jenis_pelanggan');
            $table->String('no_bundel');
            $table->String('no_pelanggan');
            $table->String('nama');
            $table->text('alamat');
            $table->String('no_pa');
            $table->Integer('lbr_jln');
            $table->String('tarif_lama');
            $table->Integer('listrik_amp');
            $table->Integer('listrik_kwh');
            $table->String('njop_juta');
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
        Schema::dropIfExists('survey_tarif');
    }
};
