<div class="drawer-open drawer">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <!-- Page content here -->
    </div>
    {{-- Sidebar Item --}}
    <div class="drawer-side">
        <ul class="menu p-4 w-80 h-full bg-base-200 text-base-content">
            {{-- Image Logo --}}
            <div class="flex justify-center">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('logo-atop.png') }}" alt="" />
                </a>
            </div>
            <li>
                <a href="{{ url('/') }}">
                    <div
                        class="flex items-center p-3 justify-center gap-2 w-full"
                    >
                        <i class="bi bi-journal-text text-2xl"></i>
                        <p class="font-medium">Daftar Pesanan</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ url('/tambah') }}">
                    <div
                        class="flex items-center p-3 justify-center gap-2 w-full"
                    >
                        <i class="bi bi-file-plus text-2xl"></i>
                        <p class="font-medium">Tambah Pesanan</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div
                        class="flex items-center p-3 justify-center gap-2 w-full"
                    >
                        <i class="bi bi-clock-history text-2xl"></i>
                        <p class="font-medium">Histori</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div
                        class="flex items-center p-3 justify-center gap-2 w-full"
                    >
                        <i class="bi bi-bar-chart text-2xl"></i>
                        <p class="font-medium">Laporan</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
