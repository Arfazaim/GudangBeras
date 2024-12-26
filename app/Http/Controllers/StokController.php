<?php

namespace App\Http\Controllers;

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
        return view('stok.create');
    }

    public function store(Request $request)
    {
        Stok::create($request->all());
        return redirect()->route('stok.index');
    }

    public function edit($id)
    {
        $stok = Stok::find($id);
        return view('stok.edit', compact('stok'));
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
