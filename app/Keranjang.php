<?php

namespace App;

class Keranjang
{
    public $menus = null;
    public $idMenu = 0;
    public $hargaMenu = 0;
    public $totalJumbel = 0;
    public $totalPembelian = 0;

    public function __construct($Keranjanglama)
    {
        if($Keranjanglama) {
            $this->idMenu = $Keranjanglama->idMenu;
            $this->hargaMenu = $Keranjanglama->hargaMenu;
            $this->menus = $Keranjanglama->menus;
            $this->totalJumbel = $Keranjanglama->totalJumbel;
            $this->totalPembelian = $Keranjanglama->totalPembelian;
        }
    }

    public function add($menu, $id_menu)
    {
        $storedMenu = ['jumbel' => 0, 'harga_menu' => $menu->harga_menu, 'menu' => $menu];
        if($this->menus){
            if (array_key_exists($id_menu, $this->menus)){
                $storedMenu = $this->menus[$id_menu];
            }
        }
        $storedMenu['jumbel']++;
        $storedMenu['harga_menu'] = $menu->harga_menu * $storedMenu['jumbel'];
        $this->menus[$id_menu] = $storedMenu;
        $this->idMenu = $menu->id_menu;
        $this->hargaMenu = $menu->harga_menu;
        $this->totalJumbel++;
        $this->totalPembelian += $menu->harga_menu;
    }

    public function kurangiSatu($id_menu)
    {
        $this->menus[$id_menu]['jumbel']--; 
        $this->menus[$id_menu]['harga_menu'] -= $this->menus[$id_menu]['menu']['harga_menu'];
        $this->totalJumbel--;
        $this->totalPembelian -= $this->menus[$id_menu]['menu']['harga_menu'];

        if ($this->menus[$id_menu]['jumbel'] <= 0)
        {
            unset($this->menus[$id_menu]);
        }
    }

    public function hapusSemua($id_menu)
    {
        $this->totalPembelian-= $this->menus[$id_menu]['jumbel'];
        $this->totalPembelian -= $this->menus[$id_menu]['harga_menu'];
        unset($this->menus[$id_menu]);
    }
}
