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
        Schema::create('survey_tarifs', function (Blueprint $table) {
            $table->date('bln_rek');
            $table->String('subzona',10);
            $table->String('jpelanggan',15);
            $table->Integer('no_bundel');
            $table->String('no_pelanggan',15);
            $table->String('nama',25);
            $table->text('alamat',50);
            $table->integer('no_pa');
            $table->String('lebar_jalan',15);
            $table->String('tarif_lama',20);
            $table->String('listrik_amp',10);
            $table->String('listrik_kwh',10);
            $table->String('njop',20);
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
        Schema::dropIfExists('survey_tarifs');
    }
};
