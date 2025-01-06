<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Tampilkan daftar transaksi.
     */
    public function index()
    {
        $transaksis = Transaksi::with('gudang', 'produk', 'pelanggan')->get();
        return view('transaksi.index', compact('transaksis'));
    }

    /**
     * Tampilkan halaman tambah transaksi.
     */
    public function create()
    {
        $gudangs = Gudang::all();
        $produks = Produk::all();
        $pelanggans = Pelanggan::all();

        return view('transaksi.create', compact('gudangs', 'produks', 'pelanggans'));
    }

    /**
     * Simpan data transaksi baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'gudang_id' => 'required|exists:gudangs,id',
            'produk_id' => 'required|exists:produks,id',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'jumlah' => 'required|numeric|min:1',
            'harga' => 'required|numeric|min:1',
            'total_harga' => 'required|numeric|min:1',
        ]);

        // Simpan data
        Transaksi::create($validated);

        return redirect()->route('transaksi.index');
        
    }

    /**
     * Tampilkan halaman edit transaksi.
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $gudangs = Gudang::all();
        $produks = Produk::all();
        $pelanggans = Pelanggan::all();

        return view('transaksi.edit', compact('transaksi', 'gudangs', 'produks', 'pelanggans'));
    }

    /**
     * Perbarui data transaksi.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'gudang_id' => 'required|exists:gudangs,kode_gudang',
            'produk_id' => 'required|exists:produks,id',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'jumlah' => 'required|numeric|min:1',
            'harga' => 'required|numeric|min:1',
            'total_harga' => 'required|numeric|min:1',
        ]);

        // Temukan transaksi dan perbarui data
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($validated);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    /**
     * Hapus data transaksi.
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
