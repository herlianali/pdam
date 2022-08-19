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
        Schema::create('cek_survey_tarifs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_pelanggan');
            $table->String('njop',20);
            $table->String('listrik',20);
            $table->String('lebar_jalan',15);
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
        Schema::dropIfExists('cek_survey_tarifs');
    }
};
