<html>
<body>
@extends('Layouts.master')
@section('content')
    <section class="content-header">
      <h1>
        Form Menu
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('menu') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Edit</li>
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
              <h3 class="box-title">Edit Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" method="post" action="{{ route('menu.update', $daftar->id_menu) }}">
            @method('PATCH')
            @csrf
              <div class="box-body">
              <div class="col-md-6">
              <div class="form-group">
                  <label>Nama Menu</label>
                  <input type="text" class="form-control" name="nama_menu" value="{{ $daftar->nama_menu }}">
                </div>

                <div class="form-group">
                  <label>Gambar Menu</label><br>
                  <img src="{{ asset('/images/menu/'. $daftar->gambar_menu) }}" name="gambar_menu[]" value="{{ asset('/images/menu/'. $daftar->gambar_menu) }}" alt="" width="150px" height="100px"><br><br>
                  <label for="exampleInputFile">Ganti Gambar Menu</label> <br>
                  <input type="file"class="form-control" name="gambar_menu[]" value="{{ $daftar->gambar_menu }}">

                  <p class="help-block">Ukuran Foto max 10mb.</p>
                </div>
                
                <div class="form-group">
                  <label>Deskripsi Makanan</label>
                  <textarea type="text" class="form-control" name="deskripsi_menu" placeholder="Masukkan Deskripsi Menu">{{ $daftar->deskripsi_menu }}</textarea>
                  </div>
                </div>

                <div class="col-md-3">
                <div class="form-group">
                  <label>Tipe Menu</label>
                  <input type="text" class="form-control" name="tipe_menu" value="{{ $daftar->tipe_menu }}">
                </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">
                        <label>Ganti Tipe Menu</label>
                        <select name="tipe_menu" class="form-control select2" style="width: 100%;">
                          <option selected="-" disabled selected>Pilih Tipe Makanan</option>
                          <option value="Makanan">Makanan</option>
                          <option value="Minuman">Minuman</option>
                          <option value="Makanan Ringan">Makanan Ringan</option>
                        </select>
                      </div>
                      </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Icon Menu</label><br>
                  <img src="{{ asset('/images/iconmenu/'. $daftar->icon_menu) }}" name="icon_menu[]" value="{{ asset('/images/iconmenu/'. $daftar->icon_menu) }}" alt="" width="100px" height="100px"><br><br>
                  <label for="exampleInputFile">Ganti Icon Menu</label> <br>
                  <input type="file" class="form-control" name="icon_menu[]" value="{{ $daftar->icon_menu }}">

                  <p class="help-block">Ukuran Foto max 10mb.</p>
                </div>

                <div class="form-group">
                  <label>Harga Menu</label>
                  <input type="number" class="form-control" name="harga_menu" value="{{ $daftar->harga_menu }}">
                </div>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ url('menu') }}" class="btn btn-default">Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
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