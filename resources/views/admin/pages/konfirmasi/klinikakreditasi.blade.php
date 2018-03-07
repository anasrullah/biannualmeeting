@extends('admin.layout.app')

@section('title')
  Home
@endsection

@section('current_location')
<section class="content-header">
      <h1>
        Konfirmasi
        <small>Klinik Akreditasi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Konfirmasi</a></li>
        <li class="active">Klinik Akreditasi</li>
      </ol>
</section>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Peserta Klinik Akreditasi</h3>
              <br>
              <br>
              <label >Bidang Keilmuan : </label>
              <select id="bidang_ilmu">
                <option value="semua">Semua</option>
                <option value="Kedokteran">Kedokteran</option>
                <option value="Kedokteran Gigi">Kedokteran Gigi</option>
                <option value="Keperawatan">Keperawatan</option>
                <option value="Kebidanan">Kebidanan</option>
                <option value="Farmasi">Farmasi</option>
                <option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
                <option value="Gizi">Gizi</option>
                <option value="Kesehatan Lain">Kesehatan Lain</option>
              </select>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <table id="konklinik" class="table table-striped">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>hp</th>
                            <th>Perguruan Tinggi</th>
                            <th>Program Studi</th>
                            <th>Jenjang</th>
                            <th>Fakultas</th>
                            <th>Bidang Keilmuan</th>
                            <th>Bukti Pembayaran</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  @endsection

  @section('js')
  <script type="text/javascript">

    var table = $('#konklinik').DataTable({
                      processing: true,
                      serverSide: true,
                      ajax: "{{ route('api.konklinik') }}",
                      columns: [
                        {data: 'id_registrasi_klinik', name: 'id_registrasi_klinik'},
                        {data: 'nama', name: 'nama'},
                        {data: 'jenis_kelamin', name: 'jenis_kelamin'},
                        {data: 'hp', name: 'hp'},
                        {data: 'nama_pt', name: 'nama_pt'},
                        {data: 'nama_ps', name: 'nama_ps'},
                        {data: 'jenjang_ps', name: 'jenjang_ps'},
                        {data: 'fakultas', name: 'fakultas'},
                        {data: 'bidang_keilmuan', name: 'bidang_keilmuan'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                        {data: 'kelas', name: 'kelas'},
                        {data: 'konfirmasi', name: 'konfirmasi', orderable: false, searchable: false}
                      ]
                    });
      $('select').on('change', function() {
                  bidang_ilmu = this.value;
                  // table.ajax.reload();

                  table.ajax.url("{{ url('api/kon_perilmu')}}/"+ bidang_ilmu).load();;
                  
      })


      function setujui(id) {
          // var popup = confirm("Are you sure for delete this data ?");
          var csrf_token = $('meta[name="csrf-token"]').attr('content');
          swal({
              title: 'Kamu yakin?',
              text: "Anda akan menyetujui data ini!",
              type: 'warning',
              showCancelButton: true,
              cancelButtonColor: '#d33',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Ya, setujui!'
          }).then(function () {
                  $.ajax({
                    url : "{{ url('konfirmasi/update') }}" + '/' + id,
                    type : "POST",
                    data : {'_token' : csrf_token},
                    success : function(data) {
                      table.ajax.reload();
                      swal({
                        title: 'Success!',
                        text: 'Data sudah disetujui!',
                        type: 'success',
                        timer: '1500'
                      });
                    },
                    error : function () {
                      swal({
                        title: 'Oops...',
                        text: 'Something Wrong!',
                        type: 'error',
                        timer: '1500'
                      });
                    }
                });
          })
      }

                    

      
  </script>
  @endsection