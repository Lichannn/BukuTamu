<?php

namespace App\Http\Controllers;

use App\Models\buku_tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pegawai;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class BukuTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboardView()
    {
        $buku = DB::table('buku_tamu')->paginate(5);

        $count = DB::table('buku_tamu')->count();
        $countPegawai = pegawai::all()->count();

        $firstBT = buku_tamu::orderBy('created_at', 'desc')->pluck('nama')->first();
        $firstPegawai = pegawai::orderBy('created_at', 'desc')->pluck('nama')->first();

        //count weeks charts
        // Get the current week start and end dates
        $startOfWeek = now()->startOfWeek();
        $endOfWeek = now()->endOfWeek();
        
        // Query to count records by day of the week
        $records = DB::table('buku_tamu')
            ->select(DB::raw('DAYNAME(created_at) as day_of_week'), DB::raw('COUNT(*) as total'))
            ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
            ->groupBy('day_of_week')
            ->orderBy(DB::raw('FIELD(day_of_week, "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday")'))
            ->pluck('total', 'day_of_week');

        // Ensure the data has all days of the week, even if the count is zero
        $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        $data = array_fill_keys($daysOfWeek, 0);
        foreach ($records as $day => $total) {
            $data[$day] = $total;
        }

        return view('admin.dashboard', compact('buku', 'count', 'countPegawai', 'firstBT', 'firstPegawai', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buku = DB::table('buku_tamu')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.buku', compact('buku'));
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

    public function download()
    {
        $filePath = public_path('images/DAFTAR TAMU BPS KOTA BANDAR LAMPUNG.docx');
     
        if (Storage::exists($filePath)) {
            return response()->download($filePath);
        }else{
            return redirect()->route('Buku')->with('error', 'File not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = buku_tamu::where('id_buku_tamu', $id)->firstOrFail();
        return view('admin.edit_buku', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'no_tlp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'kegiatan' => 'required|string|max:255',
            'prihal' => 'required|string',
            'pekerjaan' => 'required|string',
            'kesan' => 'required|string',
        ]);  
        $bukuTamu = buku_tamu::where('id_buku_tamu', $id)->firstOrFail();
        $bukuTamu->nama = $request->nama;
        $bukuTamu->email = $request->email;
        $bukuTamu->no_tlp = $request->no_tlp;
        $bukuTamu->alamat = $request->alamat;
        $bukuTamu->kegiatan = $request->kegiatan;
        $bukuTamu->prihal = $request->prihal;
        $bukuTamu->pekerjaan = $request->pekerjaan;
        $bukuTamu->kesan = $request->kesan;
        if($bukuTamu->update()){
            return redirect(route('Buku'))->with('success', 'Data berhasil diubah');
        } else{
            return redirect(route('Buku'))->with('error', 'Data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = buku_tamu::where('id_buku_tamu', $id)->firstOrFail();
        if($buku->delete()){
            return redirect(route('Buku'))->with('success', 'Data berhasil di Hapus');
        }else{
            return redirect(route('Buku'))->with('error', 'Data gagal di Hapus');
        }
    }
}
