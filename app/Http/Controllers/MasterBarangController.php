<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Brand;
use App\Satuan;
use App\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterBarangController extends Controller
{
    public function index()
    {
        $cupboards = Kategori::paginate(5);
        return view('masterbarang.index', compact('cupboards'));
    }
    public function create()
    {
        $data = [
            'kategories'  => Kategori::findOrFail($id),
            'brands'      => Brand::get(),
            'satuans'     => Satuan::get(),
        ];
        return view('masterbarang.create', $data);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    }
    public function store(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
        $barang = Barang::create([
            'kategori_id'   => $kategori->id,
            'nama'          => $request->nama,
            'brand_id'      => $request->brand_id,
            'satuan_id'     => $request->satuan_id,
            'harga'         => $request->harga,
            'quantity'      => $request->quantity,
        ]);
        return redirect()->back();
    }
    public function edit($id)
    {
        $permintaan = Barang::findOrFail($id);
        return view('masterbarang.edit', compact('permintaan'));
    }
    public function show($id)
    {
        $data = [
            'kategories'    => Kategori::findOrFail($id),
            'brands'        => Brand::get(),
            'satuans'       => Satuan::get(),
        ];
        return view('masterbarang.create', $data);
    }
}
