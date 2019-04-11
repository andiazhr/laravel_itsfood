<html>
<body>
@extends('Layouts.master')
@section('content')
    <section class="content-header">
      <h1>
        User Pelanggan
        <small>Info</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('film') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Info</li>
        <li class="active">User Pelanggan</li>
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
              <h3 class="box-title">Informasi User Pelanggan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
              <center>
              <h4><label for="">ID : </label><br><span class="label label-primary">{{$pelanggan->id_pelanggan}}</span></h4>
              <h4><label for="">Detail User Pelanggan : </label><br><span class="label label-info"> Nama : {{$pelanggan->nama_pelanggan}} </span><br><br> <span class="label label-info">Username : {{$pelanggan->username}} </span> <br><br> <span class="label label-info">Email : {{$pelanggan->email_pelanggan}} </span><br><br><span class="label label-info"> Password : {{$pelanggan->password}}</span></h4>
              </center>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ url('userspelanggan') }}" class="btn btn-default">Back</a>
              </div>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
  @endsection

</body>
</html>