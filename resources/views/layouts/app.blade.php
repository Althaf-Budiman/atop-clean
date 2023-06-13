<!DOCTYPE html>
<html lang="en" data-theme="winter">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
        />
        <title>Atop Clean</title>
        @livewireStyles
    </head>
    <body>
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-72">
                <div class="sticky top-0 h-screen">
                    <!-- Sidebar content here -->
                    <div class="menu bg-base-200 flex flex-col h-[100vh]">
                        <!-- Image Logo -->
                        <div class="flex justify-center">
                            <a href="{{ url('/') }}">
                                <img
                                    src="{{ asset('logo-atop.png') }}"
                                    alt=""
                                />
                            </a>
                        </div>

                        <!-- Sidebar Items -->
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">
                                    <div
                                        class="flex items-center p-3 justify-center gap-2"
                                    >
                                        <i class="bi bi-journal-text text-2xl"></i>
                                        <p class="font-medium">Daftar Pesanan</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/tambah') }}">
                                    <div
                                        class="flex items-center p-3 justify-center gap-2"
                                    >
                                        <i class="bi bi-file-plus text-2xl"></i>
                                        <p class="font-medium">Tambah Pesanan</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div
                                        class="flex items-center p-3 justify-center gap-2"
                                    >
                                        <i class="bi bi-clock-history text-2xl"></i>
                                        <p class="font-medium">Histori</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div
                                        class="flex items-center p-3 justify-center gap-2"
                                    >
                                        <i class="bi bi-bar-chart text-2xl"></i>
                                        <p class="font-medium">Laporan</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- End of sidebar --}}

            <!-- Main content -->
            <div class="w-3/4">
                <!-- Rest of the page content here -->
                @yield('main')
            </div>
            {{-- End Of Main Content --}}
        </div>

        <link
            href="https://cdn.jsdelivr.net/npm/daisyui@3.1.0/dist/full.css"
            rel="stylesheet"
            type="text/css"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        @livewireScripts
    </body>
</html>
