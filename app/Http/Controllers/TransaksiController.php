<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::with('gudang', 'produk', 'pelanggan')->get();
        return view('transaksi.index', compact('transaksis'));
    }


    public function create()
    {
        $gudangs = Gudang::all();
    $produks = Produk::all();
    $pelanggans = Pelanggan::all();

    return view('transaksi.create', [
        'gudangs' => $gudangs,
        'produks' => $produks,
        'pelanggans' => $pelanggans
    ]);

    }

    public function store(Request $request)
    {
        Transaksi::create($request->all());
        return redirect()->route('transaksi.index');
    }

    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        return view('transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->all());
        return redirect()->route('transaksi.index');
    }

    public function destroy($id)
    {
        Transaksi::destroy($id);
        return redirect()->route('transaksi.index');
    }
}
