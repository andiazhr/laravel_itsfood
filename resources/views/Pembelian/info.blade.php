<html>
<body>
@extends('Layouts.master')
@section('content')
    <section class="content-header">
      <h1>
        Form Transaksi Peminjaman
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('film') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Info</li>
        <li class="active">Transaksi Peminjaman</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    @if ($errors->any())
        <div class="alert alert-danger">
                <ul>
                 @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                 @endforeach
            </ul>
        </div>
    @endif
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Informasi Transaksi Peminjaman</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
              <div class="form-group">
                <label>Judul Film</label>
                <select name="id_film" class="form-control select2" multiple="multiple" data-placeholder="Pilih Judul Film"
                        style="width: 100%;" disabled>
                @foreach($movie as $film)
                  <option value="{{$film->id_film}}" disabled>{{$film->judul_film}}</option>
                @endforeach
                </select>
              </div>
              <div class="form-group">
                  <label>Nama Peminjam</label>
                  <input type="text" class="form-control" name="nama_peminjam" value="{{ $transaksi->nama_peminjam }}" disabled>
                </div>
                <div class="form-group">
                  <label>No KTP</label>
                  <input type="number" class="form-control" name="no_ktp" value="{{ $transaksi->no_ktp }}" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Input Foto KTP</label>
                  <input type="file" name="foto_ktp" disabled>

                  <p class="help-block">Ukuran Foto.</p>
                </div>
                <div class="form-group">
                <label>Tanggal Meminjam</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" value="{{ $transaksi->tanggal_pinjam }}" name="tanggal_pinjam" class="form-control pull-right" id="from-datepicker" disabled>
                </div><br>

                <div class="form-group">
                <label>Tanggal Kembali</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" value="{{ $transaksi->tanggal_kembali }}" name="tanggal_kembali" class="form-control pull-right" id="from-datepicker2" disabled>
                </div><br>

                <div class="form-group">
                  <label>Harga Sewa</label>
                  <input type="number" class="form-control" name="harga_sewa" value="{{ $transaksi->harga_sewa }}" disabled>
                </div>

                <div class="form-group">
                    <label >Status</label><br>
                    <label>
                    <input type="radio" name="status" class="minimal" disabled>
                    Tersedia
                    </label>&nbsp;&nbsp;
                    <label>
                    <input type="radio" name="status" class="minimal" disabled>
                    Disewa
                    </label>
                </div>

                <div class="form-group">
                <label>Tanggal Input Data</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggal_input_data_peminjaman" value="{{ $transaksi->tanggal_input_data_peminjaman }}" class="form-control pull-right" id="from-datepicker3" disabled>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ url('transaksi_peminjaman') }}" class="btn btn-default">Back</a>
              </div>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
  @endsection

</body>
</html>