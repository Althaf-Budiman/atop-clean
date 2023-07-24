@extends('layouts.app')
@section('main')
    {{-- Search Bar --}}
    <div class="p-3">
        <form action="{{ url('/search') }}" method="GET">
            <input type="search" placeholder="Cari Laundry Berdasarkan Nama Laundry" value="" class="block w-full input input-primary" name="search">
        </form>
    </div>
    {{-- End Of Search Bar --}}

    <div class="flex p-5 flex-wrap justify-center gap-10">
        @foreach ($laundries as $laundry)
        {{-- Card --}}
        <label for="modal_detail_{{ $laundry->id }}">
            <div class="card card-compact shadow-lg w-64 overflow-hidden hover:cursor-pointer hover:opacity-80 hover:bg-gray-100 transition">
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
                {{-- Button Done --}}
                <label for="modal_done_{{ $laundry->id }}">
                    <div class="bg-green-600 text-white font-semibold text-center text-5xl h-14 w-full object-cover hover:cursor-pointer">
                        <i class="bi bi-check"></i>
                    </div>
                </label>
                {{-- End Button Done --}}
            </div>
        </label>
        {{-- End Card --}}

        {{-- Modal Done --}}
        <input type="checkbox" id="modal_done_{{ $laundry->id }}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box">
                    <h3 class="text-lg font-bold text-center">Apakah Anda Yakin Sudah Menyelesaikan "{{ $laundry->nama }}"?</h3>
                    <div class="justify-center flex pt-4 gap-2">
                        <label for="modal_done_{{ $laundry->id }}" class="btn btn-primary w-32">Belum</label>
                        <form action="{{ url("/$laundry->id") }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="h-14 w-full object-cover btn btn-success">
                                Sudah
                            </button>
                        </form>
                    </div>
                </div>
            <label class="modal-backdrop" for="modal_done_{{ $laundry->id }}"></label>
        </div>
        {{-- End Modal Done --}}

        {{-- Modal Detail --}}
        <input type="checkbox" class="modal-toggle" id="modal_detail_{{ $laundry->id }}">
            <div class="modal">
                <div class="modal-box">
                    <div class="flex gap-5">
                        <div class="flex flex-col">
                            @isset($laundry->gambar)
                                <img src="{{ asset('storage/' . $laundry->gambar) }}" class="rounded-lg h-56 w-52">
                                @else
                                <div class="h-56 w-48 object-cover bg-gray-500 text-black font-semibold text-center leading-[14rem] rounded-lg">No Image</div>
                                @endisset
                            <h2 class="text-xl font-bold text-black text-center pt-2">{{ $laundry->nama }}</h2>
                            <div class="border my-1"></div> 
                            <p class="text-sm text-center pt-2">Category: <b>{{ $laundry->category }}</b></p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p>Customer: <br><b>{{ $laundry->customer }}</b></p>
                            <p>Tanggal Ambil: <br><b>{{ $laundry->tanggal_ambil }}</b></p>
                            <p>Treatment: <br> <b>{{ $laundry->treatment }}</b></p>
                            <p class="font-medium text-xl text-green-600"><b>Rp. {{ number_format($laundry->harga, 0, ".", "."); }}</b></p>
                            <div class="modal-action">
                                <label for="modal_detail_{{ $laundry->id }}" class="btn btn-primary w-32">Tutup</label>
                                <form action='{{ url("/$laundry->id") }}' method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-error w-32">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <label class="modal-backdrop" for="modal_detail_{{ $laundry->id }}"></label>
            {{-- End of modal detail --}}
        </div>
        @endforeach
    </div>
@endsection