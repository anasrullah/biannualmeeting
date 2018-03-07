<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblRegistrasiKlinik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi_klinik', function (Blueprint $table) {
            $table->increments('id_registrasi_klinik');
            $table->string('nama', 100);
            $table->string('jenis_kelamin', 100);
            $table->string('hp', 100);
            $table->string('nama_pt', 100);
            $table->string('nama_ps', 100);
            $table->string('kode_pt', 20);
            $table->string('kode_ps', 20);
            $table->string('jenjang_ps', 20);
            $table->string('bidang_keilmuan', 50);
            $table->string('fakultas', 100);
            $table->string('email');
            $table->date('input_date');
            $table->string('bukti_pembayaran', 100);
            $table->string('status_approved_bayar', 100);
            $table->date('date_approved_bayar');
            $table->string('kelas');
            $table->string('kode_pendaftaran');
            $table->string('is_hadir');
            $table->string('is_deleted');
            $table->date('date_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrasi_klinik');
    }
}
