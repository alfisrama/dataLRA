<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKabkota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabkota', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kabkota', 100)->unique();
            $table->unsignedBigInteger('id_provinsi')->index();
            $table->timestamps();

            $table  ->foreign('id_provinsi')
                    ->references('id')
                    ->on('provinsi')
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
        Schema::dropIfExists('kabkota');
    }
}
