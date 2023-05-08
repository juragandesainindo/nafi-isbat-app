<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayarNafiIsbatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_nafi_isbats', function (Blueprint $table) {
            $table->id();
            $table->string('bayar');
            $table->bigInteger('jamaah_id')->unsigned();
            $table->timestamps();
            $table->foreign('jamaah_id')->references('id')->on('jamaahs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bayar_nafi_isbats');
    }
}
