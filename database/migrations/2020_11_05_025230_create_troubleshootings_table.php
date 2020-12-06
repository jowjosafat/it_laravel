<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTroubleshootingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('troubleshootings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('qty');
            $table->string('uom');
            $table->string('jeniskerusakan');
            $table->string('area');
            $table->string('dept');
            $table->string('pic');
            $table->string('ket');
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
        Schema::dropIfExists('troubleshootings');
    }
}
