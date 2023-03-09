<?php

namespace App\Http\Controllers\Transaksi;

use App\Barang;
use App\Permintaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InController extends Controller
{
    public function index()
    {
        $permintaans = Permintaan::with('barang')->where('status','in')->paginate(5);
        return view('transaksi.in.index', compact('permintaans'));
    }
    public function create($id)
    {
        $permintaans = Barang::findOrFail($id);
        return redirect()->back();
    }
    public function store(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $permintaans = Permintaan::create([
            'barang_id' =>  $barang->id ,
            'jumlah'    =>  $request->jumlah,
        ]);
        return redirect()->back();
    }

        /**
    * Update the specified resource in storage.
    *
    * @param  \App\Permintaan  $permintaan
    */

    public function update(Permintaan $permintaan)
    {
        $barang = Barang::findOrFail($permintaan->barang_id);
        $permintaan->update([
            'status'                => 'approved',
            'tanggal'                => now(),
        ]);
        if ($permintaan->save()) {
            $hitung = $barang->stock - $permintaan->jumlah;
            $barang->update([
                'stock' => $hitung
            ]);
        }
        return redirect()->back()->with('successfull', 'Permintaan Berhasil Disetujui');
    }

    public function destroy(Request $request, $id)
    {
        $permintaans = Permintaan::findOrFail($id);
        $permintaans->delete();
        return redirect()->back();
    }
}
