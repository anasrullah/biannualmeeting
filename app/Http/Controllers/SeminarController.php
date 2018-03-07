<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use App\Seminar;

class SeminarController extends Controller
{
    public function __construct()
    {
        $this->middleware('akses', ['except' => ['seminar', 'getPS','index']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registrasi.seminar.seminar');
    }

    public function seminar()
    {
        $url = 'http://192.168.1.85/simak.juli/webservice/getPT/?request=get_pt_assesor&kode_pt=null';
        $get = json_decode(file_get_contents($url), TRUE);
        // print_r($get);
        return view('registrasi.seminar.seminar')->with('get', $get);   
    }

    public function getPS(Request $request)
    {
        $pt = $request->input('idPT');

        $data_pt  = explode("|", $pt);

        $kodePT = $data_pt[0];

        $url = "http://192.168.1.85/simak.juli/webservice/getPS/?request=get_ps_prodi&kodept=".$kodePT."";
        $getPS = json_decode(file_get_contents($url), TRUE);

        echo '<select class="form-control" id="ps" name="ps" onchange="checkps()">';
        echo '
             <option value="" selected="selected">--Pilih Program Studi--</option>
             ';

        foreach($getPS as $row){
            echo '
                 <option value="'.$row['KODE_PROGRAM_STUDI'].'|'.$row['NAMA_PROGRAM_STUDI'].'|'.$row['JENJANG_PS'].'|'.$row['BIDANG_KEILMUAN'].'">'.$row['KODE_PROGRAM_STUDI'].' - '.$row['NAMA_PROGRAM_STUDI'].' ('.$row['JENJANG_PS'].')</option>
                 ';
        }


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
        $seminar = new Seminar;

        $pt = $request->pt;
        $data_pt  = explode("|", $pt);
        $kodePT = $data_pt[0];
        $namaPT = $data_pt[1];

        $ps = $request->ps;        
        $data_ps  = explode("|", $ps);
        $kodePS = $data_ps[0];
        $namaPS = $data_ps[1];
        $jenjangPS = $data_ps[2];
        $bidang_keilmuan = $data_ps[3];

        $seminar->nama = $request->nama;
        $seminar->jenis_kelamin = $request->jenis_kelamin;
        $seminar->hp = $request->hp;
        $seminar->nama_pt = $namaPT;
        $seminar->nama_ps = $namaPS;
        $seminar->kode_pt = $kodePT;
        $seminar->kode_ps = $kodePS;
        $seminar->jenjang_ps = $jenjangPS;
        $seminar->bidang_keilmuan = $bidang_keilmuan;
        $seminar->fakultas = $request->fakultas;
        $seminar->institusi = $request->institusi;
        $seminar->alamat_institusi = $request->alamat_institusi;
        $seminar->email = $request->email;
        $seminar->input_date = NOW();
        $input['bukti_bayar'] = '/bukti_bayar/'.$request->bukti_bayar->getClientOriginalName();
        $upload = $request->bukti_bayar->move(public_path('/bukti_bayar'), $input['bukti_bayar']);
        $seminar->bukti_pembayaran = $input['bukti_bayar'];

        if (!$seminar->save()) {
            echo "gagal";
        }else{
            echo "berhasil";
            var_dump($upload);
        }

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

    public function apiRegklinik(Request $request) {
        
        // // $registrasi = Registrasi::all();
        //     DB::statement(DB::raw('set @rownum=0'));
        //     $registrasi = Registrasi::select([
        //          DB::raw('@rownum  := @rownum  + 1 AS id_registrasi_klinik'),
        //         'nama',
        //         'jenis_kelamin',
        //         'hp',
        //         'nama_pt',
        //         'nama_pt',
        //         'nama_ps',
        //         'jenjang_ps',
        //         'fakultas',
        //         'bidang_keilmuan',
        //         'bukti_pembayaran',
        //         'kelas',
        //         'kode_pendaftaran']);

        //         $datatables = Datatables::of($registrasi);
  
        //     return $datatables->make(true);

        // $reg = Registrasi::all();
        // $bukti_pembayaran = $registrasi->bukti_pembayaran;
            DB::statement(DB::raw('set @rownum=0'));
            $seminar = Seminar::select([
                 DB::raw('@rownum  := @rownum  + 1 AS id_registrasi_seminar'),
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
                'kelas',
                'kode_pendaftaran'])->where('status_approved_bayar', '1');

                $datatables = Datatables::of($seminar);
  
            return $datatables
            ->addColumn('action', function($seminar){
                return '<a href="'. $seminar->bukti_pembayaran .'" target="_blank" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Download</a>';
            })->addColumn('jenis_kelamin', function($seminar){
                if($seminar->jenis_kelamin == 'L') {
                    return 'Laki-Laki';
                }else if ($seminar->jenis_kelamin == 'P'){
                    return 'Perempuan';
                }
            })->make(true);
    }

    public function apiPerilmu(Request $request,$bidang_keilmuan) {
        // $bidang_keilmuan = $request->input('bidang_ilmu');
        if ($bidang_keilmuan == 'semua') {
            DB::statement(DB::raw('set @rownum=0'));
            $registrasi = Registrasi::select([
                 DB::raw('@rownum  := @rownum  + 1 AS id_registrasi_seminar'),
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
                'kelas',
                'kode_pendaftaran'   
                ])->where('status_approved_bayar', '1');

                $datatables = Datatables::of($seminar);
            return $datatables
            ->addColumn('jenis_kelamin', function($seminar){
                if($seminar->jenis_kelamin == 'L') {
                    return 'Laki-Laki';
                }else if ($seminar->jenis_kelamin == 'P'){
                    return 'Perempuan';
                }
            })->addColumn('action', function($seminar){
                return '<a href="'. $seminar->bukti_pembayaran .'" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Download</a>';
            })->make(true);

        }else{
            // $registrasi = Registrasi::where('bidang_keilmuan', $bidang_keilmuan)->get();
            DB::statement(DB::raw('set @rownum=0'));
            $seminar = Seminar::select([
                DB::raw('@rownum  := @rownum  + 1 AS id_registrasi_klinik'),
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
                'kelas',
                'kode_pendaftaran'   
                ])->where('bidang_keilmuan', $bidang_keilmuan)->where('status_approved_bayar', '1');

                $datatables = Datatables::of($seminar);
            return $datatables
            ->addColumn('jenis_kelamin', function($seminar){
                if($seminar->jenis_kelamin == 'L') {
                    return 'Laki-Laki';
                }else if ($seminar->jenis_kelamin == 'P'){
                    return 'Perempuan';
                }
            })->addColumn('action', function($seminar){
                return '<a href="'. $seminar->bukti_pembayaran .'" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Download</a>';
            })->make(true);

        }
        
    }
}
