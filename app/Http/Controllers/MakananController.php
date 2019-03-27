<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Makanan;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\Illuminate\Http\Request $request)
    {
        $eat = Makanan::when($request->makanan, function ($query) use ($request) {
            $query->where('nama_makanan', 'like', "%{$request->makanan}%");
        })->get();
       
        return view('Makanan.index', compact('eat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Makanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'nama_makanan'=> 'required',
            'topping_makanan' => 'required',
            'gambar_makanan' => 'required',
            'gambar_makanan.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'icon_makanan' => 'required',
            'icon_makanan.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'deskripsi_makanan' => 'required',
            'harga_makanan' => 'required|integer',
            'stok_makanan'=> 'required|integer'

        ]);

        if($request->hasfile('gambar_makanan'))
        {

           foreach($request->file('gambar_makanan') as $image)
           {
               $gambar=$image->getClientOriginalName();
               $image->move(public_path().'/images/makanan', $gambar);  
               $data[] = $gambar;  
           }

           foreach($request->file('icon_makanan') as $image2)
            {
                $icon=$image2->getClientOriginalName();
                $image2->move(public_path().'/images/iconmakanan', $icon);  
                $data2[] = $icon;  
            }
        }

         $eat = new Makanan([
            'nama_makanan' => $request->get('nama_makanan'),
            'topping_makanan'=> $request->get('topping_makanan'),
            'gambar_makanan'=> $gambar,
            'icon_makanan' => $icon,
            'deskripsi_makanan'=> $request->get('deskripsi_makanan'),
            'harga_makanan'=> $request->get('harga_makanan'),
            'stok_makanan' => $request->get('stok_makanan')
          ]);
          $eat->gambar_makanan=json_encode($data);
          $eat->icon_makanan=json_encode($data2);

          $eat->save();
          return redirect('makanan')->with('success', 'Data Makanan Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_makanan)
    {
        $eat = Makanan::find($id_makanan);
        return view ('Makanan.info', compact('eat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_makanan)
    {
        $eat = Makanan::find($id_makanan);
        return view('Makanan.edit', compact('eat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_makanan)
    {
        $request->validate([
            'id_film'=> 'required|integer',
            'nama_peminjam' => 'required',
            'no_ktp' => 'required',
            'foto_ktp'=> 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'harga_sewa'=> 'required',
            'status' => 'required',
            'tanggal_input_data_peminjaman' => 'required'
          ]);
    
          $transaksi = TransaksiPeminjaman::find($id_transaksi);
          $transaksi->id_film = $request->get('id_film');
          $transaksi->nama_peminjam = $request->get('nama_peminjam');
          $transaksi->no_ktp = $request->get('no_ktp');
          $transaksi->foto_ktp = $request->get('foto_ktp');
          $transaksi->tanggal_pinjam = $request->get('tanggal_pinjam');
          $transaksi->tanggal_kembali = $request->get('tanggal_kembali');
          $transaksi->harga_sewa = $request->get('harga_sewa');
          $transaksi->status = $request->get('status');
          $transaksi->tanggal_input_data_peminjaman = $request->get('tanggal_input_data_peminjaman');
          $transaksi->save();
    
          return redirect('transaksi_peminjaman')->with('success', 'Transaksi Peminjaman Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_makanan)
    {
        $eat = Makanan::find($id_makanan);
        $eat->delete();

        return redirect('makanan')->with('succes', 'Data Makanan Terhapus');
    }
}
