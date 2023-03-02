<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index()
    {
        $kategories = Kategori::paginate(5);
        return view ('kategori.index', compact('kategories'));
    }
    public function store(Request $request)
    {
        $kategories = Kategori::create(
            $request->all()
        );
        return redirect()->back();
    }
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }
     public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->update(['nama' => $request->nama]);
        
        return redirect()->route('kategori');
    }
     public function destroy(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->back();
    }

}
