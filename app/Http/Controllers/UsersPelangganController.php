<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersPelanggan;

class UsersPelangganController extends Controller
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
        $pelanggans = UsersPelanggan::when($request->pelanggan, function ($query) use ($request) {
            $query->where('nama_pelanggan', 'like', "%{$request->pelanggan}%")
            ->orwhere('username', 'like', "%{$request->pelanggan}%")
            ->orWhere('email_pelanggan', 'like', "%{$request->pelanggan}%");
        })->get();

        return view('UsersPelanggan.index', compact('pelanggans'));
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
    public function show($id_pelanggan)
    {
        $pelanggan = UsersPelanggan::find($id_pelanggan);
        return view ('UsersPelanggan.info', compact('pelanggan'));
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
    public function destroy($id_pelanggan)
    {
        $pelanggans = UsersPelanggan::find($id_pelanggan);
        $pelanggans->delete();

        return redirect('userspelanggan')->with('succes', 'Data User Pelanggan Dihapus');
    }
}
