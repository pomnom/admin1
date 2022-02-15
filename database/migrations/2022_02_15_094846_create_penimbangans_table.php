<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenimbangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penimbangans', function (Blueprint $table) {
            $table->id("penimbangan_id", 10);
            $table->string("penimbangan_namabahan", 100);
            $table->string("penimbangan_loth", 100);
            $table->integer("penimbangan_jumlahbutuh", 10);
            $table->integer("penimbangan_jumlahtimbang", 10);
            $table->string("penimbangan_timbangoleh", 100);
            $table->string("penimbangan_periksaoleh", 100);
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
        Schema::dropIfExists('penimbangans');
    }
}
