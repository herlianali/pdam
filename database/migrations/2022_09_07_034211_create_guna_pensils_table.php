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
        Schema::create('guna_pensils', function (Blueprint $table) {
            $table->id();
            $table->String('code',10)->unique();
            $table->text('keterangan',50);
            $table->text('induk',50);
            $table->text('kode_tarif',50);
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
        Schema::dropIfExists('guna_pensils');
    }
};
