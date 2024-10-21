<?php

namespace App\Http\Controllers;
use App\Models\siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data siswa dari database
    $siswas = siswa::all();

    // Kirim data siswa ke view index.blade.php
    return view('siswa.index', compact('siswas'));
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
        $request->validate([
            'pelapor'     => 'required|string',
            'terlapor'    => 'required|string',
            'kelas'       => 'required|string',
            'laporan'     => 'required|string',
            'img'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

         //upload image
         $image = $request->file('img');
         $image->store('products', 'public', $image->hashName());
 


        siswa::create([
            'pelapor'     => $request->pelapor,
            'terlapor'    => $request->terlapor,
            'kelas'       => $request->kelas,
            'laporan'     => $request->laporan,
            'img'         => $image->hashName(),
            'status'      => 'sedang dalam tinjauan',
        ]);


        return redirect('siswa.index')->with('Mantap', 'Laporan sudah diterima guru');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
