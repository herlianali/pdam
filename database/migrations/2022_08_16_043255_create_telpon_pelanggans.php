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
        Schema::create('telpon_pelanggans', function (Blueprint $table) {
            $table->bigIncrements('no_pelanggan');
            $table->String('nama',25);
            $table->text('alamat',100);
            $table->String('no_telepon',15);
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
        Schema::dropIfExists('telpon_pelanggans');
    }
};
