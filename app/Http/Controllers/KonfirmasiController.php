<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use App\Registrasi;
use Mail;
use View;

class KonfirmasiController extends Controller
{

    public function __construct()
    {
        $this->middleware('akses');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $registrasi = Registrasi::findOrFail($id);
        $registrasi->status_approved_bayar = "1";
        $registrasi->date_approved_bayar = NOW();
        $registrasi->update();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function apiKonklinik(Request $request) {
    
            DB::statement(DB::raw('set @rownum=0'));
            $registrasi = Registrasi::select([
                 DB::raw('@rownum  := @rownum  + 1 AS id_registrasi_klinik'),
                'id_registrasi_klinik as id',
                'nama',
                'jenis_kelamin',
                'hp',
                'nama_pt',
                'nama_pt',
                'nama_ps',
                'jenjang_ps',
                'fakultas',
                'bidang_keilmuan',
                'bukti_pembayaran',
                'kelas'])->where('status_approved_bayar', null);

                $datatables = Datatables::of($registrasi);
  
            return $datatables
            ->addColumn('action', function($registrasi){
                return '<a href="'. $registrasi->bukti_pembayaran .'" target="_blank" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Download</a>';
            })->addColumn('konfirmasi', function($registrasi){
                return '<a href="#" onclick="setujui('.$registrasi->id.')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-ok"></i> Setujui</a>';
            })->addColumn('jenis_kelamin', function($registrasi){
                if($registrasi->jenis_kelamin == 'L') {
                    return 'Laki-Laki';
                }else if ($registrasi->jenis_kelamin == 'P'){
                    return 'Perempuan';
                }
            })->rawColumns(['konfirmasi', 'action'])->make(true);
    }

    public function apiPerilmu(Request $request,$bidang_keilmuan) {
        // $bidang_keilmuan = $request->input('bidang_ilmu');
        if ($bidang_keilmuan == 'semua') {
            DB::statement(DB::raw('set @rownum=0'));
            $registrasi = Registrasi::select([
                 DB::raw('@rownum  := @rownum  + 1 AS id_registrasi_klinik'),
                'id_registrasi_klinik as id',                 
                'nama',
                'jenis_kelamin',
                'hp',
                'nama_pt',
                'nama_pt',
                'nama_ps',
                'jenjang_ps',
                'fakultas',
                'bidang_keilmuan',
                'bukti_pembayaran',
                'kelas'])->where('status_approved_bayar', null);

                $datatables = Datatables::of($registrasi);
            return $datatables
            ->addColumn('action', function($registrasi){
                return '<a href="'. $registrasi->bukti_pembayaran .'" target="_blank" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Download</a>';
            })->addColumn('konfirmasi', function($registrasi){
                return '<a href="#" onclick="setujui('.$registrasi->id.')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-ok"></i> Setujui</a>';
            })->addColumn('jenis_kelamin', function($registrasi){
                if($registrasi->jenis_kelamin == 'L') {
                    return 'Laki-Laki';
                }else if ($registrasi->jenis_kelamin == 'P'){
                    return 'Perempuan';
                }
            })->rawColumns(['konfirmasi', 'action'])->make(true);

        }else{
            // $registrasi = Registrasi::where('bidang_keilmuan', $bidang_keilmuan)->get();
            DB::statement(DB::raw('set @rownum=0'));
            $registrasi = Registrasi::select([
                DB::raw('@rownum  := @rownum  + 1 AS id_registrasi_klinik'),
                'id_registrasi_klinik as id',                
                'nama',
                'jenis_kelamin',
                'hp',
                'nama_pt',
                'nama_pt',
                'nama_ps',
                'jenjang_ps',
                'fakultas',
                'bidang_keilmuan',
                'bukti_pembayaran',
                'kelas'])->where('bidang_keilmuan', $bidang_keilmuan)->where('status_approved_bayar', null);

                $datatables = Datatables::of($registrasi);
            return $datatables
            ->addColumn('action', function($registrasi){
                return '<a href="'. $registrasi->bukti_pembayaran .'" target="_blank" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Download</a>';
            })->addColumn('konfirmasi', function($registrasi){
                return '<a href="#" onclick="setujui('.$registrasi->id.')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-ok"></i> Setujui</a>';
            })->addColumn('jenis_kelamin', function($registrasi){
                if($registrasi->jenis_kelamin == 'L') {
                    return 'Laki-Laki';
                }else if ($registrasi->jenis_kelamin == 'P'){
                    return 'Perempuan';
                }
            })->rawColumns(['konfirmasi', 'action'])->make(true);

        }
        
    }

    
}
