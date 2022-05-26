<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYudisiumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yudisiums', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->string('title');
            $table->text('intisari');
            $table->text('abstract');
            $table->string('keyword');
            $table->string('pembimbing');
            $table->enum('jenis_karya', ['Tesis', 'Skripsi', 'Tugas Akhir']);
            $table->string('tahun', 4);
            $table->text('file');
            $table->text('catatan');
            $table->enum('is_approved', ['true', 'false']);
            $table->timestamps();
        });

        Schema::table('yudisiums', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yudisiums');
    }
}
