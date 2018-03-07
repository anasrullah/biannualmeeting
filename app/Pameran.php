<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pameran extends Model
{
  protected $table = 'registrasi_pameran';
    protected $primaryKey = 'id_registrasi_pameran';

    protected $fillable = [
                            'nama', 
                            'jenis_kelamin', 
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
                            'email'
                          ];

    public $timestamps = false; 
}
