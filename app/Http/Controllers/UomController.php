<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UomController extends Controller
{
    public function index()
    {
        return view('uom.index');
    }
}
