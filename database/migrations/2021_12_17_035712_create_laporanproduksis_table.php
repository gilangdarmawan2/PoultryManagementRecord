<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanproduksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporanproduksis', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->bigInteger('populasi');
            $table->bigInteger('berat_telur');
            $table->bigInteger('telur');
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
        Schema::dropIfExists('laporanproduksis');
    }
}
