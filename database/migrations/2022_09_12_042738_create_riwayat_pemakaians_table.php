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
        Schema::create('riwayat_pemakaians', function (Blueprint $table) {
            $table->String('no_pelanggan',15);
            $table->String('bamutasi',15);
            $table->String('tgl_transaksi',15);
            $table->String('no_ba_mutasi');
            $table->String('no_bapakai',15);
            $table->String('no_pengesahan',15);
            $table->String('tgl_pengesahan',15);
            $table->String('no_bon_bukaan',15);
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
        Schema::dropIfExists('riwayat_pemakaians');
    }
};
