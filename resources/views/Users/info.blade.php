<html>
<body>
@extends('Layouts.master')
@section('content')
    <section class="content-header">
      <h1>
        User
        <small>Info</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('film') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Info</li>
        <li class="active">User</li>
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
              <h3 class="box-title">Informasi User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
              <center>
              <h4><label for="">ID : </label><br><span class="label label-primary">{{$user->id}}</span></h4>
              <h4><label for="">Detail User : </label><br><span class="label label-info"> Nama : {{$user->name}} </span> <br><br> <span class="label label-info">Email : {{$user->email}} </span><br><br><span class="label label-info"> Password : {{$user->password}}</span></h4>
              </center>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ url('users') }}" class="btn btn-default">Back</a>
              </div>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
  @endsection

</body>
</html>