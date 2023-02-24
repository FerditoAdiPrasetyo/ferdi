<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RakController extends Controller
{

    public function index($id)
    {
       $barangs = Barang::Where('kategori_id', $id)->with('brand','satuan')->get();

       return view('masterbarang.databarang.index', compact('barangs'));
    }
}