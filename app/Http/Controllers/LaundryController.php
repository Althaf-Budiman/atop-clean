<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Laundry;
use App\Models\Treatment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LaundryController extends Controller
{
    public function index()
    {
        $laundries = Laundry::where('done', false)->orderByDesc('created_at')->get();
        return Inertia::render('Main', [
            'laundries' => $laundries
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        $treatments = Treatment::all();

        return Inertia::render('Create', [
            'categories' => $categories,
            'treatments' => $treatments
        ]);
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
            'gambar' => 'nullable|mimes:jpg,jpeg,png'
        ]);

        // Category
        $categoryObject = Category::find($request->category);
        $request['category'] = $categoryObject->nama;

        // Treatment
        $treatmentObject = Treatment::find($request->treatment);
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
    }

    public function history()
    {
        $laundries = Laundry::where('done', true)->latest()->get();
        return Inertia::render('History', [
            'laundries' => $laundries
        ]);
    }

    public function report()
    {
        // Variable Hari-hari
        $today = Carbon::today();

        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        // Data Hari Ini
        $todayLaundries = Laundry::whereDate('done_date', $today)->get();

        // Data Minggu Ini
        $weekLaundries = Laundry::whereBetween('done_date', [$startOfWeek, $endOfWeek])->get();

        // Data Bulan Ini
        $monthLaundries = Laundry::whereBetween('done_date', [$startOfMonth, $endOfMonth])->get();

        // Penghasilan Hari Ini
        $incomeToday[] = 0;
        foreach ($todayLaundries as $todayLaundry) {
            $incomeToday[] = $todayLaundry->harga;
        }

        // Penghasilan Minggu Ini
        $incomeWeek[] = 0;
        foreach ($weekLaundries as $weekLaundry) {
            $incomeWeek[] = $weekLaundry->harga;
        }

        // Penghasilan Bulan Ini
        $incomeMonth[] = 0;
        foreach ($monthLaundries as $monthLaundry) {
            $incomeMonth[] = $monthLaundry->harga;
        }

        return Inertia::render('Report', [
            // Total Pesanan
            'totalTodayLaundries' => count($todayLaundries),
            'totalWeekLaundries' => count($weekLaundries),
            'totalMonthLaundries' => count($monthLaundries),

            'totalIncomeToday' => array_sum($incomeToday),
            'totalIncomeWeek' => array_sum($incomeWeek),
            'totalIncomeMonth' => array_sum($incomeMonth),
        ]);
    }
}
