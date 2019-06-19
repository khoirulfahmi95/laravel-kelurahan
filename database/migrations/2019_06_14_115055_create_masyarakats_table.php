<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasyarakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masyarakat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik');
            $table->string('nama',50);
            $table->string('email',25);
            $table->string('password');
            $table->string('tempat_lahir', 35);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->text('domisili');
            $table->string('agama', 20);
            $table->string('no_telp', 12);
            $table->string('pekerjaan', 35);
            $table->string('status', 20);
            $table->string('kewarganegaraan', 20);
            $table->string('upload_KTP');
            $table->string('upload_KK');
            $table->string('upload_s_kesehatan');
            $table->string('approve_status', 5);
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
        Schema::dropIfExists('masyarakats');
    }
}
