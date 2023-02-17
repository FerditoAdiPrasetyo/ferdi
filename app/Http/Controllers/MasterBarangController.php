<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterBarangController extends Controller
{
    public function index()
    {
        return view('masterbarang.index');
    }
    public function create()
    {
        return view('masterbarang.create');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    }
    public function show()
    {
        return view('masterbarang.stocks.show');
    }
    public function req()
    {
        return view('masterbarang.stocks.restock');
    }
}
