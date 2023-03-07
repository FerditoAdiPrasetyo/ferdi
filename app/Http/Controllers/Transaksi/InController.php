<?php

namespace App\Http\Controllers\Transaksi;

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
    public function store($id)
    {
        $permintaans = Permintaan::all;
        // $barangs = Barang::
        $permintaans->update([
            'barang_id' => $id,
            ''
        ]);
        return redirect()->route(transaksi.out);
    }
    public function destroy(Request $request, $id)
    {
        $permintaans = Permintaan::findOrFail($id);
        $permintaans->delete();

        return redirect()->back();
    }
}
