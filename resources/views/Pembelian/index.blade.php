@extends('Layouts.master')
@section('content')
<section class="content-header">
      <h1>
        Transaksi Peminjaman Tables
        <small>Index</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Transaksi Peminjaman</li>
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
              <h3 class="box-title" style="margin: 0 20px 0 0">Transaksi Peminjaman</h3>
              <a href="{{ url('transaksi_peminjaman/create') }}" class="btn btn-primary">+ &nbsp;Tambah Data</a>
              <div class="box-tools">
              <form action="{{ url()->current() }}">
                <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" name="transaksi" class="form-control pull-right" placeholder="Search Kategori">

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
                    <th>Judul Film</th>
                    <th>Nama Peminjam</th>
                    <th>No KTP</th>
                    <th>Foto KTP</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Harga Sewa</th>
                    <th>Status</th>
                    <th>Tanggal Input Data</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Info</th>
                </tr>
                @foreach($film as $nomor => $rental)
                    <tr>
                        <td>{{$nomor +1}}</td>
                        <td>{{$rental->judul_film}}</td>
                        <td>{{$rental->nama_peminjam}}</td>
                        <td>{{$rental->no_ktp}}</td>
                        <td><img src="{{ asset('/images/'. array_first(json_decode($rental->foto_ktp))) }}" alt="" width="50px" height="50px"></td>
                        <td>{{$rental->tanggal_pinjam}}</td>
                        <td>{{$rental->tanggal_kembali}}</td>
                        <td>{{$rental->harga_sewa}}</td>
                        <td>{{$rental->status}}</td>
                        <td>{{$rental->tanggal_input_data_peminjaman}}</td>
                        <td>
                            <a href="{{ route('transaksi_peminjaman.edit',$rental->id_transaksi_peminjaman)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        </td>
                        <td>
                          <form action="{{ route('transaksi_peminjaman.destroy', $rental->id_transaksi_peminjaman)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>
                        <td>
                          <a href="{{ route('transaksi_peminjaman.show',$rental->id_transaksi_peminjaman)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
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