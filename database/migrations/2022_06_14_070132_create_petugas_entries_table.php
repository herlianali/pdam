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
        Schema::create('petugas_entries', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nip');
            $table->string('nama');
            $table->enum('status', ['aktif', 'tidak']);
            $table->integer('iscs');
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
        Schema::dropIfExists('petugas_entries');
    }
};
