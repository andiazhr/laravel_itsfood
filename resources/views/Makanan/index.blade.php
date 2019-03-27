@extends('Layouts.master')
@section('content')
<section class="content-header">
      <h1>
      Table Makanan
        <small>Index</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Table</a></li>
        <li class="active">Makanan</li>
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
              <h3 class="box-title" style="margin: 0 20px 0 0">Makanan</h3>
              <a href="{{ url('makanan/create') }}" class="btn btn-primary">+ &nbsp;Tambah Data</a>
              <div class="box-tools">
              <form action="{{ url()->current() }}">
                <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" name="makanan" class="form-control pull-right" placeholder="Search Makanan">

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
                    <th>Nama Makanan</th>
                    <th>Topping Makanan</th>
                    <th>Gambar Makanan</th>
                    <th>Icon Makanan</th>
                    <th>Deskripsi Makanan</th>
                    <th>Harga Makanan</th>
                    <th>Stok Makanan</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Info</th>
                </tr>
                @foreach($eat as $nomor => $makan)
                    <tr>
                        <td>{{$nomor +1}}</td>
                        <td>{{$makan->nama_makanan}}</td>
                        <td>{{$makan->topping_makanan}}</td>
                        <td><img src="{{ asset('/images/makanan/'. array_first(json_decode($makan->gambar_makanan))) }}" alt="" width="150px" height="100px"></td>
                        <td><img src="{{ asset('/images/iconmakanan/'. array_first(json_decode($makan->icon_makanan))) }}" alt="" width="100px" height="100px"></td>
                        <td>{{$makan->deskripsi_makanan}}</td>
                        <td>Rp. {{ number_format($makan->harga_makanan) }}</td>
                        <td>{{$makan->stok_makanan}} porsi</td>
                        <td>
                            <a href="{{ route('makanan.edit',$makan->id_makanan)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        </td>
                        <td>
                          <form action="{{ route('makanan.destroy', $makan->id_makanan)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>
                        <td>
                          <a href="{{ route('makanan.show',$makan->id_makanan)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
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