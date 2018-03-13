@extends('registrasi.layout.app')

@section('title')
   Pameran
@endsection

@section('content')

  <section class="features" id="features">
    <div class="container">
      <h2 class="text-center">
          Registrasi Pameran
      </h2>

      <div class="row">
          <div class=col-md-12>
            <form action="{{ url('pameran/store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="Nama">Nama Stand Pameran</label>
                    <input type="text" class="form-control" id="nama_stan" name="nama_stan" placeholder="Masukkan Nama Stand Anda" required="Harus Diisi">
                </div>

                <!-- <div class="form-group">
                    <label for="institusi">Asal Institusi</label><br>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="institusi" id="institusi" value="ins_pt">
                    <label class="form-check-label" for="inlineRadio1">Perguruan Tinggi</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="institusi" id="institusi" value="ins_lain">
                    <label class="form-check-label" for="inlineRadio2">Institusi lain</label>
                    </div>
                </div> -->

                <div class="form-group">
                    <label for="PT">Perguruan Tinggi</label>
                    <select class="form-control combobox-super" id="pt" name="pt" required="Harus Diisi">
                        <option value="" selected="selected">Ketik Nama Perguruan Tinggi . . .</option>                
                    @foreach($get as $key)
                        <option value="{{ $key['KODE_PERGURUAN_TINGGI'] }} | {{ $key['NAMA_PT'] }}">{{ $key['NAMA_PT'] }}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="fakultas">Program Studi</label>
                    <div id="tarikPS">
                    <input type="text" class="form-control" id="nama_ps" name="nama_ps" placeholder="Masukkan Nama Program Studi Anda" disabled="disabled">
                    </div>
                </div>

                <div class="form-group">
                    <label for="fakultas">Fakultas</label>
                    <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Masukkan Nama Fakultas Anda">
                </div>

                <div class="form-group">
                    <label for="email">Alamat E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat E-mail Anda" required="Harus Diisi">
                </div>

                <div class="form-group">
                    <label for="hp">No. Handphone</label>
                    <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukkan Nomor HP Anda" required="Harus Diisi">
                </div>

                <div class="form-group">
                    <label for="hp">Nama Pengirim</label>
                    <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" placeholder="Masukkan Anda">
                </div>

                <div class="form-group">
                    <label for="hp">Nama Bank Pengirim</label>
                    <input type="text" class="form-control" id="bank_pengirim" name="bank_pengirim" placeholder="Masukkan Nama Bank Anda">
                </div>

                <div class="form-group">
                    <label for="hp">Nama Institusi</label>
                    <input type="text" class="form-control" id="institusi" name="institusi" placeholder="Masukkan Nama Institusi Anda">
                </div>

                <div class="form-group">
                    <label for="hp">Nama Institusi</label>
                    <input type="text" class="form-control" id="institusi" name="institusi" placeholder="Masukkan Nama Institusi Anda">
                </div>

                <div class="form-group">
                    <label for="hp">Nama Penjaga 1</label>
                    <input type="text" class="form-control" id="penjaga1_nama" name="penjaga1_nama" placeholder="Masukkan Nama Anda">
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="penjaga1_jk" name="penjaga1_jk">
                        <option value="0">-- pilih --</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="hp">Jabatan Penjaga 1</label>
                    <input type="text" class="form-control" id="penjaga1_jabatan" name="penjaga1_jabatan" placeholder="Masukkan Nama Jabatan Anda">
                </div>

                <div class="form-group">
                    <label for="hp">Alamat Email Penjaga 1</label>
                    <input type="text" class="form-control" id="penjaga1_email" name="penjaga1_email" placeholder="Masukkan alamat Email Anda">
                </div>

                <div class="form-group">
                    <label for="hp">Nomor Handphone Penjaga 1</label>
                    <input type="text" class="form-control" id="penjaga1_hp" name="penjaga1_hp" placeholder="Masukkan Nomor HP Anda">
                </div>

                <div class="form-group">
                    <label for="hp">Nama Penjaga 2</label>
                    <input type="text" class="form-control" id="penjaga2_nama" name="penjaga2_nama" placeholder="Masukkan Nama Anda">
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="penjaga2_jk" name="penjaga2_jk">
                        <option value="0">-- pilih --</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="hp">Jabatan Penjaga 2</label>
                    <input type="text" class="form-control" id="penjaga2_jabatan" name="penjaga2_jabatan" placeholder="Masukkan Nama Jabatan Anda">
                </div>

                <div class="form-group">
                    <label for="hp">Alamat Email Penjaga 2</label>
                    <input type="text" class="form-control" id="penjaga2_email" name="penjaga2_email" placeholder="Masukkan alamat Email Anda">
                </div>

                <div class="form-group">
                    <label for="hp">Nomor Handphone Penjaga 2</label>
                    <input type="text" class="form-control" id="penjaga2_hp" name="penjaga2_hp" placeholder="Masukkan Nomor HP Anda">
                </div>

                <div class="form-group">
                    <label for="bukti_bayar">Bukti Pembayaran</label>
                    <input type="file" class="form-control" id="bukti_bayar" name="bukti_bayar" accept="image/*" required="Harus Diisi">
                </div>

                 <input type="hidden" class="form-control" id="norek_pengirim" name="norek_pengirim" placeholder="Masukkan Nomor Rekening Anda" value="-">

                <div class="col-md-12 offset-md-5">
                {{-- <button type="reset" class="btn btn-danger">Reset</button> &nbsp; --}}
                <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
          </div>
      </div>
      </div>
  </section>
@endsection