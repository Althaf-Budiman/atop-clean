<div class="flex p-5 flex-wrap gap-5">

    @foreach ($laundries as $laundry)
    {{-- Card --}}
        <div class="rounded-md shadow-lg w-60 overflow-hidden">
            @isset($laundry->gambar)
                <img src="{{ asset('storage/' . $laundry->gambar) }}" class="h-40 w-full object-cover">
                @else
                <div class="h-40 w-full object-cover bg-gray-500 text-black font-semibold text-center leading-[10rem]">No Image</div>
            @endisset
            <h2 class="font-semibold text-xl text-center pt-2">{{ $laundry->nama }}</h2>
            <div class="flex">
                <p class="font-medium text-[13px] text-gray-600 px-2 pt-2 whitespace-nowrap text-ellipsis ">Customer: <b>{{ $laundry->customer }}</b></p>
            </div>
            <div class="flex">
                <p class="font-medium text-[13px] text-gray-600 px-2">Tanggal Ambil: <b>{{ $laundry->tanggal_ambil }}</b></p>
            </div>
            <div class="flex">
                <p class="font-medium text-[13px] text-gray-600 px-2">Category: <b>{{ $laundry->category }}</b></p>
            </div>
            <div class="flex justify-between">
                <p class="font-medium text-[13px] text-gray-600 pl-2 whitespace-nowrap text-ellipsis">Treatment: <b>{{ preg_replace("/\([^()]*\)/", "", $laundry->treatment); }}</b></p>
                <p class="font-medium text-lg pr-2 text-green-600"><b>Rp. {{ number_format($laundry->harga, 0, ".", "."); }}</b></p>
            </div>
        </div>
    {{-- End Card --}}
    @endforeach

</div>
