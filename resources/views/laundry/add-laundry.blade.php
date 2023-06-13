@extends('layouts.app')
@section('main')
    
<div class="flex justify-center pt-8">
    <h1 class="text-3xl text-gray-600">Tambah Pesanan Laundry</h1>
</div>
<div class="flex justify-center">
    <div class="border border-base-300 my-1 w-96"></div>
</div>

<livewire:form-add-laundry/>

@endsection