@extends('Layouts.master')
@section('content')
<section class="content-header">
      <h1>
      Table Menu
        <small>Index</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Table</a></li>
        <li class="active">Menu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    @if(session()->get('success'))
              <div class="alert alert-success">
                {{ session()->get('success') }}  
              </div>
      @endif
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-header">
              <h3 class="box-title" style="margin: 0 20px 0 0">Menu</h3>
              <a href="{{ url('menu/create') }}" class="btn btn-primary">+ &nbsp;Tambah Data</a>
              <div class="box-tools">
              <form action="{{ url()->current() }}">
                <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" name="menu" class="form-control pull-right" placeholder="Search Menu">

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
                    <th>Nama Menu</th>
                    <th>Tipe Menu</th>
                    <th>Gambar Menu</th>
                    <th>Icon Menu</th>
                    <th>Deskripsi Menu</th>
                    <th>Harga Menu</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Info</th>
                </tr>
                @foreach($daftar as $nomor => $menu)
                    <tr>
                        <td>{{$nomor +1}}</td>
                        <td>{{$menu->nama_menu}}</td>
                        <td>{{$menu->tipe_menu}}</td>
                        <td><img src="{{ asset('/images/menu/'. $menu->gambar_menu) }}" alt="" width="150px" height="100px"></td>
                        <td><img src="{{ asset('/images/iconmenu/'. $menu->icon_menu) }}" alt="" width="100px" height="100px"></td>
                        <td>{{$menu->deskripsi_menu}}</td>
                        <td>Rp. {{ number_format($menu->harga_menu) }}</td>
                        <td>
                            <a href="{{ route('menu.edit',$menu->id_menu)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        </td>
                        <td>
                          <form action="{{ route('menu.destroy', $menu->id_menu)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>
                        <td>
                          <a href="{{ route('menu.show',$menu->id_menu)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
                        </td>
                    </tr><br>
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