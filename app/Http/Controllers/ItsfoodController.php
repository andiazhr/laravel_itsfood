<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Pembelian;
use App\UsersPelanggan;
use App\Keranjang;
use App\SaranMasukkan;

use App\Http\Requests;
use Session;
use Stripe\Stripe;
use Stripe\Charge;

class ItsfoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eat = Menu::where('tipe_menu','Makanan')->get();
        $galeryeat = Menu::where('tipe_menu', 'Makanan')->Limit(4)->get();
        $drink = Menu::where('tipe_menu','Minuman')->get();
        $galerydrink = Menu::where('tipe_menu', 'Minuman')->Limit(4)->get();
        return view ('Itsfood.index', compact('eat', 'drink', 'galeryeat', 'galerydrink'));
    }

    public function search(Request $request)
    {
        $hasil = Menu::when($request->menu, function ($query) use ($request) {
            $query->where('nama_menu', 'like', "%{$request->menu}%")
            ->orWhere('tipe_menu', 'like', "%{$request->menu}%")
            ->orWhere('harga_menu', 'like', "%{$request->menu}%");
        })->get();

        return view('Itsfood.search', compact('hasil'));
    }

    public function galery(Request $request)
    {
        $eat = Menu::where('tipe_menu','Makanan')->get();
        $drink = Menu::where('tipe_menu','Minuman')->get();
        $allmenu = Menu::all();
        return view('Itsfood.galery', compact('eat', 'drink', 'allmenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $id_menu = $request->id_menu;
        $harga_menu = $request->harga_menu;
        $jumbel_menu = $request->jumbel_menu;
          for ($i = 0; $i < count($id_menu); $i++){
                $pesan = new Pembelian();
                $pesan->id_pelanggan = $request->input('id_pelanggan');
                $ex_harga = explode("|",$id_menu[$i]);
                $pesan->id_menu = $ex_harga[0];
                $pesan->harga_menu = $harga_menu[$i];
                $pesan->jumbel_menu = $jumbel_menu[$i];
                $pesan->no_hp_pelanggan = $request->input('no_hp_pelanggan');
                $pesan->alamat_pelanggan = $request->input('alamat_pelanggan');
                $pesan->total_pembelian = $request->input('total_pembelian');
                $pesan->tanggal_pembelian = $request->input('tanggal_pembelian');
                $pesan->save();
        }
        return redirect()->to('/itsfood')->with('success', 'Pesanan Anda Telah Terbayar');
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

    public function create()
    {
        return view('Itsfood.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'nama_pelanggan' => 'required',
            'username' => 'required',
            'email_pelanggan' => 'required|email',
            'password' => 'required'
        ]);
        
        $userspelanggan = UsersPelanggan::create(request(['nama_pelanggan', 'username', 'email_pelanggan', 'password']));
        
        auth('pelanggan')->login($userspelanggan);
        
        return redirect()->to('/itsfood')->with('login', 'Hai');
    }

    public function showLoginForm()
    {
        return view('Itsfood.login');
    }

    public function login()
    {
        if (!Session::has('keranjang')) {
            if (auth('pelanggan')->attempt(request(['username', 'password'])) == false) {
                return back()->withErrors([
                    'message' => 'The email or password is incorrect, please try again'
                ]);
            }
            return redirect()->to('/itsfood')->with('login', 'Hai');
        }

        if (Session::has('keranjang')) {
            if (auth('pelanggan')->attempt(request(['username', 'password'])) == false) {
                return back()->withErrors([
                    'message' => 'The email or password is incorrect, please try again'
                ]);
            }
            return redirect()->route('keranjang')->with('login', 'Hai');
        }
    }

    public function profil($id_pelanggan)
    {
        $pelanggan = UsersPelanggan::find($id_pelanggan);
        return view('Itsfood.profil', compact('pelanggan'));
    }

    public function destroy()
    {
        auth('pelanggan')->logout();
        
        return redirect()->route('masuk');
    }

    public function addKeranjang(Request $request, $id_menu)
    {
        $menu = Menu::find($id_menu);
        $Keranjanglama = Session::has('keranjang') ? Session::get('keranjang') : null;
        $keranjang = new Keranjang($Keranjanglama);
        $keranjang->add($menu, $menu->id_menu);

        $request->session('keranjang')->put('keranjang', $keranjang);
        return redirect()->to('/itsfood');
    }

    public function kurangiKeranjang($id_menu)
    {
        $Keranjanglama = Session::has('keranjang') ? Session::get('keranjang') : null;
        $keranjang = new Keranjang($Keranjanglama);
        $keranjang->kurangiSatu($id_menu);
         
        if (count($keranjang->menus) > 0){
            Session::put('keranjang', $keranjang);
        } else {
            Session::forget('keranjang');
        }
        return redirect()->route('keranjang');
    }

    public function hapusKeranjang($id_menu)
    {
        $Keranjanglama = Session::has('keranjang') ? Session::get('keranjang') : null;
        $keranjang = new Keranjang($Keranjanglama);
        $keranjang->hapusSemua($id_menu);

        if (count($keranjang->menus) > 0){
            Session::put('keranjang', $keranjang);
        } else {
            Session::forget('keranjang');
        }
        return redirect()->route('keranjang');
    }

    public function Keranjang()
    {
        if (!Session::has('keranjang')) {
            return view ('itsfood.keranjang', ['menus' => null]);
        }
        $Keranjanglama = Session::get('keranjang');
        $keranjang = new Keranjang($Keranjanglama);
        return view ('itsfood.keranjang', ['menus' => $keranjang->menus, 'totalPembelian' => $keranjang->totalPembelian]);
    }

    public function Pesan()
    {
        if (is_null(auth('pelanggan')->user()))
        {
            return view('itsfood.login');
        }
        if (!Session::has('keranjang')) {
            return view ('itsfood.keranjang');
        }
        $Keranjanglama = Session::get('keranjang');
        $keranjang = new Keranjang($Keranjanglama);
        $total = $keranjang->totalPembelian;
        return view ('itsfood.pesan', ['total' => $total]);
    }

    public function addPesan(Request $request)
    {
        if (!Session::has('keranjang')){
            return redirect()->to('/itsfood');
        }
        $Keranjanglama = Session::get('keranjang');
        $keranjang = new Keranjang($Keranjanglama);

        Stripe::setApiKey('sk_test_6DHnc6n4449IQEcoEQyaKf8900UNYZL5LB');
        try {
            $charge = Charge::create([
                "amount" => $keranjang->totalPembelian * 100,
                "currency" => "IDR",
                "source" => 'tok_visa', // obtained with Stripe.js
                "description" => "Test charge"
              ]);

            $harga = $keranjang->hargaMenu;
            for ($i = 0; $i < count($harga); $i++){
            $pembelian = new Pembelian();
            $pembelian->id_pelanggan = $request->input('id_pelanggan');
            $pembelian->id_menu= $keranjang->idMenu;
            $pembelian->harga_menu = $keranjang->hargaMenu;
            $pembelian->jumbel_menu = $keranjang->totalJumbel;
            $pembelian->no_hp_pelanggan = $request->input('no_hp_pelanggan');
            $pembelian->alamat_pelanggan = $request->input('alamat_pelanggan');
            $pembelian->total_pembelian = $keranjang->totalPembelian;
            $pembelian->tanggal_pembelian = $request->input('tanggal_pembelian');
            $pembelian->save();
            }
            
        } catch (\Exception $e){
            return redirect()->route('pesan')->with('error', $e->getMessage());
        }

        Session::forget('keranjang');
        return redirect()->to('/itsfood')->with('success', 'Pesanan Anda Telah Terbayar');
    }

    public function SaranMasukkan(Request $request)
    {
        if (is_null(auth('pelanggan')->user()))
        {
            return view('itsfood.login');
        }
        $SM = new SaranMasukkan([
            'id_pelanggan' => $request->get('id_pelanggan'),
            'saran_masukkan' => $request->get('saran_masukkan')
          ]);

          $SM->save();

          return redirect()->to('/itsfood')->with('warning', 'Saran dan Masukkan Anda Terkirim');
    }
}
