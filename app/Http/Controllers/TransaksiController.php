<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('transaksis.index', compact('transaksis'));
    }

    public function create()
    {
        return view('transaksis.create');
    }

    public function store(Request $request)
    {
        Transaksi::create($request->all());
        return redirect()->route('transaksi.index');
    }

    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        return view('transaksis.edit', compact('transaksi'));
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
