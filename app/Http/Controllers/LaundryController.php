<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    public function create()
    {
        return view('laundry.add-laundry');
    }

    public function store(Request $request)
    {
        // Validasi Field
        $request->validate([
            'nama' => 'required',
            'customer' => 'required',
            'kategori' => 'required',
            'treatment' => 'required',
            'tanggal_ambil' => 'required',
            'harga' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png'
        ]);

        // Upload Image
        $gambar = $request->gambar->store('gambar');

        // Add data
        Laundry::create([
            'nama' => $request->nama,
            'customer' => $request->customer,
            'kategori' => $request->kategori,
            'treatment' => $request->treatment,
            'tanggal_ambil' => $request->tanggal_ambil,
            'harga' => $request->harga,
            'gambar' => $gambar
        ]);
        return redirect('/');
    }
}
