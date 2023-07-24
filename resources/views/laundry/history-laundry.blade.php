@extends('layouts.app')
@section('main')
    <div class="flex justify-center pt-8">
        <h1 class="text-3xl text-gray-600">Histori Laundry</h1>
    </div>
    <div class="flex justify-center">
        <div class="border border-base-300 my-1 w-96"></div>
    </div>
    <div class="flex justify-center">
        <h1 class="text-lg text-gray-400">Barang yang selesai di laundry akan tampil disini.</h1>
    </div>

    <div class="flex p-5 flex-wrap justify-center gap-10">
        @foreach ($laundries as $laundry)
        {{-- Card --}}
            <div class="card card-compact shadow-lg w-64 overflow-hidden">
                @isset($laundry->gambar)
                    <img src="{{ asset('storage/' . $laundry->gambar) }}" class="h-40 w-full object-cover">
                    @else
                    <div class="h-40 w-full object-cover bg-gray-500 text-black font-semibold text-center leading-[10rem]">No Image</div>
                @endisset
                <div class="card-body">
                    <h2 class="text-xl font-semibold whitespace-nowrap text-ellipsis overflow-hidden">{{ $laundry->nama }}</h2>
                    <div class="flex">
                        <p class="whitespace-nowrap text-ellipsis overflow-hidden">Customer: <b>{{ $laundry->customer }}</b></p>
                    </div>
                    <div class="flex">
                        <p>Tanggal Ambil: <b>{{ $laundry->tanggal_ambil }}</b></p>
                    </div>
                    <div class="flex">
                        <p>Category: <b>{{ $laundry->category }}</b></p>
                    </div>
                    <div class="flex justify-between">
                        <p>Treatment: <b>{{ preg_replace("/\([^()]*\)/", "", $laundry->treatment); }}</b></p>
                    </div>
                    <div class="flex">
                        <p class="font-medium text-xl text-green-600"><b>Rp. {{ number_format($laundry->harga, 0, ".", "."); }}</b></p>
                    </div>
                </div>
                {{-- Button Delete --}}
                <form action="{{ url("history/$laundry->id") }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="bg-red-600 text-white font-semibold text-center text-3xl hover:cursor-pointer hover:opacity-80 transition">
                        <button type="submit" class="h-14 w-full object-cover">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </div>
                </form>
                {{-- End Button Delete --}}
            </div>
        {{-- End Card --}}
        </div>
        @endforeach
    </div>
@endsection