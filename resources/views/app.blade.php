<!DOCTYPE html>
<html lang="en" data-theme="pastel">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <title>Atop Clean</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    @inertiaHead
    @vite('resources/js/app.jsx')
</head>

<body>
    <div class="flex flex-col md:flex-row">
        

        {{-- Navbar --}}
        <div class="md:hidden">
            <div class="navbar bg-base-100 z-50 sticky top-0">
                <div class="flex-1">
                    <a class="btn btn-ghost normal-case text-xl" href="{{ url('/') }}">ATOP CLEAN</a>
                    <ul class="menu menu-horizontal px-1">
                        <li>
                            <details>
                                <summary>
                                    Halaman
                                </summary>
                                <ul class="p-2 bg-base-100">
                                    <li><a href="{{ url('/') }}">Daftar Pesanan</a></li>
                                    <li><a href="{{ url('/tambah') }}">Tambah Pesanan</a></li>
                                    <li><a href="{{ url('/history') }}">Histori</a></li>
                                    <li><a href="{{ url('/laporan') }}">Laporan</a></li>
                                </ul>
                            </details>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- End Of Navbar --}}

        <!-- Main content -->
        <div class="w-full md:w-3/4">
            <!-- Rest of the page content here -->
            @yield('main')
        </div>
        {{-- End Of Main Content --}}
    </div>
    @inertia
</body>

</html>
