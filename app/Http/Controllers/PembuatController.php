<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembuatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @retu    rn \Illuminate\Http\Response
     */
    public function index()
    {
        $pembuat = Pembuat::all();
        return view('pembuat.index', compact('pembuat'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('pembuat.create', compact('kategori'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembuat = new Pembuat;
        $pembuat->nama = $request->nama;
        $pembuat->email = $request->email;
        $pembuat->judul = $request->judul;
        $pembuat->isi = $request->isi;
        $pembuat->id_kategori = $request->id;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move(('images/pembuat'), $name);
            $pembuat->cover = $name;
        }

        $pembuat->save();
        Alert::success('Hore!', 'Data Berhasil Ditambahkan!!');
        return redirect()->route('pembuat.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembuat = Pembuat::findOrFail($id);
        $kategori = Kategori::findOrFail($pembuat->id_kategori);
        return view('pembuat.show', compact('pembuat', 'kategori'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembuat = Pembuat::findOrFail($id);
        $kategori = Kategori::findOrFail($pembuat->id_kategori);
        $allkategori = Kategori::all();
        return view('pembuat.edit', compact('pembuat', 'kategori', 'allkategori'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pembuat = Pembuat::findOrFail($id);
        $pembuat->nama = $request->nama;
        $pembuat->email = $request->email;
        $pembuat->judul = $request->judul;
        $pembuat->isi = $request->isi;
        $pembuat->id_kategori = $request->id;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move(('images/pembuat'), $name);
            $pembuat->cover = $name;
        }

        $pembuat->save();
        Alert::success('Hore!', 'Data Berhasil Diubah!!');
        return redirect()->route('pembuat.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembuat = Pembuat::findOrFail($id);
        $pembuat->delete();
        Alert::success('Hore!', 'Data Berhasil Dihapus!!');
        return redirect()->route('pembuat.index');
    }
}
