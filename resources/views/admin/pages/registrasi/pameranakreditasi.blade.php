@extends('admin.layout.app')

@section('title')
  Home
@endsection

@section('current_location')
<section class="content-header">
      <h1>
        Registrasi
        <small>Pemeran Akreditasi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Registrasi</a></li>
        <li class="active">Pameran Akreditasi</li>
      </ol>
</section>
@endsection

@section('content')
   <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Registrasi Pameran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Nama Stan</th>
                      <th>No Hp</th>
                      <th>Nama PT</th>
                      <th>Nama PS</th>
                      <th>Jenjang PS</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  {{-- @foreach($registrasi_pameran as $Pameran)
                    <tr>
                      <td>{{ $Pameran['nama_stan'] }}</td>
                      <td>{{ $Pameran['hp'] }}</td>
                      <td>{{ $Pameran['nama_pt'] }}</td>
                      <td>{{ $Pameran['nama_ps'] }}</td>
                      <td>{{ $Pameran['jenjang_ps'] }}</td>
                      <td>Klik</td>
                    </tr>
                  @endforeach --}}
                      <td>sds</td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>Klik</td>
                </tbody>
                <tfoot>
                    <tr>
                      <th>Nama Stan</th>
                      <th>No Hp</th>
                      <th>Nama PT</th>
                      <th>Nama PS</th>
                      <th>Jenjang PS</th>
                      <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
  @endsection