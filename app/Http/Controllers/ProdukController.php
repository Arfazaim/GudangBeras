<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('produks.index', compact('produks'));
    }

    public function create()
    {
        return view('produks.create');
    }

    public function store(Request $request)
    {
        Produk::create($request->all());
        return redirect()->route('produk.index');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('produks.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->update($request->all());
        return redirect()->route('produk.index');
    }

    public function destroy($id)
    {
        Produk::destroy($id);
        return redirect()->route('produk.index');
    }
}
