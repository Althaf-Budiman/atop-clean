@extends('layouts.app')
@section('main')
    <div class="flex justify-center pt-8">
        <h1 class="text-3xl text-gray-600">Laporan</h1>
    </div>
    <div class="flex justify-center">
        <div class="border border-base-300 my-1 w-96"></div>
    </div>
    <div class="flex justify-center">
        <h1 class="text-lg text-gray-400">Laporan Pendapatan</h1>
    </div>
    
    <div class="justify-start">
        <h1 class="font-semibold p-5 text-2xl">Laporan Pesanan</h1>
        <div class="flex p-5 flex-wrap justify-start gap-10">

            <div class="card w-72 bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="flex justify-center text-5xl text-[#226699]">{{ $totalTodayLaundries }}</h2>
                    <p class="flex mt-5 justify-center text-xl text-center text-gray-400">Total Pesanan Di Selesaikan Hari Ini</p>
                </div>
            </div>

            <div class="card w-72 bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="flex justify-center text-5xl text-[#226699]">{{ $totalWeekLaundries }}</h2>
                    <p class="flex mt-5 justify-center text-xl text-center text-gray-400">Total Pesanan Di Selesaikan Minggu Ini</p>
                </div>
            </div>

            <div class="card w-72 bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="flex justify-center text-5xl text-[#226699]">{{ $totalMonthLaundries }}</h2>
                    <p class="flex mt-5 justify-center text-center text-xl text-gray-400">Total Pesanan Di Selesaikan Bulan Ini</p>
                </div>
            </div>

        </div>
    </div>
@endsection