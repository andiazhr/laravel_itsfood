<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Pembelian;
use DB;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eat = DB::select("SELECT * FROM table_menu WHERE tipe_menu='Makanan'");
        $galeryeat = DB::select("SELECT * FROM table_menu WHERE tipe_menu='Makanan' Limit 4");
        $drink = DB::select("SELECT * FROM table_menu WHERE tipe_menu='Minuman'");
        $galerydrink = DB::select("SELECT * FROM table_menu WHERE tipe_menu='Minuman' Limit 4");
        return view ('Frontend.index', compact('eat', 'drink', 'galeryeat', 'galerydrink'));
    }

    public function search(Request $request)
    {
        $hasil = Menu::when($request->menu, function ($query) use ($request) {
            $query->where('nama_menu', 'like', "%{$request->menu}%")
            ->orWhere('tipe_menu', 'like', "%{$request->menu}%")
            ->orWhere('harga_menu', 'like', "%{$request->menu}%");
        })->get();

        return view('Frontend.search', compact('hasil'));
    }

    public function galery()
    {
        return view('Frontend.galery');
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

        $request->validate([
            'id_pelanggan'=> 'required|integer',
            'id_menu' => 'required|integer',
            'harga_menu' => 'required',
            'no_hp_pelanggan' => 'required',
            'alamat_pelanggan' => 'required',
            'total_pembelian' => 'required|integer',
            'tanggal_pembelian' => 'required|integer'
          ]);
          $pesan = new Pembelian([
            'id_pelanggan' => $request->get('id_pelanggan'),
            'id_menu'=> $request->get('id_menu'),
            'harga_menu'=> $request->get('harga_menu'),
            'no_hp_pelanggan' => $request->get('no_hp_pelanggan'),
            'alamat_pelanggan'=> $request->get('alamat_pelanggan'),
            'total_pembelian'=> $request->get('total_pembelian'),
            'tanggal_pembelian' => $request->get('tanggal_pembelian')
          ]);
          $pesan->save();
          return view('Frontend.berhasil')->with('success', 'Pesanan Diterima');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }

    public function login()
    {
        return view('Frontend.login');
    }
}
