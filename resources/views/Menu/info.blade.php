<html>
<body>
@extends('Layouts.master')
@section('content')
    <section class="content-header">
      <h1>
        Menu
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('menu') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Info</li>
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
              <h3 class="box-title">Informasi Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
              <center>
              <img src="{{ asset('/images/menu/'. array_first(json_decode($daftar->gambar_menu))) }}" alt="" width="300px" height="200px"><br>
              <h3>{{$daftar->nama_menu}} harga Rp. {{number_format($daftar->harga_menu)}}</h3>
              <img src="{{ asset('/images/iconmenu/'. array_first(json_decode($daftar->icon_menu))) }}" alt="" width="100px" height="100px"><br>
              <h4>
              <label for="">Deskripsi</label>  <br>
              {{$daftar->deskripsi_menu}}</h4>
              </center>
                <!-- /.input group -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ url('menu') }}" class="btn btn-default">Back</a>
              </div>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
  @endsection

</body>
</html>