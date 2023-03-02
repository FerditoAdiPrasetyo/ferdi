<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(5);
        return view('brand.index', compact('brands'));
    }
    public function store(Request $request)
    {
        $kategory = Brand::create(
            $request->all()
        );
        return redirect()->back();
    }
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brand.edit', compact('brand'));
    }
     public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->update(['nama' => $request->nama]);
        
        return redirect()->route('brand');
    }
     public function destroy(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->back();
    }
}
