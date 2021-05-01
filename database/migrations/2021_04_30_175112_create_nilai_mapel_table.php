<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiMapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_mapel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('agama')->nullable();
            $table->double('pkn')->nullable();
            $table->double('bahasa_indonesia')->nullable();
            $table->double('mtk')->nullable();
            $table->double('sejarah')->nullable();
            $table->double('bahasa_inggris')->nullable();
            $table->double('seni_budaya')->nullable();
            $table->double('pjok')->nullable();
            $table->double('prkw')->nullable();
            $table->double('bahasa_sunda')->nullable();
            $table->double('mtk_peminatan')->nullable();
            $table->double('biologi')->nullable();
            $table->double('fisika')->nullable();
            $table->double('kimia')->nullable();
            $table->double('bahasa_arab')->nullable();
            $table->unsignedBigInteger('siswa_id')->nullable();
            $table->foreign('siswa_id')->references('id')->on('siswa');
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
        Schema::dropIfExists('nilai_mapel');
    }
}
