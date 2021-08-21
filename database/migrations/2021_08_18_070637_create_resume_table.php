<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->string('posisi');
            $table->text('alamat')->nullable();
            $table->string('no_telpon');
            $table->string('headline');
            $table->string('deskripsi_1');
            $table->string('deskripsi_2');
            $table->string('deskripsi_3');
            $table->text('foto_project');
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
        Schema::dropIfExists('resume');
    }
}
