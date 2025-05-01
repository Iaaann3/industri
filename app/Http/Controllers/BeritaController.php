<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pembuat;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('berita.index', compact('berita'));
    }

    public function create()
    {
        $pembuat = Pembuat::all();
        return view('berita.create', compact('pembuat'));
    }

    public function store(Request $request)
    {
        $berita = new Berita;
        $berita->id_pembuat = $request->id;
        $berita->tentang = $request->tentang;
        $berita->save();
        Alert::success('Hore!', 'Data Berhasil Ditambahkan!!');
        return redirect()->route('berita.index');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        $pembuat = Pembuat::findOrFail($berita->id_pembuat);
        return view('berita.show', compact('berita', 'pembuat'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        $pembuat = Pembuat::findOrFail($berita->id_pembuat);
        $allpembuat = Pembuat::all();
        return view('berita.edit', compact('berita', 'pembuat', 'allpembuat'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        $berita->id_pembuat = $request->id;
        $berita->tentang = $request->tentang;
        $berita->save();
        Alert::success('Hore!', 'Data Berhasil Diubah!!');
        return redirect()->route('berita.index');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        Alert::success('Hore!', 'Data Berhasil Dihapus!!');
        return redirect()->route('berita.index');
    }
}