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
        Schema::create('informasi_pelunasan_rekenings', function (Blueprint $table) {
            $table->string('total_tunggakan');
            $table->String('biaya_adm_tutupan_tetap',10);
            $table->String('grand_total',15);
            $table->date('periode');
            $table->String('status',15);
            $table->date('tgl_lunas',25);
            $table->String('jenis',15);
            $table->String('rp_rekening',20);
            $table->String('rp_restitusi',20);
            $table->String('rp_denda',20);
            $table->String('rp_bayar',20);
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
        Schema::dropIfExists('informasi_pelunasan_rekenings');
    }
};
