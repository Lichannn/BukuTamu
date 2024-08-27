<?php

namespace App\Http\Controllers;

use App\Models\buku_tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboardView()
    {
        $pegawai = DB::table('pegawai')->paginate(5);
        return view('admin.dashboard', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'no_tlp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'kegiatan' => 'required|string|max:255',
            'prihal' => 'required|string',
            'pekerjaan' => 'required|string',
            'kesan' => 'required|string'
        ]);  
        $bukuTamu = new buku_tamu();
        $bukuTamu->nama = $request->nama;
        $bukuTamu->email = $request->email;
        $bukuTamu->no_tlp = $request->no_tlp;
        $bukuTamu->alamat = $request->alamat;
        $bukuTamu->kegiatan = $request->kegiatan;
        $bukuTamu->prihal = $request->prihal;
        $bukuTamu->pekerjaan = $request->pekerjaan;
        $bukuTamu->kesan = $request->kesan;
        if($bukuTamu->save()){
            return redirect('/')->with('success', 'Data berhasil disimpan');
        }else{
            return redirect('/')->with('error', 'Data gagal disimpan');
        }
        

        return redirect()->route('dashboard')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(buku_tamu $bukuTamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku_tamu $bukuTamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buku_tamu $bukuTamu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku_tamu $bukuTamu)
    {
        //
    }
}
