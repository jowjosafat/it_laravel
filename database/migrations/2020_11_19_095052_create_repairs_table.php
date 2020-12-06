<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_r');
            $table->string('qty_r');
            $table->string('uom_r');
            $table->string('jeniskerusakan_r');
            $table->string('area_r');
            $table->string('dept_r');
            $table->string('pic_r');
            $table->string('ket_r');
            $table->string('harga_r');
            $table->string('status_r');
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
        Schema::dropIfExists('repairs');
    }
}
