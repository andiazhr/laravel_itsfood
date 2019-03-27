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
        <li><a href="{{ url('kategori') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('kategori/create') }}">Tambah</a></li>
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
              <h3 class="box-title">Tambah Transaksi Peminjaman</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('transaksi_peminjaman.store') }}" enctype="multipart/form-data">
              <div class="box-body">
              <div class="form-group">
                  @csrf
                <label>Judul Film</label>
                <select class="form-control select2" name="id_film" multiple="multiple" data-placeholder="Pilih Judul Film"
                        style="width: 100%;">
                @foreach($movie as $film)
                  <option value="{{$film->id_film}}">{{$film->judul_film}}</option>
                @endforeach
                </select>
              </div>
                <div class="form-group">
                  <label>Nama Peminjam</label>
                  <input type="text" class="form-control" name="nama_peminjam" placeholder="Masukkan Nama Peminjam">
                </div>
                <div class="form-group">
                  <label>No KTP</label>
                  <input type="number" class="form-control" name="no_ktp" placeholder="Masukkan No KTP">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">Input Foto KTP</label>
                  <input type="file" name="foto_ktp[]">

                  <p class="help-block">Ukuran Foto.</p>
                </div>
                <div class="form-group">
                <label>Tanggal Meminjam</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggal_pinjam" class="form-control pull-right" id="from-datepicker">
                </div><br>

                <div class="form-group">
                <label>Tanggal Kembali</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggal_kembali" class="form-control pull-right" id="from-datepicker2">
                </div><br>

                <div class="form-group">
                  <label>Harga Sewa</label>
                  <input type="number" class="form-control" name="harga_sewa" placeholder="Masukkan Harga Sewa">
                </div>
                <div class="form-group">
                    <label >Status</label><br>
                    <label>
                    <input type="radio" name="status" value="Disewa" class="minimal">
                    Disewa
                    </label>&nbsp;&nbsp;
                    <label>
                    <input type="radio" name="status" value="Tersedia" class="minimal">
                    Tersedia
                    </label>
                    
                </div>

                <div class="form-group">
                <label>Tanggal Input Data</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggal_input_data_peminjaman" class="form-control pull-right" id="from-datepicker3">
                </div>
                
                <!-- /.input group -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ url('transaksi_peminjaman') }}" class="btn btn-default">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
  @endsection

</body>
</html>