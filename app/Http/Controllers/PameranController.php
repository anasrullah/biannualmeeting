<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use App\Pameran;

class PameranController extends Controller
{
    public function __construct()
    {
        $this->middleware('akses', ['except' => ['pameran', 'getPS','index']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrasi_pameran = Pameran ::all();
        dd($registrasi_pameran);
        return view('admin.pages.pameranakreditasi',compact('registrasi_pameran'));
    }

    public function pameran()
    {
        $url = 'https://akreditasi.lamptkes.org/webservice/getPT/?request=get_pt_assesor&kode_pt=null';
        $get = json_decode(file_get_contents($url), TRUE);
        // print_r($get);
        return view('registrasi.pameran.pameran')->with('get', $get);   
    }

    public function getPS(Request $request)
    {
        $pt = $request->input('idPT');

        $data_pt  = explode("|", $pt);

        $kodePT = $data_pt[0];

        $url = "https://akreditasi.lamptkes.org/webservice/getPS/?request=get_ps_prodi&kodept=".$kodePT."";
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
        $pameran = new Pameran;

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

        $pameran->nama_stan = $request->nama_stan;
        $pameran->hp = $request->hp;
        $pameran->nama_pt = $namaPT;
        $pameran->nama_ps = $namaPS;
        $pameran->kode_pt = $kodePT;
        $pameran->kode_ps = $kodePS;
        $pameran->jenjang_ps = $jenjangPS;
        $pameran->bidang_keilmuan = $bidang_keilmuan;
        $pameran->fakultas = $request->fakultas;
        $pameran->institusi = $request->institusi;
        $pameran->alamat_institusi = $request->alamat_institusi;
        $pameran->email = $request->email;
        $pameran->penjaga1_nama = $request->penjaga1_nama;
        $pameran->penjaga1_jk = $request->penjaga1_jk;
        $pameran->penjaga1_jabatan = $request->penjaga1_jabatan;
        $pameran->penjaga1_email = $request->penjaga1_email;
        $pameran->penjaga1_hp = $request->penjaga1_hp;
        $pameran->penjaga2_nama = $request->penjaga2_nama;
        $pameran->penjaga2_jk = $request->penjaga2_jk;
        $pameran->penjaga2_jabatan = $request->penjaga2_jabatan;
        $pameran->penjaga2_email = $request->penjaga2_email;
        $pameran->penjaga2_hp = $request->penjaga2_hp;
        $pameran->input_date = NOW();
        $input['bukti_bayar'] = '/bukti_bayar/'.$request->bukti_bayar->getClientOriginalName();
        $upload = $request->bukti_bayar->move(public_path('/bukti_bayar'), $input['bukti_bayar']);
        $pameran->bukti_pembayaran = $input['bukti_bayar'];

        if (!$pameran->save()) {
            echo "gagal";
        }else{
            echo "berhasil";
            var_dump($upload);
        }
            return redirect('registrasi');
        
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
            $pameran = Pameran::select([
                 DB::raw('@rownum  := @rownum  + 1 AS id_registrasi_pameran'),
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

                $datatables = Datatables::of($pameran);
  
            return $datatables
            ->addColumn('action', function($pameran){
                return '<a href="'. $pameran->bukti_pembayaran .'" target="_blank" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Download</a>';
            })->addColumn('jenis_kelamin', function($pameran){
                if($pameran->jenis_kelamin == 'L') {
                    return 'Laki-Laki';
                }else if ($pameran->jenis_kelamin == 'P'){
                    return 'Perempuan';
                }
            })->make(true);
    }

    public function apiPerilmu(Request $request,$bidang_keilmuan) {
        // $bidang_keilmuan = $request->input('bidang_ilmu');
        if ($bidang_keilmuan == 'semua') {
            DB::statement(DB::raw('set @rownum=0'));
            $registrasi = Registrasi::select([
                 DB::raw('@rownum  := @rownum  + 1 AS id_registrasi_pameran'),
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

                $datatables = Datatables::of($pameran);
            return $datatables
            ->addColumn('jenis_kelamin', function($pameran){
                if($pameran->jenis_kelamin == 'L') {
                    return 'Laki-Laki';
                }else if ($pameran->jenis_kelamin == 'P'){
                    return 'Perempuan';
                }
            })->addColumn('action', function($pameran){
                return '<a href="'. $pameran->bukti_pembayaran .'" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Download</a>';
            })->make(true);

        }else{
            // $registrasi = Registrasi::where('bidang_keilmuan', $bidang_keilmuan)->get();
            DB::statement(DB::raw('set @rownum=0'));
            $pameran = Pameran::select([
                DB::raw('@rownum  := @rownum  + 1 AS id_registrasi_pameran'),
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

                $datatables = Datatables::of($pameran);
            return $datatables
            ->addColumn('jenis_kelamin', function($pameran){
                if($pameran->jenis_kelamin == 'L') {
                    return 'Laki-Laki';
                }else if ($pameran->jenis_kelamin == 'P'){
                    return 'Perempuan';
                }
            })->addColumn('action', function($pameran){
                return '<a href="'. $pameran->bukti_pembayaran .'" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Download</a>';
            })->make(true);

        }
        
    }
}
