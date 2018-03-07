<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTblRegisterSeminar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registrasi_seminar', function (Blueprint $table) {
            $table->string('nama', 100);
            $table->string('jenis_kelamin', 100);
            $table->string('hp', 100);
            $table->date('tanggal_lahir');
            $table->string('profesi', 100);
            $table->string('nama_pt', 100)->nullable();
            $table->string('nama_ps', 100)->nullable();
            $table->string('kode_pt', 20)->nullable();
            $table->string('kode_ps', 20)->nullable();
            $table->string('jenjang_ps', 20)->nullable();
            $table->string('bidang_keilmuan', 50)->nullable();
            $table->string('fakultas', 100);
            $table->string('institusi')->nullable();
            $table->text('alamat_institusi')->nullable();
            $table->string('email');
            $table->date('input_date');
            $table->string('bukti_pembayaran', 100);
            $table->string('status_approved_bayar', 100);
            $table->date('date_approved_bayar');
            $table->string('jenis_seminar');
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
        Schema::table('registrasi_seminar', function (Blueprint $table) {
            //
        });
    }
}
