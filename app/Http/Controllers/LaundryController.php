<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    public function index()
    {
        $laundries = Laundry::all();
        return view('laundry.index', compact('laundries'));
    }

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
            'category' => 'required',
            'treatment' => 'required',
            'tanggal_ambil' => 'required',
            'harga' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png'
        ]);

        // Category
        $categoryObject = json_decode($request->category);
        $request['category'] = $categoryObject->nama;

        // Treatment
        $treatmentObject = json_decode($request->treatment);
        $request['treatment'] = $treatmentObject->nama;

        // Upload Image
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('gambar');
        } else {
            $gambar = null;
        }


        // Add data
        Laundry::create([
            'nama' => $request->nama,
            'customer' => $request->customer,
            'category' => $request->category,
            'treatment' => $request->treatment,
            'tanggal_ambil' => $request->tanggal_ambil,
            'harga' => $request->harga,
            'gambar' => $gambar
        ]);
        return redirect('/');
    }

    public function delete($id)
    {
        Laundry::findOrFail($id)->delete();
        return redirect('/');
    }

    public function search(Request $request)
    {
        if ($request->search) {
            $laundries = Laundry::where('nama', 'LIKE', "%$request->search%")->get();
            return view('laundry.daftar-pesanan-result', ['laundries' => $laundries, 'searchValue' => $request->search]);
        } else {
            return redirect('/');
        }
    }
}
