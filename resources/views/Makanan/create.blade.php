<html>
<body>
@extends('Layouts.master')
@section('content')
    <section class="content-header">
      <h1>
        Form Makanan
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('makanan') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('makanan/create') }}">Tambah</a></li>
        <li class="active">Makanan</li>
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
              <h3 class="box-title">Tambah Makanan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('makanan.store') }}" enctype="multipart/form-data">
              <div class="box-body">
              @csrf
                <div class="form-group">
                  <label>Nama Makanan</label>
                  <input type="text" class="form-control" name="nama_makanan" placeholder="Masukkan Nama Makanan">
                </div>
                <div class="form-group">
                  <label>Topping Makanan</label>
                  <input type="text" class="form-control" name="topping_makanan" placeholder="Masukkan Topping Makanan">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">Masukkan Gambar Makanan</label>
                  <input type="file" name="gambar_makanan[]">

                  <p class="help-block">Ukuran Foto max 10mb.</p>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Masukkan Icon Makanan</label>
                  <input type="file" name="icon_makanan[]">

                  <p class="help-block">Ukuran Foto max 10mb.</p>
                </div>

                <div class="form-group">
                  <label>Deskripsi Makanan</label>
                  <textarea type="text" class="form-control" name="deskripsi_makanan" placeholder="Masukkan Deskripsi Makanan"></textarea>
                </div>

                <div class="form-group">
                  <label>Harga Makanan</label>
                  <input type="number" class="form-control" name="harga_makanan" placeholder="Masukkan Harga Makanan">
                </div>

                <div class="form-group">
                  <label>Stok Makanan</label>
                  <input type="number" class="form-control" name="stok_makanan" placeholder="Masukkan Stok Makanan">
                </div>
                
                <!-- /.input group -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ url('makanan') }}" class="btn btn-default">Back</a>
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