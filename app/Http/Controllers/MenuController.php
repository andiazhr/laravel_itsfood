<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $daftar = Menu::when($request->menu, function ($query) use ($request) {
            $query->where('nama_menu', 'like', "%{$request->menu}%")
            ->orWhere('tipe_menu', 'like', "%{$request->menu}%")
            ->orWhere('harga_menu', 'like', "%{$request->menu}%");
        })->get();
       
        return view('Menu.index', compact('daftar'));
    }

    /**
     * Show the form for crdaftaring a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Menu.create');
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
            'nama_menu'=> 'required',
            'tipe_menu' => 'required',
            'gambar_menu' => 'required',
            'gambar_menu.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'icon_menu' => 'required',
            'icon_menu.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'deskripsi_menu' => 'required',
            'harga_menu' => 'required|integer'
        ]);

        if($request->hasfile('gambar_menu'))
        {

           foreach($request->file('gambar_menu') as $image)
           {
               $gambar=$image->getClientOriginalName();
               $image->move(public_path().'/images/menu', $gambar);  
           }

           foreach($request->file('icon_menu') as $image2)
            {
                $icon=$image2->getClientOriginalName();
                $image2->move(public_path().'/images/iconmenu', $icon);  
            }
        }

         $daftar = new Menu([
            'nama_menu' => $request->get('nama_menu'),
            'tipe_menu'=> $request->get('tipe_menu'),
            'gambar_menu'=> $gambar,
            'icon_menu' => $icon,
            'deskripsi_menu'=> $request->get('deskripsi_menu'),
            'harga_menu'=> $request->get('harga_menu'),
            'stok_menu' => $request->get('stok_menu')
          ]);

          $daftar->save();
          return redirect('menu')->with('success', 'Data Menu Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_menu)
    {
        $daftar = Menu::find($id_menu);
        return view ('Menu.info', compact('daftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_menu)
    {
        $daftar = Menu::find($id_menu);
        return view('Menu.edit', compact('daftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_menu)
    {
        $request->validate([
            'nama_menu' => 'required',
            'tipe_menu' => 'required',
            'deskripsi_menu' => 'required',
            'harga_menu' => 'required|integer'
          ]);

          if(empty($request->hasfile('gambar_menu')) && empty($request->hasfile('icon_menu')))
          {
            $daftar = Menu::find($id_menu);
            $daftar->nama_menu = $request->get('nama_menu');
            $daftar->tipe_menu = $request->get('tipe_menu');
            $daftar->deskripsi_menu = $request->get('deskripsi_menu');
            $daftar->harga_menu = $request->get('harga_menu');
            $daftar->update();
          }

          if(!empty($request->hasfile('gambar_menu')) || !empty($request->hasfile('icon_menu')))
            {
            
                $daftar = Menu::find($id_menu);

                if(!empty($request->hasfile('gambar_menu'))){
                unlink(public_path().'/images/menu/'. $daftar->gambar_menu);
                foreach($request->file('gambar_menu') as $image)
                {
                    $gambar=$image->getClientOriginalName();
                    $image->move(public_path().'/images/menu', $gambar);
                }

                $daftar->nama_menu = $request->get('nama_menu');
                $daftar->tipe_menu = $request->get('tipe_menu');
                $daftar->gambar_menu = $gambar;
                $daftar->deskripsi_menu = $request->get('deskripsi_menu');
                $daftar->harga_menu = $request->get('harga_menu');
                $daftar->update();
            }
                if(!empty($request->hasfile('icon_menu'))){
                unlink(public_path().'/images/iconmenu/'. $daftar->icon_menu);
                foreach($request->file('icon_menu') as $image2)
                    {
                        $icon=$image2->getClientOriginalName();
                        $image2->move(public_path().'/images/iconmenu', $icon);
                    }
                
                $daftar->nama_menu = $request->get('nama_menu');
                $daftar->tipe_menu = $request->get('tipe_menu');
                $daftar->icon_menu = $icon;
                $daftar->deskripsi_menu = $request->get('deskripsi_menu');
                $daftar->harga_menu = $request->get('harga_menu');
                $daftar->update();
            }
        }

        //   if(!empty($request->hasfile('gambar_menu')))
        //     {
        //         $daftar = Menu::find($id_menu);

        //     foreach($request->file('gambar_menu') as $image)
        //     {
        //         unlink('/images/menu/'. $daftar->gambar_menu);
        //         $gambar=$image->getClientOriginalName();
        //         $image->move(public_path().'/images/menu', $gambar);
        //     }

        //     $daftar->nama_menu = $request->get('nama_menu');
        //     $daftar->tipe_menu = $request->get('tipe_menu');
        //     $daftar->gambar_menu = $gambar;
        //     $daftar->deskripsi_menu = $request->get('deskripsi_menu');
        //     $daftar->harga_menu = $request->get('harga_menu');
        //     $daftar->update();
        // }

        // if(!empty($request->hasfile('icon_menu')))
        // {
        //     $daftar = Menu::find($id_menu);
        //     foreach($request->file('icon_menu') as $image2)
        //     {
        //         unlink('/images/iconmenu'. $daftar->icon_menu);
        //         $icon=$image2->getClientOriginalName();
        //         $image2->move(public_path().'/images/iconmenu', $icon);
        //     }

        //     $daftar->nama_menu = $request->get('nama_menu');
        //     $daftar->tipe_menu = $request->get('tipe_menu');
        //     $daftar->icon_menu = $icon;
        //     $daftar->deskripsi_menu = $request->get('deskripsi_menu');
        //     $daftar->harga_menu = $request->get('harga_menu');
        //     $daftar->update();
        // }
    
          return redirect('menu')->with('success', 'Data Menu Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_menu)
    {
        $daftar = Menu::find($id_menu);
        $daftar->delete();

        return redirect('menu')->with('succes', 'Data Menu Dihapus');
    }
}
