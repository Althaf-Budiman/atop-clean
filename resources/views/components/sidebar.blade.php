<div class="bg-[#55ACEE] flex flex-col h-screen">
    {{-- Image Logo --}}
    <div>
        <a href="{{ url('/') }}">
            <img src="{{ asset('logo-atop.png') }}" alt="">
        </a>
    </div>

    {{-- Sidebar Item --}}
    <div class="flex flex-col">

        <a href="{{ url('/') }}">
            <div class="flex items-center p-3 justify-center gap-2 hover:bg-[#226699] w-full">
                <i class="bi bi-journal-text text-2xl"></i>
                <p class="font-medium">Daftar Pesanan</p>
            </div>
        </a>
        <a href="{{ url('/tambah') }}">
            <div class="flex items-center p-3 justify-center gap-2 hover:bg-[#226699] w-full">
                <i class="bi bi-file-plus text-2xl"></i>
                <p class="font-medium">Tambah Pesanan</p>
            </div>
        </a>
        <a href="">
            <div class="flex items-center p-3 justify-center gap-2 hover:bg-[#226699] w-full">
                <i class="bi bi-clock-history text-2xl"></i>
                <p class="font-medium">Histori</p>
            </div>
        </a>
        <a href="">
            <div class="flex items-center p-3 justify-center gap-2 hover:bg-[#226699] w-full">
                <i class="bi bi-bar-chart text-2xl"></i>
                <p class="font-medium">Laporan</p>
            </div>
        </a>

    </div>

</div>