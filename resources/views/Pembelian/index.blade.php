@extends('Layouts.master')
@section('content')
<section class="content-header">
      <h1>
      Table Pembelian
        <small>Index</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Pembelian</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-header">
              <h3 class="box-title" style="margin: 0 20px 0 0">Pembelian</h3>
              <div class="box-tools">
              <form action="{{ url()->current() }}">
                <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" name="pembelian" class="form-control pull-right" placeholder="Search Pembelian">

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
                    <th>Nama Menu</th>
                    <th>Harga Menu</th>
                    <th>Jumlah Beli Menu</th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                    <th>Total Pembelian</th>
                    <th>Tanggal Pembelian</th>
                    <th>Delete</th>
                    <th>Info</th>
                </tr>
                @foreach($pembelians as $nomor => $pembelian)
                    <tr>
                        <td>{{$nomor +1}}</td>
                        <td>{{$pembelian->Pelanggan->nama_pelanggan}}</td>
                        <td>{{$pembelian->Menu->nama_menu}}</td>
                        <td>{{$pembelian->harga_menu}}</td>
                        <td>{{$pembelian->jumbel_menu}}</td>
                        <td>{{$pembelian->no_hp_pelanggan}}</td>
                        <td>{{$pembelian->alamat_pelanggan}}</td>
                        <td>{{$pembelian->total_pembelian}}</td>
                        <td>{{$pembelian->tanggal_pembelian}}</td>
                        <td>
                          <form action="{{ route('pembelian.destroy', $pembelian->id_pembelian)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>
                        <td>
                          <a href="{{ route('pembelian.show',$pembelian->id_pembelian)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
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

