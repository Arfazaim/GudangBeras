<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\Produk;
use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        $stoks = Stok::all();
        return view('stok.index', compact('stoks'));
    }

    public function create()
    {
        $gudangs = Gudang::all();
        $produks = Produk::all();

        return view('stok.create', compact('gudangs', 'produks'));
    }


    public function store(Request $request)
    {
        Stok::create($request->all());
        return redirect()->route('stok.index');
    }

    public function edit($id)
    {
        $stok = Stok::find($id);
        $gudangs = Gudang::all();
        $produks = Produk::all();

        return view('stok.edit', compact('stok', 'gudangs', 'produks'));
    }

    public function update(Request $request, $id)
    {
        $stok = Stok::find($id);
        $stok->update($request->all());
        return redirect()->route('stok.index');
    }

    public function destroy($id)
    {
        Stok::destroy($id);
        return redirect()->route('stok.index');
    }
}
