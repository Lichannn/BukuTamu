<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = DB::table('pegawai')->paginate(5);
        return view('admin.pegawai', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_pegawai');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'pekerjaan' => 'required|string',
        ]);
        $pegawai = new pegawai();
        $pegawai->nama = $request->nama;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->pekerjaan = $request->pekerjaan;
        if (!empty($request->foto)) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/'), $imageName);
            $pegawai->foto = 'images/faces/'.$imageName;
        }else{
            $pegawai->foto = 'face1.jpg';
        }

        if($pegawai->save()){
            return redirect(route('pegawai'))->with('success', 'Data berhasil di tambah');
        }else{
            return redirect(route('pegawai'))->with('error', 'Data gagal di tambah');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pegawai = pegawai::where('id_pegawai', $id)->firstOrFail();
        return view('admin.edit_pegawai', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'pekerjaan' => 'required|string',
        ]);
        
        $pegawai = pegawai::where('id_pegawai', $id)->firstOrFail();

        $pegawai->nama = $request->nama;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->pekerjaan = $request->pekerjaan;

        if (!empty($request->foto)) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/'), $imageName);
            $pegawai->foto = 'images/faces/'.$imageName;
        }else{
            $pegawai->foto = 'face1.jpg';
        }

        if($pegawai->update()){
            return redirect(route('pegawai'))->with('success', 'Data berhasil di Ubah');
        }else{
            return redirect(route('pegawai'))->with('error', 'Data gagal di Ubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pegawai = pegawai::where('id_pegawai', $id)->firstOrFail();
        if($pegawai->delete()){
            return redirect(route('pegawai'))->with('success', 'Data berhasil di Hapus');
        }else{
            return redirect(route('pegawai'))->with('error', 'Data gagal di Hapus');
        }
    }
}
