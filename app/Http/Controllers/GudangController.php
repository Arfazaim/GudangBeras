<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        $gudangs = Gudang::all();
        return view('gudang.index', compact('gudangs'));
    }

    public function create()
    {
        return view('gudang.create');
    }

    public function store(Request $request)
    {
        Gudang::create($request->all());
        return redirect()->route('gudang.index');
    }

    public function edit($id)
    {
        $gudang = Gudang::find($id);
        return view('gudang.edit', compact('gudang'));
    }

    public function update(Request $request, $id)
    {
        $gudang = Gudang::find($id);
        $gudang->update($request->all());
        return redirect()->route('gudang.index');
    }

    public function destroy($id)
    {
        Gudang::destroy($id);
        return redirect()->route('gudang.index');
    }
}

