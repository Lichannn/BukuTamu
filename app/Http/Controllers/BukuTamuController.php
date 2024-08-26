<?php

namespace App\Http\Controllers;

use App\Models\bukuTamu;
use Illuminate\Http\Request;

class BukuTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboardView()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(bukuTamu $bukuTamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bukuTamu $bukuTamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bukuTamu $bukuTamu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bukuTamu $bukuTamu)
    {
        //
    }
}
