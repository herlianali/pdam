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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->string('no_pengadu');
            $table->String('status',10);
            $table->String('no_pelanggan',15);
            $table->string('jns_pengadu');
            $table->String('nama_pengadu',15);
            $table->String('alamat_pengadu',25);
            $table->String('tlp_pengadu',15);
            $table->date('periode');
            $table->date('tgl_pengaduan',15);
            $table->String('asal_pengaduan',20);
            $table->String('jns_pengaduan',10);
            $table->longText('uraian',50);
            $table->String('usulan_no_bonc',20);
            $table->String('no_bonc_metr_garansi',10);
            $table->String('sumber_bonc',20);
            $table->String('jns_pekerjaan',20);
            $table->String('status_meter',10);
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
        Schema::dropIfExists('pengaduans');
    }
};
