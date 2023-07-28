<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    public function index()
    {
        $laundries = Laundry::where('done', false)->get();
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

    public function done($id)
    {
        $doneLaundry = Laundry::find($id);
        $doneLaundry->update([
            'done' => true,
            'done_date' => Carbon::today(),
        ]);
        return redirect('/');
    }

    public function history()
    {
        $laundries = Laundry::where('done', true)->latest()->get();
        return view('laundry.history-laundry', compact('laundries'));
    }

    public function laporan()
    {
        // Data Hari Ini
        $today = Carbon::today();
        $todayLaundries = Laundry::whereDate('done_date', $today)->get();

        // Data Minggu Ini
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $weekLaundries = Laundry::whereBetween('done_date', [$startOfWeek, $endOfWeek])->get();

        // Data Bulan Ini
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $monthLaundries = Laundry::whereBetween('done_date', [$startOfMonth, $endOfMonth])->get();

        return view('laundry.laporan', [
            // Total Pesanan
            'totalTodayLaundries' => count($todayLaundries),
            'totalWeekLaundries' => count($weekLaundries),
            'totalMonthLaundries' => count($monthLaundries)
        ]);
    }
}
