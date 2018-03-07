@extends('registrasi.layout.app')

@section('title')
    Klinik Akreditasi
@endsection

@section('content')

  <section class="features" id="features">
    <div class="container">
      <h2 class="text-center">
          Registrasi Klinik Akreditasi
      </h2>

      <div class="row">
          <div class=col-md-12>
            <form action="{{ url('registrasi/store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="Nama">Nama Lengkap Tanpa Gelar (Akan ditulis untuk sertifikat)</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda">
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="0">-- pilih --</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
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
                    <select class="form-control combobox-super" id="pt" name="pt">
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
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat E-mail Anda">
                </div>

                <div class="form-group">
                    <label for="hp">No. Handphone</label>
                    <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukkan Nomor HP Anda">
                </div>

                <div class="form-group">
                    <label for="bukti_bayar">Bukti Pembayaran</label>
                    <input type="file" class="form-control" id="bukti_bayar" name="bukti_bayar" accept="image/*">
                </div>

                <div class="col-md-12 offset-md-5">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
          </div>
      </div>
      </div>
  </section>
@endsection