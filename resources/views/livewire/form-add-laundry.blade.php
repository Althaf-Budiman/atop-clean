<div class="flex p-5">
        <form action="{{ url('/tambah') }}" method="POST" enctype="multipart/form-data" class="form-control">
            @csrf
            <div class="mb-4 w-[75vw]">
                <label for="nama" class="text-gray-700 text-lg font-medium block">Nama Produk</label>
                <input type="text" id="nama" name="nama" class="input input-primary w-full mt-2 h-9 p-3">
                @error('nama')
                   <p class="text-red-600">{{ $message }}</p> 
                @enderror
            </div>

            <div class="mb-8 w-[75vw]">
                <label for="customer" class="text-gray-700 text-lg font-medium block">Nama Customer</label>
                <input type="text" id="customer" name="customer" class="input input-primary w-full mt-2 h-9 p-3">
                @error('customer')
                   <p class="text-red-600">{{ $message }}</p> 
                @enderror
            </div>

            <div class="mb-4 w-[75vw] flex justify-center gap-10">

                <div>
                    <label for="kategori" class="text-gray-700 text-lg font-medium block">Pilih Kategori</label>
                    <select wire:model="selectedCategory" name="category" id="kategori" class="block p-3 w-80 select select-primary">
                        <option value="">Choose Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category }}">{{ $category->nama }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="text-red-600">{{ $message }}</p> 
                    @enderror
                </div>
                
                @isset($selectedCategory)
                    <div>
                        <label for="treatment" class="text-gray-700 text-lg font-medium block">Pilih Treatment</label>
                        <select id="treatment" wire:model="selectedTreatment" name="treatment" class="block p-3 w-80 select select-primary">
                            <option selected value="">Choose treatment</option>
                            @foreach ($treatments as $treatment)
                            <option value="{{ $treatment }}">{{ $treatment->nama }}</option>
                            @endforeach
                        </select>
                        @error('treatment')
                        <p class="text-red-600">{{ $message }}</p> 
                        @enderror
                    </div>
                @endisset
            </div>

            <div class="mb-10 w-[75vw] flex justify-center gap-10">
                <div>
                    <label for="tanggal_ambil" class="text-gray-700 text-lg font-medium block">Tanggal Ambil</label>
                    <input type="date" name="tanggal_ambil" id="tanggal_ambil" class="block p-3 w-80 input input-primary" value="{{ $tanggalAmbilValue }}" />
                    @error('tanggal_ambil')
                       <p class="text-red-600">{{ $message }}</p> 
                    @enderror
                </div>
                <div>
                    <label for="harga" class="text-gray-700 text-lg font-medium block">Harga</label>
                    <input type="number" name="harga" id="harga" class="block p-3 w-80 input input-primary text-green-600" value="{{ $hargaValue }}" />
                    @error('harga')
                       <p class="text-red-600">{{ $message }}</p> 
                    @enderror
                </div>
            </div>

            <div class="mb-4 w-[75vw]">
                <label for="gambar" class="text-gray-700 text-lg font-medium block">Pilih Gambar</label>
                <input type="file" id="gambar" name="gambar" class="file-input file-input-primary">
                @error('gambar')
                   <p class="text-red-600">{{ $message }}</p> 
                @enderror

                <button type="submit" class="float-right p-3 btn mr-3 btn-primary">Tambah Laundry</button>
            </div>
        </form>
    </div>