@extends('layouts.app')
@section('main')

    <div class="flex justify-center p-3">
        <h1 class="text-3xl">Tambah Pesanan Laundry</h1>
    </div>
    <div class="flex justify-center">
        <div class="border border-gray-950 my-1 w-96"></div>
    </div>

    <div class="flex p-5">
        <form action="" method="POST">
            @csrf
            <div class="mb-4 w-[75vw]">
                <label for="nama" class="text-gray-700 text-lg font-medium block">Nama Produk</label>
                <input type="text" id="nama" name="nama" class="border border-gray-700 rounded-lg w-full mt-2 h-9 p-3">
            </div>
            <div class="mb-4 w-[75vw]">
                <label for="customer" class="text-gray-700 text-lg font-medium block">Nama Customer</label>
                <input type="text" id="customer" name="customer" class="border border-gray-700 rounded-lg w-full mt-2 h-9 p-3">
            </div>

            <div class="mb-4 w-[75vw] flex justify-center gap-10">

                <div>
                    <label for="kategori" class="text-gray-700 text-lg font-medium block">Pilih Kategori</label>
                    <select name="kategori" id="kategori" class="block p-3 w-80 border border-gray-700">
                        <option value="sepatu">Sepatu</option>
                    </select>
                </div>
                
                <div>
                    <label for="treatment" class="text-gray-700 text-lg font-medium block">Pilih Treatment</label>
                    <select name="treatment" id="treatment" class="block p-3 w-80 border border-gray-700">
                        <option value="eazy">Eazy (1 Hari)</option>
                    </select>
                </div>
            </div>

            <div class="mb-4 w-[75vw] flex justify-center gap-10">
                <div>
                    <label for="tanggal_ambil" class="text-gray-700 text-lg font-medium block">Tanggal Ambil</label>
                    <input type="date" name="tanggal_ambil" id="tanggal_ambil" class="block p-3 w-80 border border-gray-700"></input>
                </div>
                <div>
                    <label for="harga" class="text-gray-700 text-lg font-medium block">Harga</label>
                    <input type="number" name="tanggal_ambil" id="tanggal_ambil" class="block p-3 w-80 border border-gray-700 text-green-600"></input>
                </div>
            </div>

            <div class="mb-4 w-[75vw]">
                <label for="gambar" class="text-gray-700 text-lg font-medium block">Pilih Gambar</label>
                <input type="file" id="gambar" name="gambar">

                <img src="" width="160" class="float-right">
            </div>
        </form>
    </div>
        
@endsection