<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tanggal', 10)->unique();
            $table->string('penAnggaran', 30);
            $table->string('penRealisasi', 30);
            $table->string('penPersen', 7);
            $table->string('belAnggaran', 30);
            $table->string('belRealisasi', 30);
            $table->string('belPersen', 7);
            $table->unsignedBigInteger('id_provinsi')->index();
            $table->unsignedBigInteger('id_kabkota')->index();
            $table->unsignedBigInteger('id_users')->index();
            $table->timestamps();

            //setFK provinsi
            $table  ->foreign('id_provinsi')
                    ->references('id')
                    ->on('provinsi')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            //setFK kabkota
            $table  ->foreign('id_kabkota')
                    ->references('id')
                    ->on('kabkota')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            //setFK users
            $table  ->foreign('id_users')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_lra');
    }
}
