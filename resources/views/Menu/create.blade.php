<html>
<body>
@extends('Layouts.master')
@section('content')
    <section class="content-header">
      <h1>
        Form Tambah Menu
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('menu') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('menu/create') }}">Tambah</a></li>
        <li class="active">Menu</li>
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
              <h3 class="box-title">Tambah Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('menu.store') }}" enctype="multipart/form-data">
              <div class="box-body">
              @csrf
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" class="form-control" name="nama_menu" placeholder="Masukkan Nama Menu">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Masukkan Gambar Menu</label>
                  <input type="file" name="gambar_menu[]" class="form-control">

                  <p class="help-block">Ukuran Foto max 2mb.</p>
                  </div>
                  
                  <div class="form-group">
                  <label>Deskripsi Menu</label>
                  <textarea type="text" class="form-control" name="deskripsi_menu" placeholder="Masukkan Deskripsi Menu"></textarea>
                  </div>
                </div>
                  
                <div class="col-md-6">
                <div class="form-group">
                        <label>Tipe Menu</label>
                        <select name="tipe_menu" class="form-control select2" style="width: 100%;">
                          <option selected="-" disabled selected>Pilih Tipe Menu</option>
                          <option value="Makanan">Makanan</option>
                          <option value="Minuman">Minuman</option>
                          <option value="Makanan Ringan">Makanan Ringan</option>
                        </select>
                      </div>
                      
                <div class="form-group">
                  <label for="exampleInputFile">Masukkan Icon Menu</label>
                  <input type="file" name="icon_menu[]" class="form-control">

                  <p class="help-block">Ukuran Foto max 2mb.</p>
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                  <label>Harga Menu</label>
                  <input type="number" class="form-control" name="harga_menu" placeholder="Masukkan Harga Menu">
                </div>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ url('menu') }}" class="btn btn-default">Back</a>
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