<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;

class PemasokController extends Controller
{
    public function index()
    {
        $pemasoks = Pemasok::all();
        return view('pemasok.index', compact('pemasoks'));
    }

    public function create()
    {
        return view('pemasok.create');
    }

    public function store(Request $request)
    {
        Pemasok::create($request->all());
        return redirect()->route('pemasok.index');
    }

    public function edit($id)
    {
        $pemasok = Pemasok::find($id);
        return view('pemasok.edit', compact('pemasok'));
    }

    public function update(Request $request, $id)
    {
        $pemasok = Pemasok::find($id);
        $pemasok->update($request->all());
        return redirect()->route('pemasok.index');
    }

    public function destroy($id)
    {
        Pemasok::destroy($id);
        return redirect()->route('pemasok.index');
    }
}
