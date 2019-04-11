<html>
<body>
@extends('Layouts.master')
@section('content')
    <section class="content-header">
      <h1>
        Pembelian
        <small>Info</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('film') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Info</li>
        <li class="active">Pembelian</li>
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
              <h3 class="box-title">Informasi Pembelian</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
              <center>
              <h4><label for="">ID Pembelian : </label><br><span class="label label-primary">{{$pembelian->id_pembelian}}</span></h4>
              <h4><label for="">Detail Pelanggan : </label><br><span class="label label-info"> Nama : {{$pembelian->Pelanggan->nama_pelanggan}} </span> <br><br> <span class="label label-info">No HP : {{$pembelian->no_hp_pelanggan}} </span><br><br><span class="label label-info"> Alamat : {{$pembelian->alamat_pelanggan}}</span></h4>
              <h4><label for="">Menu yang dibeli : </label><br><span class="label label-warning">{{$pembelian->Menu->nama_menu}}</span></h4>
              <h4><label for="">Harga Menu : </label><br><span class="label label-warning">{{$pembelian->harga_menu}}</span></h4>
              <h4><label for="">Jumlah Beli Menu : </label><br><span class="label label-warning">{{$pembelian->jumbel_menu}}</span></h4>
              <h4><label for="">Total Pembelian : </label><br><span class="label label-warning">{{$pembelian->total_pembelian}}</span></h4>
              <h4><label for="">Tanggal Pembelian : </label><br><span class="label label-default">{{$pembelian->tanggal_pembelian}}</span></h4>
              </center>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ url('pembelian') }}" class="btn btn-default">Back</a>
              </div>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
  @endsection

</body>
</html>