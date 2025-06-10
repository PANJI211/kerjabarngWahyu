<?php

namespace App\Http\Controllers;

use App\Models\special_menu;
use Illuminate\Http\Request;

class special_menuController extends Controller
{
    public function index() 
    {
        $special_menus = special_menu::paginate(4);

        return view('special_menus.index', compact('special_menus'));
    }

    public function create() 
    {
        return view('special_menus.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public', $gambar->hashName());

        special_menu::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar->hashName()
        ]);

        return redirect('/special_menus');
    }

    public function edit(special_menu $special_menu)
    {
        return view('special_menus.edit', compact('special_menu'));
    }

    public function update(Request $request, special_menu $special_menu)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required|numeric',
        ]);

        $special_menu->nama = $request->nama;
        $special_menu->harga = $request->harga;
        $special_menu->deskripsi = $request->deskripsi;

        if($request->file('gambar')) {

            Storage::disk('local')->delete('public/', $product->gambar);
            $gambar = $request->file('gambar');
            $gambar->storeAs('public', $gambar->hashName());
        }

        $special_menu->update();

        return redirect('/special_menus');
    }
}
