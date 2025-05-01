<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $kategori = new Kategori;
        $kategori->naka = $request->naka;
        $kategori->deks_kate = $request->deks_kate;
        $kategori->save();
        Alert::success('Hore!', 'Data Berhasil Ditambahkan!!');
        return redirect()->route('kategori.index');
    }

    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.show', compact('kategori'));
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->naka = $request->naka;
        $kategori->deks_kate = $request->deks_kate;
        $kategori->save();
        Alert::success('Hore!', 'Data Berhasil Diubah!!');
        return redirect()->route('kategori.index');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        Alert::success('Hore!', 'Data Berhasil Dihapus!!');
        return redirect()->route('kategori.index');
    }
}