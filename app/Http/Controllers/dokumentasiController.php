<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dokumentasi;

class dokumentasiController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Reponse
     */
    public function index()
    {
        $dokumentasi = Dokumentasi::all();
        return view('dokumentasi/index', compact('dokumentasi'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokumentasi/create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'isi' => 'required',
            'gambar' => 'required'
        ]);

        $file = $request->file('gambar');

        // // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'image';

        // // upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        Dokumentasi::create([
            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'isi' => $request->isi,
            'gambar' => $file->getClientOriginalName()
        ]);

        // Dokumentasi::create($request->all());
        return redirect('/dokumentasi')->with('status', 'Data ' . $request->judul . ' berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokumentasi $dokumentasi)
    {
        return view('dokumentasi/edit', compact('dokumentasi'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokumentasi $dokumentasi)
    {
        $request->validate([
            'kategori_id' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'isi' => 'required',
            'gambar' => 'required'
        ]);

        $file = $request->file('gambar');

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'image';

        // upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        Dokumentasi::where('id', $dokumentasi->id)
            ->update([
                'kategori_id' => $request->kategori_id,
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'isi' => $request->isi,
                'gambar' => $file->getClientOriginalName()
            ]);
        return redirect('/dokumentasi')->with('status', 'Data ' . $request->judul . ' berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Dokumentasi $dokumentasi)
    {
        Dokumentasi::destroy($dokumentasi->id);
        return redirect('/dokumentasi')->with('statusHapus', 'Data Berhasil Dihapus!');
    }


}
