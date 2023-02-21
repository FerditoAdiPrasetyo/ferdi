<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view ('kategori.index');
    }
    public function store(Request $request)
    {
          $this->validate($request, [
            'nama_kategori'          => 'required',
        ]);
        return redirect()->route('kategori.index');
    }
}
