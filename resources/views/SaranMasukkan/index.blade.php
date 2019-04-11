@extends('Layouts.master')
@section('content')
<section class="content-header">
      <h1>
      Table Saran dan Masukkan
        <small>Index</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Saran dan Masukkan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-header">
              <h3 class="box-title" style="margin: 0 20px 0 0">Saran dan Masukkan</h3>
              <div class="box-tools">
              <form action="{{ url()->current() }}">
                <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" name="saranmasukkan" class="form-control pull-right" placeholder="Search Masukkan">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Saran dan Masukkan</th>
                    <th>Tanggal Masuk</th>
                    <th>Delete</th>
                    <th>Info</th>
                </tr>
                @foreach($SM as $nomor => $sm)
                    <tr>
                        <td>{{$nomor +1}}</td>
                        <td>{{$sm->Pelanggan->nama_pelanggan}}</td>
                        <td>{{$sm->saran_masukkan}}</td>
                        <td>{{$sm->created_at}}</td>
                        <td>
                          <form action="{{ route('saranmasukkan.destroy', $sm->id_sm)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>
                        <td>
                          <a href="{{ route('saranmasukkan.show',$sm->id_sm)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
                        </td>
                    </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
    </section>
@endsection