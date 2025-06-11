<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index() 
    {
        $categories = category::all();
        return view('categories.index', compact('categories'));
    }

    public function create() 
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required',
            'deskripsi'=> 'required'
        ]);

        category::create([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/categories');
    }

    public function edit(category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, category $category)
    {
        $this->validate($request, [
            'nama_kategori' => 'required',
        ]);

        $category->nama_kategori = $request->nama_kategori;
        $category->deskripsi = $request->deskripsi;

        $category->update();

        return redirect('/categories');
    }

    public function destroy(category $category)
    {

        $category->delete();

        return redirect('/categories');
    }
}
