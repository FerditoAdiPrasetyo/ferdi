<?php

namespace App\Http\Controllers;

use App\Satuan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UomController extends Controller
{
    public function index()
    {
        $satuans = Satuan::paginate(5);
        return view('uom.index', compact('satuans'));
    }
    public function store(Request $request)
    {
        $kategori = Satuan::create(
            $request->all()
        );
        return redirect()->back();
    }
     public function edit($id)
    {
        $satuan = Satuan::findOrFail($id);
        return view('uom.edit', compact('satuan'));
    }
     public function update(Request $request, $id)
    {
        $satuan = Satuan::findOrFail($id);
        $satuan->update(['nama' => $request->nama]);
        
        return redirect()->route('uom');
    }
     public function destroy(Request $request, $id)
    {
        $satuan = Satuan::findOrFail($id);
        $satuan->delete();

        return redirect()->back();
    }
}
