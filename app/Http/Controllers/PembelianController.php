<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Pembelian;
use App\UsersPelanggan;

class PembelianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pembelians = Pembelian::when($request->menu, function ($query) use ($request) {
            $query->where('nama_menu', 'like', "%{$request->menu}%")
            ->orWhere('tipe_menu', 'like', "%{$request->menu}%")
            ->orWhere('harga_menu', 'like', "%{$request->menu}%");
        })->get();

        return view('Pembelian.index', compact('pembelians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pembelian)
    {
        $pembelian = Pembelian::find($id_pembelian);
        return view ('Pembelian.info', compact('pembelian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pembelian)
    {
        $pembelians = Pembelian::find($id_pembelian);
        $pembelians->delete();

        return redirect('pembelian')->with('succes', 'Data Pembelian Dihapus');
    }
}
