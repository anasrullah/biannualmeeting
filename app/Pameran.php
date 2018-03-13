<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pameran extends Model
{
  protected $table = 'registrasi_pameran';
    protected $primaryKey = 'id_registrasi_pameran';

    protected $fillable = [ 'nama_stan', 
                            'hp', 
                            'nama_pt', 
                            'nama_ps', 
                            'kode_pt', 
                            'kode_ps', 
                            'jenjang_ps', 
                            'bidang_keilmuan', 
                            'fakultas', 
                            'institusi',
                            'alamat_institusi',
                            'email',
                            'penjaga1_nama',
                            'penjaga1_jk',
                            'penjaga1_jabatan',
                            'penjaga1_email',
                            'penjaga1_hp',
                            'penjaga2_nama',
                            'penjaga2_jk',
                            'penjaga2_jabatan',
                            'penjaga2_email',
                            'penjaga2_hp'
                          ];

    public $timestamps = false; 
}
